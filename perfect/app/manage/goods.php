<?php
class  goods extends indexmain {
   function __construct()
   {
       parent::__construct();
       $this->db =  new db('goods');
   }
   function show(){
       $gid = $_GET['gid'];
       $goods = $this->db->where("gid=$gid")->select("*")[0];
       $this->smarty->assign("goods",$goods);
       $this->smarty->display('view/details.html');
   }
}