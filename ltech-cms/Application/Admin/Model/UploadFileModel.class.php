<?php
namespace Admin\Model;
use Think\Model;

class UploadFileModel extends Model{
    private $_uploadObj = '';
    
    const UPLOAD = 'Upload';
    const DOWNLOAD = 'Download';
    public function __construct() {
        $this->_uploadObj = new \Think\Upload();

    }
    public function upload(){
        $this->_uploadObj->rootPath = './'.self::UPLOAD.'/';
        $this->_uploadObj->subName  = array('date','Y/m-d'); // date(Y) . '/' . date(m) .'/' . date(d);
        //$this->_uploadObj->saveName  ='';
        $result = $this->_uploadObj->upload();
        if($result){
            return '/'.  self::UPLOAD.'/'.$result['file']['savepath'].$result['file']['savename'];            
        }
        return false;      
    }
    //放在/Download目录下的文件
    public function uploaddownloadfile($type=''){
        $this->_uploadObj->rootPath = './'.self::DOWNLOAD.'/'; //文件根目录

        $this->_uploadObj->maxSize = 0; //0代表不限大小 要限大小就以字节为单位  默认最大为2m,若上传失败请修改php.ini的相关post , 文件限制大小的配置

        if($type){
            $this->_uploadObj->saveName = '';  //保持原文件名不变
            $this->_uploadObj->replace = true;  //同名文件会被覆盖
            $this->_uploadObj->subName  = $type; //文件保存路径相对于rootPath
        }else{
            $this->_uploadObj->subName  = 'products/'.date(Y).'/'.date(m).'-'.date(d); //文件保存路径相对于rootPath
        }

        ini_set('upload_max_filesize', '20M');//ini_set动态修改配置  看服务器配置情况 这里的动态修改不一定起作用
        ini_set('post_max_size', '20M');
        ini_set('memory_limit','256M');
        ini_set('file_uploads','on');
        ini_set('max_input_time', 600);
        ini_set('max_execution_time', 600);
        $result = $this->_uploadObj->upload(); 
        if($result){
            
            return '/'.  self::DOWNLOAD.'/'.$result['file']['savepath'].$result['file']['savename'];            
        }
        return false;  
    }
}

