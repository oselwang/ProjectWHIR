<?php

    namespace App\ProjectWHIR\Presenter;


    class UserPresenter extends Presenter
    {

        public function welcomeMessage()
        {
            return sprintf('Welcome, %s', ucfirst($this->user->name));
        }

    }