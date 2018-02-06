<?php

class db
{
    public $tablename;
    public $connect;

    function __construct($tablename)
    {
        $this->tablename = $tablename;
        $this->whereson  = '';
        $this->config();
    }

    function config()
    {
        $this->connect = new mysqli('localhost', 'root', '', 'perfect', 3306);
        if ($this->connect->connect_errno) {
            echo '数据库连接失败,失败信息' . $this->connect->connect_errno;
            exit();
        }
        $this->connect->query('set names utf8');
    }
//   select * from table
//   username , password , *
    function select($info)
    {
        if (strpos($info, 'elect')) {
            $sql = $info;
        } else {
            $sql = "select $info from $this->tablename  " . $this->whereson;
        }
        return $this->connect->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
    //  insert into table (username,password) value ('','')
    //  $_POST
    function insert($info)
    {
        if (is_string($info) && strpos($info, 'nsert')) {
            $sql = $info;
        } else {
            $sql = "insert into $this->tablename (";
            $keys = array_keys($info);
            for ($i = 0; $i < count($keys); $i++) {
                $sql .= $keys[$i] . ',';
            }
            $sql = substr($sql, 0, -1) . ') values (';

            foreach ($info as $value) {
                $sql .= "'" . $value . "',";
            }
            $sql = substr($sql, 0, -1) . ')';
        }
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }


    function update($info)
    {
        if (is_string($info) && strpos($info, 'pdate')) {
            $sql = $info;
        } else {

        }
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }

    function delete ($info){
        $sql = "delete from $this->tablename where $info";
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }

    function where($info){
       $this->whereson = "where " . $info;
       return $this;
    }

}