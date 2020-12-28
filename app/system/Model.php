<?php
require_once('app/config/config.php');

class Model {

    public function __construct() {
        $this->config = new Config();
    }

    public function database() {
        $host = "localhost";  
        $user  = "root";  
        $pass = "";  
        $db = "blog";  
        return new mysqli($host, $user, $pass, $db);
    }
}
?>