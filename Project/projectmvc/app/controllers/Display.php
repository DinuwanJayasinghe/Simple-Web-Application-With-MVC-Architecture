<?php

class Display extends Controller{

    public function index(){

        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $item = new TBitem;

            $item->findAll();

            $data['errors'] = $item->errors;
        }


        $this->view('display',$data);

    }

}
