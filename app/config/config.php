<?php  
$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('BASE_URL', $root);

class Config    
{ 
    public function database() { 
        $host = "localhost";  
        $user  = "root";  
        $pass = "";  
        $db = "blog";  
        return new mysqli($host, $user, $pass, $db);
    }
}  
?> 