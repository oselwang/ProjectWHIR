<?php
/**
 * Created by PhpStorm.
 * User: bahasolaptop2
 * Date: 12/05/16
 * Time: 12:09
 */

namespace App\ProjectWHIR\Request;


use App\User;

class RegisterForm extends Form
{
    protected $rules = [
        'name'  => 'required',
        'phone' => 'numeric|min:11|unique:users',
        'email' => 'email|unique:users'
    ];

    public function create()
    {
        $user = New User;
        if ( $this->isValid() ) {

            $user_registered = $user->create([
                'name'     => $this->fields('name'),
                'email'    => $this->fields('email'),
                'phone'    => $this->fields('phone'),
                'password' => bcrypt($this->fields('phone')),
                'role'     => 'member'
            ]);

            return $user_registered;

        } else return false;
    }
}