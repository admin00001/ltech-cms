<?php
namespace Admin\Controller;
use Think\Controller;

class ImageController extends Controller{
    //处理图片
    public function ajaxuploadimage(){
        $upload = D("UploadFile");
        $result = $upload->upload();

        if($result === false){
            return show(0, '上传失败！');
        }
        return show(1, '上传成功！',$result);
    }
    
    //处理kindeditor 编辑器的上传的图片
    public function kindupload(){
        $upload = D("UploadFile");
        $result = $upload->upload();
        if($result === false){
            return showKind(1, '上传失败！'); //showKind在Common/Common/function.php
        }
        return showKind(0, $result);
    }
    
    //处理后台的资源文件上传,上传后的文件在Download文件夹里面，这些文件供客户下载
    public function ajaxuploadfile(){
        $result = D("UploadFile")->uploaddownloadfile();
        if($result === false){
            return show(0, '上传失败！');
        }
        return show(1, '上传成功！',$result);
    }
    
    //处理后台的Catalogue上传,上传后的文件在Download/catalogue文件夹里面，供客户下载
    public function ajaxuploadCatalogue(){
        $type = 'catalogue'; //目录分类
        $result = D("UploadFile")->uploaddownloadfile($type);
        if($result === false){
            return show(0, '上传失败！');
        }
        return show(1, '上传成功！',$result);
    }
}
