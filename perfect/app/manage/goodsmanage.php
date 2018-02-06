
<?php
class goodsmanage extends main {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('goods');
    }
    function index(){
        $obj = new unit();
        $cate = $obj->cateTree($this->db->connect,0,0,'category');

        $db = new db('boss');
        $boss = $db->select('*');

        $this->smarty->assign('cate',$cate);
        $this->smarty->assign('boss',$boss);

        $this->smarty->display('view/goodsadd.html');
    }
    function add(){
        $data = $_POST;
        $data['gimages'] = substr($data['gimages'],0,-1);
        $rows = $this->db->insert($data);
        if($rows == 1){
            echo 'ok';
        }else if($rows < 0){
            echo 'error';
        }
    }

    function show(){
       $data = $this->db->select('*');
       $this->smarty->assign('data',$data);
       $this->smarty->display('view/goodsshow.html');
    }
}