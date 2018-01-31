<?php
class  goods extends main {
   function __construct()
   {
       parent::__construct();
       $this->db =  new db('goods');
   }
   function index(){
       $this->smarty->display('view/goods.html');
   }
}