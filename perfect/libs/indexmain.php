<?php
class indexmain{
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('app');
        $this->smarty->setCompileDir('compile');
    }
    function checkLogin(){
        session_start();
        if(isset($_SESSION['islogin'])){
            return true;
        }
        return false;
    }
}