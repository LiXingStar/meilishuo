<?php

class orders extends indexmain
{
    function __construct()
    {
        parent::__construct();
        $this->db = new db('orderlist');
    }
    function add()
    {
//        var_dump(json_decode($_GET['data']));
        $data = json_decode($_GET['data']);
        session_start();
        $uid = $_SESSION['uid'];
        $this->db->insert("insert into orderlist (uid) values ($uid)");
        $oid = $this->db->connect->insert_id;
        $db = new db('orderattach');
        $sql = "insert into orderattach (gid,number,oid) values ";
        foreach ($data as $v) {
            $sql .= "('" . $v->gid . "','" . $v->number . "'," . $oid . "), ";
        }
        $sql = substr($sql, 0, -2);

        $rows = $db->insert($sql);

        if ($rows >= 1) {
            echo 'ok';
        } else if ($rows < 0) {
            echo 'error';
        }
    }
}