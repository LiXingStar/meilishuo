<?php
 class catemanage extends main {
     function __construct()
     {
         parent::__construct();
         $this->db = new db('category');
     }
     function index(){
         $obj =  new unit();
         $str = $obj->cateTree($this->db->connect,0,0,'category');
         $this->smarty->assign('str',$str);
         $this->smarty->display('view/cateadd.html');
     }
     function add(){
        var_dump($_POST);
     }

 }