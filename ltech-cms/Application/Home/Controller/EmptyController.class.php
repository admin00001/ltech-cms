<?php
namespace Home\Controller;
use Think\Controller;
/*
 * 404错误页面类
 *
 */
Class EmptyController extends CommonController{
    public function _empty(){
        header("HTTP/1.0 404 NOT FOUND");
        $this->display('Index/error');
    }
    public function index(){
        header("HTTP/1.0 404 NOT FOUND");
        $this->display('Index/error');
    }
}