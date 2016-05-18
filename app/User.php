<?php

    namespace App;

    use App\ProjectWHIR\Presenter\UserPresenter;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable
    {
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $table = 'users';

        protected $fillable = [
            'name', 'email', 'phone', 'password', 'role',
        ];

        public function variable()
        {
            return $this->hasMany(Variable::class);
        }

        public function isAdmin($user)
        {
            return 'admin' == $user->role;
        }

        public function present()
        {
            return new UserPresenter($this);
        }


    }
