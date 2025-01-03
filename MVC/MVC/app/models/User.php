<?php

class User{

    use Model;

    protected $table = '';

    // Allow editable columns
    protected $allowedColumns = [
        '',
        '',
        '',
        '',

    ];

    public function validate($data){


        $this->errors = [];

        if(empty($data['email'])){

            $this->errors['email'] = "Email is required";
        }else{

            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){

                $this->errors['email'] = "Email is not valid";

            }
        }

        if(empty($data['password'])){

            $this->errors['password'] = "Password is required";
        }

        if(empty($this->errors)){

            return true;
        }
        return false;
    }
}