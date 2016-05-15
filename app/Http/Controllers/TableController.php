<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Variable;
use Excel;

class TableController extends Controller
{
    protected $variable;
    protected $user;

    public function __construct(Variable $variable, User $user)
    {
        $this->user = $user;
        $this->variable = $variable;
        $this->middleware('admin');
    }

    public function doctor()
    {

    }

    public function form()
    {
        $variables = $this->variable->paginate(10);

        $users = $this->user->get();

        $completed = count($this->variable->where('status', 'completed')->get());
        $uncompleted = count($this->variable->where('status', 'uncompleted')->get());

        return view('formtable', compact('variables', 'completed', 'uncompleted', 'users'));
    }


    public function exportExcel()
    {

        Excel::create('Whir Form', function ($excel) {

            $excel->sheet('New sheet', function ($sheet) {
                $variables = $this->variable->get();
                $sheet->loadView('table.formtable', compact('variables'));
            });

        })->download('xls');

        return redirect()->back();
    }

    public function delete($id)
    {
        $variable = $this->variable->where('id', $id)->first();
        $variable->delete();

        return redirect()->back();
    }
}
