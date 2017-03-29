$(function(){
    //极小图上传
    $('#img_xs_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传极小图',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_xs_img').attr('src',obj.data);
                $('#img_xs').attr('value',obj.data);
                $('#img_xs_img').show();
            }
            else{
                dialog.error('上传失败');
            }
        }
    });
    //小图上传
    $('#img_sm_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传小图',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_sm_img').attr('src',obj.data);
                $('#img_sm').attr('value',obj.data);
                $('#img_sm_img').show();
            }
            else{
                dialog.error('上传失败');
            }
        }
    });
    
    //中图上传
    $('#img_md_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传中图',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_md_img').attr('src',obj.data);
                $('#img_md').attr('value',obj.data);
                $('#img_md_img').show();
            }
            else{
                dialog.error('上传失败');
            }
        }
    });
    //大图上传
    $('#img_lg_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传大图',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_lg_img').attr('src',obj.data);
                $('#img_lg').attr('value',obj.data);
                $('#img_lg_img').show();
            }
            else{
                dialog.error('上传失败');
            }
        }
    });
});