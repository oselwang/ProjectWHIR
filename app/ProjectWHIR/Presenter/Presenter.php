<?php
    /**
     * Created by PhpStorm.
     * User: bahasolaptop2
     * Date: 18/05/16
     * Time: 13:08
     */

    namespace App\ProjectWHIR\Presenter;


    use App\User;

    abstract class Presenter
    {
        protected $user;

        public function __construct(User $user)
        {
            $this->user = $user;
        }

        public function __get($property)
        {
            if (method_exists($this, $property)) {
                return call_user_func([$this, $property]);
            }

            $message = "%s does not respond to the %s property or method";

            throw new \Exception(sprintf($message, static::class, $property));
        }
    }