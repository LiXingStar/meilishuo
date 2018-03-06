<?php
class demo extends main{
    function __construct()
    {
        parent::__construct();
    }
    function codes(){
       $code =  new code(100,30);
       $code->output();
//        echo '1234';
    }

    function index(){
        $this->smarty->display('view/demo.html');
    }
}




