<?php

namespace Home\Controller;
use Think\Exception;

class DownloadController extends CommonController {

    public function index() {
        if (!$_GET['id'] || !is_numeric($_GET['id'])) {
            return $this->error('Download error!');
        }
        $id = I('get.id');
        $file = D("Download")->find($id);
        if (!$file || $file['status'] != 1) {
            return $this->error('Download error!');
        }
        //获取文件后缀名
        $str = strtolower($file['path']);
        
        $houzhuiming = end(explode('.',$str));//获取文件后缀名
        
        $file_down_name = $file['name'] . '.'.$houzhuiming; //下载后的文件名
        $file_path = $_SERVER['DOCUMENT_ROOT'].$file['path'];
        
        //首先要判断给定的文件存在与否
        if (!file_exists($file_path)) {
            return $this->error('Download error!');
        }
        //如果是pdf文件就直接打开预览
        if($houzhuiming == 'pdf'){
            return $this->view($file['path']);
        }

        $fp = fopen($file_path, "r");
        $file_size = filesize($file_path);

        //下载文件需要用到的头
        Header("Content-type: application/octet-stream");
        Header("Accept-Ranges: bytes");
        Header("Accept-Length:" . $file_size);
        Header("Content-Disposition: attachment; filename=" . $file_down_name);

        $buffer = 1024;
        $file_count = 0;
        //向浏览器返回数据
        while (!feof($fp) && $file_count < $file_size) {
            $file_con = fread($fp, $buffer);
            $file_count+=$buffer;
            echo $file_con;
        }
        fclose($fp);
    }
    
    public function view($pdfPath){
        $this->assign('path',$pdfPath);
        $this->display('Download/view');
    }

}
