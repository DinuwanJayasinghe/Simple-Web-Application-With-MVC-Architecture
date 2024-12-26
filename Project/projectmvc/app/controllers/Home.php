<?php

class Home extends Controller{

    public function index(){

        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $user = new User;

            $arr['email'] = $_POST['email'];
            $row = $user->first($arr);

            if($row){
                if($row->password === $_POST['password']){

                    $_SESSION['USER'] = $row;
                    redirect('item');

                }
            }
            $user->errors['email'] = "Wrong email or password";
            $data['errors'] = $user->errors;
        }

        $this->view('home',$data);

    }

}
