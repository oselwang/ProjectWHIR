<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\ProjectWHIR\Request\UpdateVariableForm;
use App\ProjectWHIR\Request\VariableForm;
use App\Variable;
use Auth;
use Illuminate\Http\Request;

class FormController extends Controller
{
    protected $variable;
    protected $request;

    public function __construct(Variable $variable, Request $request)
    {
        $this->request = $request;
        $this->variable = $variable;
        $this->middleware('member');
    }

    public function index()
    {
        return view('form');
    }

    public function postVariable(VariableForm $variableForm)
    {

        $variable = $variableForm->create();

        flash('Form successfully added');

        return redirect()->back();

    }

    public function history()
    {
        $variables = $this->variable->where('user_id', Auth::user()->id)->get();
        $completed = count($this->variable->where('user_id', Auth::user()->id)->where('status', 'completed')->get());
        $uncompleted = count($this->variable->where('user_id', Auth::user()->id)->where('status', 'uncompleted')->get());

        return view('formhistory', compact('completed', 'uncompleted', 'variables'));
    }

    public function editForm($variableid)
    {
        $variable = $this->variable->where('id', $variableid)->first();

        if ( $variable->user_id != Auth::user()->id ) {
            return redirect()->back();
        }


        return view('formedit', compact('variable'));
    }

    public function updateForm(UpdateVariableForm $updateVariableForm)
    {
        $exception = $this->request->except('hrtwhen', 'dietpillwhen', 'birthcontrolstate', 'otherarrhythmias');
        $variable = $this->variable->where('id', $this->request->get('variableid'))->first();
        $all = $this->request->all();
        $variable->fill($all);


        if ( $this->request->get('hrt') == 'Yes' && $this->request->get('hrtwhen') == null ) {
            $variable->status = 'uncompleted';
        } elseif ( $this->request->get('dietpill') == 'Yes' && $this->request->get('dietpillwhen') == "" ) {
            $variable->status = 'uncompleted';
        } elseif ( $this->request->get('birthcontrol') == 'Yes' && $this->request->get('birthcontrolstate') == "" ) {
            $variable->status = 'uncompleted';
        } elseif (in_array("",$exception) && in_array(null,$exception) ) {
            $variable->status = 'uncompleted';
        } else {
            $variable->status = 'completed';
        }


        $variable->save();

        flash('Form successfully updated');

        return redirect()->back();
    }

    public function delete($id)
    {
        $variable = $this->variable->where('id', $id)->first();
        $variable->delete();

        flash('Form Deleted');

        return redirect()->back();
    }

}
