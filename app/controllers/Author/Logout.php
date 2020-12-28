<?php

class Logout extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
    }

    //Logout
    public function index()
    {
        Simple_login::logout();
    }
}
?>