<?php

class App
{

    // Create router

    private $controller = 'Home';
    private $method = 'index';

    private function splitURL()
    {

        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", trim($URL,"/"));
        return $URL;
    }

    public function loadController()
    {

        $URL = $this->splitURL();

        //Select the controller

        $fileName = "../app/controllers/" . ucfirst($URL[0]) . ".php";

        if (file_exists($fileName)) {

            require $fileName;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);

        } else {

            $fileName = "../app/controllers/_404.php";
            require $fileName;
            $this->controller = "_404";
        }

        $controller = new $this->controller;

        //Select method
        if(!empty($URL[1])){

            if(method_exists($controller,$URL[1])){

                $this->method = $URL[1];
                unset($URL[1]);
            }
        }
        
        call_user_func_array([$controller, $this->method], $URL);
    }

    // /Create router
}
