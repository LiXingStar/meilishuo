<?php

class shop extends indexmain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('shopcar');
    }
    function index(){
        if($this->checkLogin()) {
            $sql = "select goods.* , shopcar.number from goods , shopcar where  shopcar.gid = goods.gid and uid={$_SESSION['uid']}";
            $data = $this->db->select($sql);
            $this->smarty->assign('data',$data);
            $this->smarty->display('view/shop-car.html');
        }else{
            $this->smarty->display('view/indexlogin.html');
        }
    }
    function add(){
        $gid = $_GET['gid'];
        session_start();
        $uid = $_SESSION['uid'];
        $data = $this->db->where("gid=$gid and uid=$uid")->select('*');
        if(count($data) === 0){
          $row = $this->db->insert("insert into shopcar (uid,gid,number) values ('{$uid}','{$gid}',1)");
        }else{
            $number = $data[0]['number']+1;
            $sql = "update shopcar set number=$number where gid=$gid and uid=$uid";
            $row = $this->db->update($sql);
        }
        echo $row;
    }

    function addnum(){
        session_start();
        $gid = $_GET['gid'];
        $number = $_GET['number'];
        $uid = $_SESSION['uid'];
        $sql = "update shopcar set number=$number where uid=$uid and gid =$gid";
       $row =  $this->db->update($sql);
       echo $row;
    }

}