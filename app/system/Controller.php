<?php
//Libraries
require_once('app/libraries/smarty/SmartyBC.class.php');

class Controller {
    public function view($view, $data=[])
    {
        require_once('app/views/'.$view);
    }

    public function model($model)
    {
        require_once 'app/models/' . ucfirst($model) . '.php';
        return new $model;
    }
}
?>