<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
    public function __construct() {
        header("Content-type:text/html;charset = utf-8");
        parent::__construct();
    }
    // 发生错误时调用此方法
    public function error($message = '') {
        $msg = $message ? $message :"";
        $this->assign('message',$msg);
        $this->display("Index/error");
    }

    //404页面方法，不存在的方法
    public function _empty(){
        header("HTTP/1.0 404 NOT FOUND");
        $this->display('Index/error');
    }
}