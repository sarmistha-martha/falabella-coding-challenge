<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = ROOT . 'app/controller/' . $name . '.php';
        if (file_exists($file))
        {
            require($file);
            $controller = new $name();
            return $controller;
        } else {
            header('HTTP/1.1 404 Not Found');
            die('404 - The file - '.$file.' - not found');
        }
    }

}
?>