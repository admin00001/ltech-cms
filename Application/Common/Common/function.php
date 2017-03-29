<?php
//前后台ajax交互的提示方法
function show($status,$message,$data=array()){
    
    $result = array(
        'status'  => $status,
        'message' => $message,
        'data'    => $data
        );
        exit(json_encode($result)) ;
}
//后台输入密码进行加密与数据库的进行比较验证
function getMd5Password($password){
   return md5($password.C('MD5_PRE'));
}
//获取后台菜单对应的路由url
function getAdminMenuUrl($menus){
    $url ="/Admin/".$menus['controller']."/".$menus['function']; 
    return $url;
}
//获取当前菜单高亮状态
function getActive($controller){
    $c = strtolower(CONTROLLER_NAME);//当前控制器
    if(strtolower($controller) === $c){
         return "class='active'";
     }
  
}
//获取菜单所属栏目名
function getModuleName($module){
    if($module === 'Admin'){
        return '后台菜单';
    }
    if($module === 'Home'){
        return '前端导航';
    }
}
//显示状态  1正常，-1删除，0关闭
function status($status){
    switch ($status) {
        case -1:
            return '删除';
        case 0:
            return '<i class="fa fa-times " style="color:red;"> 关闭</i>';
        default:
            return '<i class="fa fa-check-square green"> 正常</i>';
    }
}
//获取当前登录管理人员名
function getLoginUsername(){
    return $_SESSION['adminUser']['username'] ? $_SESSION['adminUser']['username'] :'';
}
//获取当前登录管理人员权限
function getLoginUserAuthority(){
    return $_SESSION['adminUser']['authority'] ? $_SESSION['adminUser']['authority'] :'';
}

//产品类型转换名称显示
function getTypeName($productsType,$id){
    foreach ($productsType as $value){
        $type[$value['id']] = $value['name'];
    }
    return isset($type[$id]) ? $type[$id] :'';
}

//showKind函数是kindeditor的上传文件的后台程序的回调函数，返回json格式的数据
function showKind($status,$data){
   header('Content-type:application/json,charset=utf-8');
   if($status === 1){
        exit(json_encode(array(
            'error' =>$status,
            'message' => $data
                
            )));
   }
   if($status === 0){
        exit(json_encode(array(
            'error' =>$status,
            'url' => $data
                
            )));
   }     
  
}
//显示是否有图片
function hasImg($img){
    if($img){
        return '<i class="fa fa-check-square green"> 有</i>'; 
    }
    return '<i class="fa fa-times " style="color:#ec1500;"> 无</i>';
}
//在Download/index根据产品id 获取对应的产品名
function getProductsName($productsName,$id){
    foreach ($productsName as $value){
        $products[$value['products_id']] = $value['name'];
    }
    return isset($products[$id]) ? $products[$id] :'';
}

//根据文件后缀名返回文件类型
function getFileType($path){
    $str = strtolower($path);
    $houzhuiming = end(split('\.',$str)); //或者这样写也行 end(explode('.',$str))
    if($houzhuiming == 'pdf'){
        return '<span style="color:#337ab7"><i class="fa fa-file-pdf-o "></i> '.$houzhuiming.'</span>';
    }
    if($houzhuiming == 'zip'){
        return  '<span  style="color:#337ab7"><i class="fa fa-file-zip-o "></i> '.$houzhuiming.'</span>';
    }
    return  '<span  style="color:#337ab7"><i class="fa fa-file"></i> '.$houzhuiming.'</span>';
 
}

//转换前端导航url
function getHomeNavUrl($nav){
    $url ="/".$nav['module']."/".$nav['controller']."/".$nav['function'].'.html';
    if($nav['controller'] == "Index" && $nav['function'] == 'index') {
        return "/index.html";
    }
    if($nav['controller'] == "Products" && $nav['function'] == 'index'){
        return "/Products.html";
    }
   
    return $url;
}

//产品详情页内容解码
function html_chars_decode($value){
    $newValue = htmlspecialchars_decode($value);
    return $newValue;
}

function checkEmail($email) {
    //filter_var() sanitizes the e-mailaddress using FILTER_SANITIZE_EMAIL
    $field = filter_var($email, FILTER_SANITIZE_EMAIL);

    //filter_var() validates the e-mailaddress using FILTER_VALIDATE_EMAIL
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return TRUE;
    } else {
        return FALSE;
    }
}
//此方法为截取t8-22w中的22 当然其他的比如 t8-15w 就截取15，来填充在模板product.html最后的那个产品名解释的表格里面
function splitT8($name){
    $string = strtolower($name);
    $str = substr($string,-3,2); 
    return $str;
}

//根据后缀名返回对应的class，在下载按钮那里
function download_file_class($path){
    $str = strtolower($path);
    $houzhuiming = end(explode('.',$str));
    if($houzhuiming == 'pdf'){
        return ' fa-file-pdf-o ';
    }
    if($houzhuiming == 'zip'){
        return  'fa-file-zip-o ';
    }
    return  ' fa-file ';
}

function onlyType($value){
    return $value == 0 ? '否': "<span style='color: #f00; font-weight: 700'>是</span>" ;
}

