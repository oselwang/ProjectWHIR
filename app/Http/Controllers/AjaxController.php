<?php

    namespace App\Http\Controllers;

    use App\ProjectWHIR\Request\RegisterForm;
    use App\User;
    use Auth;
    use App\Http\Requests;

    class AjaxController extends Controller
    {
        public function postLogin()
        {

        }

        public function postRegister(RegisterForm $registerForm)
        {
            $user = $registerForm->create();

            Auth::login($user);

            return response()->json('success');
        }
    }
