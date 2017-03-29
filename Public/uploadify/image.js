$(function(){
    //缩略图
    $('#thumb_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传缩略图',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#thumb_img').attr('src',obj.data);
                $('#thumb').attr('value',obj.data);
                $('#thumb_img').show();
                
            }else{
                dialog.error('上传失败');
            }
        }
    });
    //第一张大图
    $('#img_main_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传第一张大图',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_main_img').attr('src',obj.data);
                $('#img_main').attr('value',obj.data);
                $('#img_main_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    
    //场景应用大图一
    $('#img_application_one_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品场景图一',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_application_one_img').attr('src',obj.data);
                $('#img_application_one').attr('value',obj.data);
                $('#img_application_one_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    //场景应用大图二
    $('#img_application_two_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品场景图二',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_application_two_img').attr('src',obj.data);
                $('#img_application_two').attr('value',obj.data);
                $('#img_application_two_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    //family products 相关产品图
    $('#family_products_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传相关产品图',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#family_products_img').attr('src',obj.data);
                $('#family_products').attr('value',obj.data);
                $('#family_products_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    //产品浏览图一
    $('#img_small_one_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品浏览图一',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_small_one_img').attr('src',obj.data);
                $('#img_small_one').attr('value',obj.data);
                $('#img_small_one_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    //产品浏览图二
    $('#img_small_two_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品浏览图二',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_small_two_img').attr('src',obj.data);
                $('#img_small_two').attr('value',obj.data);
                $('#img_small_two_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    //产品浏览图三
    $('#img_small_three_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品浏览图三',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#img_small_three_img').attr('src',obj.data);
                $('#img_small_three').attr('value',obj.data);
                $('#img_small_three_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    
    //产品数据图一（轮播）
    $('#data_banner_one_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品数据图一',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png;*.svg', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#data_banner_one_img').attr('src',obj.data);
                $('#data_banner_one').attr('value',obj.data);
                $('#data_banner_one_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    
    //产品数据图二（轮播）
    $('#data_banner_two_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品数据图二',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png;*.svg', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#data_banner_two_img').attr('src',obj.data);
                $('#data_banner_two').attr('value',obj.data);
                $('#data_banner_two_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
     //产品数据图三（轮播）
    $('#data_banner_three_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品数据图三',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png;*.svg', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#data_banner_three_img').attr('src',obj.data);
                $('#data_banner_three').attr('value',obj.data);
                $('#data_banner_three_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    //产品数据图四（轮播）
    $('#data_banner_four_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品数据图四',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png;*.svg', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#data_banner_four_img').attr('src',obj.data);
                $('#data_banner_four').attr('value',obj.data);
                $('#data_banner_four_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
    //产品数据图五（轮播）
    $('#data_banner_five_upload').uploadify({
        'swf' : SCOPE.ajax_upload_swf,//上传进度条swf
        'uploader' : SCOPE.ajax_upload_image_url,  //后台接口
        'buttonText' : '上传产品数据图五',
        'fileObjName': 'file',    //name 后台 $_POST['file']接收
        'multi':false,          //false 只能一次选一张图上传
        'fileTypeExts':'*.gif;*.jpg;*.png;*.svg', //可以上传的格式
        'onUploadSuccess': function(file,data,response){//上传成功的回调函数
            //response true , false
            console.log(data);
            if(response){
                var obj =JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头
                $('#' + file.id).find('.data').html('  上传完毕');
                $('#data_banner_five_img').attr('src',obj.data);
                $('#data_banner_five').attr('value',obj.data);
                $('#data_banner_five_img').show();
            }else{
                dialog.error('上传失败');
            }
        }
    });
});




