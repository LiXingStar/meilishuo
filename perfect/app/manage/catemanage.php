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
        $rows = $this->db->insert($_POST);
        if($rows ==1){
            echo 'ok';
        }else if($rows <0){
            echo 'error';
        }
     }
     function show(){
         $data = $this->db->select("*");
         $this->smarty->assign('data',$data);
         $this->smarty->display('view/cateshow.html');
     }
     function update(){
         // cid  type  value
         $data = $_POST;
         $rows = $this->db->update("update category set {$data['type']} = '{$data['value']}' where cid={$data['cid']} ");
         if($rows == 1){
             echo 'ok';
         }else if($rows < 0){
             echo 'error';
         }

     }
     function delete(){
         $cid = $_GET['cid'];
         $rows = $this->db->delete("cid=$cid");
         if($rows == 1){
             echo 'ok';
         }else if($rows < 0){
             echo 'error';
         }
     }

 }