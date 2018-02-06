<?php
class bossmanage extends main {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('boss');
    }
    function index(){
        $this->smarty->display('view/bossadd.html');
    }
    function add(){
        $rows = $this->db->insert($_POST);
        if($rows == 1){
            echo 'ok';
        }else if($rows < 0){
            echo 'error';
        }
    }

    function show(){
       $data =  $this->db->select("select * from boss");
       $this->smarty->assign('data',$data);
       $this->smarty->display('view/bossshow.html');
    }

    function updateshow(){
        $bid = $_GET['bid'];
        $data = $this->db->where(" bid=$bid ")->select("*")[0];
        $this->smarty->assign('data',$data);
        $this->smarty->display('view/bossupdate.html');
    }
}