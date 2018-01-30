<?php
class db{
    public $tablename;
    public $connect;
    function __construct($tablename)
    {
        $this->tablename = $tablename;
        $this->config();
    }
    function config(){
       $this->connect =  new mysqli('localhost','root','','perfect',3306);
       if($this->connect->connect_errno){
           echo '数据库连接失败,失败信息' . $this->connect->connect_errno;
           exit();
       }
       $this->connect->query('set names utf8');
    }

    function select($info){
        if(strpos($info,'elect')){
            $sql = $info;
        }else{
            $sql = "select $info from $this->tablename";
        }
        return  $this->connect->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

}