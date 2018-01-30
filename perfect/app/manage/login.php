<?php
class login extends main {
    function __construct()
    {
      parent::__construct();
      $this->db = new db('manager');
    }
    function index(){
       $this->smarty->display('view/login.html');
    }
    function check(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $data = $this->db->select('select * from manager');
        for($i=0;$i<count($data);$i++){
            if($data[$i]['username'] == $username){
                if($data[$i]['password'] == $password){
                    echo 'ok';
                    exit();
                }else{
                    echo 'error';
                    exit();
                }
            }
        }
        echo 'notexist';

    }
}