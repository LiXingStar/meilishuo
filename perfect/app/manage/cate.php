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
        /* goodslist*/
        $goods = new db('goods');
        $goodslist = $goods->where("cid=$pid")->select("gid,gthumb,gtag,gprice,glove");

        /*title*/
        $cname = $this->db->where("cid=$pid")->select('cname')[0]['cname'];
        /* category*/
        $cid = $this->db->where("cid=$pid")->select("pid")[0]['pid'];
        $category = $this->db->where("pid=$cid")->select("cid,cname,cthumb");

        $this->smarty->assign('title',$cname);
        $this->smarty->assign("category",$category);
        $this->smarty->assign('goodslist',$goodslist);
        $this->smarty->display('view/detailslclass.html');
    }
}