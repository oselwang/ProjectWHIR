<?php
    /**
     * Created by PhpStorm.
     * User: bahasolaptop2
     * Date: 12/05/16
     * Time: 12:10
     */

    namespace App\ProjectWHIR\Request;

    use Illuminate\Http\Request;
    use Illuminate\Foundation\Validation\ValidatesRequests;

    abstract class Form
    {
        use ValidatesRequests;

        protected $request;

        protected $rules;

        abstract function create();


        public function __construct(Request $request = null)
        {
            $this->request = $request ?: request();
        }

        public function isValid()
        {

            $this->validate($this->request, $this->rules);

            return true;
        }

        public function file($property)
        {
            return $this->request->file($property);
        }

        public function fields($property)
        {
            return $this->request->get($property);
        }
    }