 $(function(){
        //tab-head tab切换操作
        $('.tab-head span').click(function(){
            var target = $(this).attr('data-target');
            $('.tab-head span').each(function(i){
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            
            $('.tab-pane').each(function(){
                $(this).addClass('hide');
            });
            $('#'+target).removeClass('hide');
        });
        
        //添加banner操作
        $('#addBanner').click(function(){
            var url = SCOPE.add_banner_url;
            window.location.href = url;
        });
        
        //编辑banner操作
        $('.table #editBanner').click(function(){
            var id= $(this).attr('data-id');
            var url = SCOPE.edit_banner_url;
            window.location.href = url + "?id="+ id;
        });
        //删除banner操作
        $('.table #deleteBanner,.table #updateStatus').on('click',function(){
            var id = $(this).attr("data-id");
            var status = $(this).attr("data-status");
            var url = SCOPE.set_status_url;
            var model =  $(this).attr("data-model");
            var data = {id: id, status: status,model:model};//status -1删除

            var behavior = $(this).attr("data-behavior");

           layer.open({
                title: '信息',
                content: '是否确定要' + behavior + '?',
                icon: 3,
                btn: ['确定', '取消'],
                yes: function () {
                     setStatus(url, data);
               },
               btn2: function () {//取消按钮的事件
                     layer.msg('还是不要冲动的好 -_-#');
                },
                cancel: function () {//弹窗右上角的 x 关闭按钮事件
                     layer.msg('还是不要冲动的好 -_-#');
                }
            });
        });
        //banner排序操作
        $('#listorderBannerUpdate').click(function(){
           var listorder = $('#listorderBannerForm').serializeArray();
           var postdata={};
           $(listorder).each(function(i){
               postdata[this.name] =this.value;
           });

            var model = $(this).attr('data-model');
            var data = {listorder:postdata,model:model};
            var url = SCOPE.listorder_url;
            $.post(url,data,function(result){
                if(result.status === 1){
                    return dialog.success(result.message,result['data']['jump_url']);
                }
                else if(result.status === 0){
                    return dialog.error(result.message);
                }
            },'json');
        });
        //adv首页5图编辑操作
        $('.table #editAdv').click(function(){
            var id= $(this).attr('data-id');
            var url = SCOPE.edit_adv_url;
            window.location.href = url + "?id="+ id;
        });
        
        
        //上传catalogue
        $('#uploadFile_upload').uploadify({
            'swf': SCOPE.ajax_upload_swf,
            'uploader': SCOPE.ajax_upload_file_url,
            'buttonText': "上传Catalogue",
            'fileObjName': 'file',
            'multi': false, //false 一次只能上传一个文件
            'fileTypeExts': '*.pdf;*.IES;*.zip',
            'fileSizeLimit': 0, //0代表不限制文件大小 ，也可以直接写参数: '100KB'或'1MB'或'1B',不过post默认限制2m最大，可以去ph.ini修改服务器配置
            'removeCompleted': true,
            'onUploadSuccess': function (file, data, response) {
                var obj = JSON.parse(data);
                $('#' + file.id).find('.data').html(obj.message);
                console.log(obj);
                if (obj.status === 1) {
                    $('#path').attr('value', obj.data);   //赋值
                
                var file = obj.data;
                var str = file.split(".");
                
                if (str[str.length - 1] === 'pdf') {
                    
                    return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file-pdf-o" style="margin-right:10px;"></i>' +'(*.' +str[1]+')');

                }
                if(str[str.length - 1] === 'zip'){
                    return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file-zip-o" style="margin-right:10px;"></i>'  +'(*.' +str[1]+')');
                }
                else {

                    return $('#uploadFile_show').show().html('<i class="fa  fa-3x fa-file" style="margin-right:10px;"></i>'  +'(*.' +str[1]+')');
                }
            }
            }
        });
        
        showFile(); //显示已经上传的文件
        
        //保存catalogue
        $('#btnSubmit').on('click', function () {
            var data = $("#editForm").serialize();
            var url = SCOPE.save_catalogue_url;

            $.post(url, data, function (result) {
                if (result.status === 1) {
                    return dialog.success(result.message,result['data']['jump_url']);
                } else if (result.status === 0) {
                    return dialog.error(result.message);
                }
            }, 'json');
        });
    });
    //显示已经上传的文件
    function showFile(){
        if($('#path').val()){
        var path = $('#path').val();
            var str = path.split(".");
            if (str[str.length - 1] === 'pdf') {
                return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file-pdf-o" style="margin-right:10px;"></i>'  +'(*.' +str[str.length - 1]+')');
            }
            if(str[str.length - 1] === 'zip'){
                return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file-zip-o" style="margin-right:10px;"></i>'  +'(*.' +str[str.length - 1]+')');
            }
            else {
                return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file" style="margin-right:10px;"></i>'  +'(*.' +str[str.length - 1]+')');
            }
        }
    }
    
    
    function setStatus(url, data) {
    $.post(url, data, function (result) {
        if (result.status === 1) {
            return dialog.success(result.message, result['data']['jump_url']);
        } else if (result.status === 0) {
            return dialog.error(result.message);
        }
    }, 'json');
    }
