<?php
 class index extends indexmain {
     function __construct()
     {
         parent::__construct();
     }
     function show(){
         $this->smarty->assign('title','GTime');
        $this->smarty->display('view/index.html');
     }
 }