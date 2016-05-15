<?php

    namespace App\Http\Controllers;

    use App\ProjectWHIR\Request\RegisterForm;
    use App\User;
    use Auth;
    use App\Http\Requests;
    use Illuminate\Http\Request;

    class AjaxController extends Controller
    {
        protected $request;
        
        public function __construct(Request $request)
        {
            $this->request = $request;    
        }

        public function postLogin()
        {
            $credentials = [
                'email' => $this->request->get('email'),
                'password' => $this->request->get('phone')
            ];

            if (Auth::attempt($credentials)) {
                flash("Welcome back, You're now logged in");

                return response()->json('success');
            }

            return 'fail';
        }

        public function postRegister(RegisterForm $registerForm)
        {
            $user = $registerForm->create();

            Auth::login($user);

            return response()->json('success');
        }
    }
