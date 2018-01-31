<?php
class cate extends indexmain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('category');
    }
    function index(){
        $data = $this->db->select("select * from category where pid=0");
        $this->smarty->assign('data',$data);
        $this->smarty->assign('title','全部分类');
        $this->smarty->display('view/class.html');
    }
    function index1(){
        $pid = $_GET['pid'];

        $title = $this->db->select("select * from category where cid=$pid")[0]['cname'];

        $data = $this->db->select("select * from category where pid=$pid");

        $this->smarty->assign('title',$title);
        $this->smarty->assign('data',$data);
        $this->smarty->display('view/delclass.html');
    }
    function lists(){
        $pid = $_GET['pid'];
//        new db('goods')
    }
}