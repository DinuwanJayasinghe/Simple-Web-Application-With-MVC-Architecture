<?php

class Tbitem
{

    use Model;

    protected $table = '';

    // Allow editable columns
    protected $allowedColumns = [
        '',
        '',
        '',

    ];

    // public function validate($data)
    // {


    //     $this->errors = [];

    //     if (empty($data['name'])) {

    //         $this->errors['name'] = "Name is required";
    //     }

    //     if (empty($data['unit_price'])) {

    //         $this->errors['unit_price'] = "Unit Price is required";
    //     }

    //     if (empty($data['qty'])) {

    //         $this->errors['qty'] = "Quantity is required";
    //     }

    //     if (empty($this->errors)) {

    //         return true;
    //     }
    //     return false;
    // }
}
