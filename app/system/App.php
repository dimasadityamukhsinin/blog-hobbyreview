<?php

class App {
    
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();
        $smarty = new SmartyBC();

        //Controller
        if (isset($url)) {
            if (file_exists('app/controllers/' . ucfirst($url[0]) . '.php')) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }else if(is_dir('app/controllers/' . ucfirst($url[0]))) {
                if(isset($url[1])) {
                    if(file_exists('app/controllers/'.ucfirst($url[0]).'/'. ucfirst($url[1]) . '.php')) {
                        $this->controller = ucfirst($url[0]).'/'.ucfirst($url[1]);
                        unset($url[0]);
                        unset($url[1]);
                    }
                }
            }
        }

        require_once 'app/controllers/' . $this->controller . '.php';
        $expController = explode('/', $this->controller);
        if(count($expController) == 1) {
            $this->controller = new $expController[0];
        }else {
            $this->controller = new $expController[1];
        }

        //Method
        if(isset($url[2])){
            if(method_exists($this->controller, $url[2])){
                $this->method = $url[2];
                unset($url[2]);
            }else {
                $smarty->display('app/views/error/404.tpl');
            }
        }

        //Parameter
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //jalankan controller
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL(){
        if( isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }

}