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
            $users = $this->user->where('role', 'member')->paginate(10);

            $variables = $this->variable->get();

            return view('doctortable', compact('users', 'variables'));
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

            })->download('xlsx');

            return redirect()->back();
        }

        public function exportDoctorExcel()
        {
            Excel::create('Doctor Table', function ($excel) {

                $excel->sheet('New sheet', function ($sheet) {
                    $users = $this->user->where('role', 'member')->get();

                    $variables = $this->variable->get();
                    $sheet->loadView('table.doctortable', compact('variables', 'users'));
                });

            })->download('xlsx');

            return redirect()->back();
        }

        public function delete($id)
        {
            $variable = $this->variable->where('id', $id)->first();
            $variable->delete();

            return redirect()->back();
        }
        
        public function deleteDoctor($id){
            $user = $this->user->where('id',$id)->first();
            $user->delete();
            
            return redirect()->back();
        }
    }
