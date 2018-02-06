<?php
class my extends indexmain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('user');
    }
    function index(){
        if(!$this->checkLogin()) {
            $this->smarty->display('view/indexlogin.html');
        }else{
            $user = $this->db->where("uid={$_SESSION['uid']}")->select('*')[0];
            $this->smarty->assign('user',$user);
            $this->smarty->display('view/my.html');
        }
    }

    function loading(){
        $this->smarty->display('view/loading.html');
    }

    function register(){
        $info = $_POST;
        $info['password'] = md5($info['password']);
        $row = $this->db->insert($info);
        if($row == 1){
            echo 'ok';
        }else if($row < 0){
            echo 'error';
        }
    }

    function check(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $data = $this->db->where("username='$username'")->select("*");
        if(count($data) == 0){
            echo '1';
            exit();
        }

        foreach ($data as $v){
            if($v['password'] == $password){
                session_start();
                $_SESSION['islogin'] = 'yes';
                $_SESSION['uid'] = $v['uid'];
                $_SESSION['user'] = $v['username'];
                echo '2';
                exit();
            }
        }
        echo '3';
        exit();


    }

}