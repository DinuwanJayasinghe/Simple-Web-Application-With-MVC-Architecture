<?php

class Item extends Controller{

    public function index(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $user = new Tbitem;

            // if ($user->validate($_POST)) {

                $user->insert($_POST);
                // redirect('home');
            // }

            $data['errors'] = $user->errors;
        }
        // Show($_POST);
        $this->view('item');

    }

}
