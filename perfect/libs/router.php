<?php

/*
 *  localhost/perfect/index.php / catemanage/add
 *  localhost/perfect/index.php/ index/index
 *
 *  localhost/perfect/index.php / index  /
 *
 *
 *  localhost/perfect/index.php /
 *  localhost/perfect/index.php
 * */

class router
{
    static function index()
    {
       if(!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] == '/'){
           $model = 'login';
           $fn = 'index';
       }else {
          $info = explode('/',substr($_SERVER['PATH_INFO'],1));
          $model = $info[0];
          $fn = isset($info[1]) && $info[1]?$info[1]:'index';
       }

       if(file_exists('app/manage/'.$model.'.php')){
           include 'app/manage/' . $model .'.php';
           if(class_exists($model)){
               $obj = new $model();
               if(method_exists($obj,$fn)){
                   $obj->$fn();
               }else{
                   $title = $fn . ' 方法不存在';
                   include 'app/view/404.html';
               }
           }else{
               $title = $model . ' 类不存在';
               include 'app/view/404.html';
           }
       }else{
           $title = $model . ' 文件不存在';
           include 'app/view/404.html';
       }

    }
}