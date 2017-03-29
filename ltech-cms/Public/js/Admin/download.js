$(function () {

    //ajax根据产品类型获取产品名，实现动态二级联动，不过开销可能有点大
    $('#productsType').click(function () {
        var typeId = $(this).val();
        var url = SCOPE.ajax_get_products;
        var data = {products_type: typeId};
        if (typeId !== '') {
            $.post(url, data, function (result) {
                $('#productsId').html(result); //这里接收整个返回的ajaxGetProducts模板，不要加type:'json',数据类型，否则渲染不出来
                //1.index中从url获取当前的products_id，然后让产品名处于选中状态
                var pageurl = location.href;
                var str = pageurl.split("products_id=", 2);
                var products_id = Number(str[1]);
                //index中根据products_id去让ajax返回的模板中的对应的值被选中
                $('#productsId option[value="' + products_id + '"]').attr('selected', true);

                //2.在edit中加多一个判断是否存在file.products_id参数,如果有就让产品名处于选中状态，因为edit中的url没有products_id
                if ($('#output').val()) {
                    var outputVal = $('#output').val();
                    $('#productsId option[value="' + outputVal + '"]').attr('selected', true);
                }
            });
        } else {
            $('#productsId').html('');
        }
    });
    //自动点击被选中的产品类型获取对应的产品名
    $('#productsType option').each(function (i) {
        if ($(this).attr('selected')) {
            $('#productsType').trigger('click');//自动点击，实现ajax获取产品名
            return;
        }
    });
    //文件上传在add edit中用
    $('#uploadFile_upload').uploadify({
        'swf': SCOPE.ajax_upload_swf,
        'uploader': SCOPE.ajax_upload_file_url,
        'buttonText': "上传资源文件",
        'fileObjName': 'file',
        'multi': false, //false 一次只能上传一个文件
        'fileTypeExts': '*.pdf;*.IES;*.zip',
        'fileSizeLimit': 0, //0代表不限制文件大小 ，也可以直接写参数: '100KB'或'1MB'或'1B',不过post默认限制2m最大，可以去ph.ini修改服务器配置
        'removeCompleted': true,
        'onUploadSuccess': function (file, data, response) {
           // console.log(data);
            var obj = JSON.parse(data); //解析json字符串为 json对象|若出错则应该是json格式错了，json有bom头导致错误 解决方法data.substring(1),截取字符串从1开始，不要0位置的bom头

            $('#' + file.id).find('.data').html(obj.message);
            if (obj.status === 1) {
                $('#path').attr('value', obj.data);   //赋值

                var file = obj.data;
                var str = file.split(".");
                console.log();
                if (str[str.length - 1] === 'pdf') {
                    return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file-pdf-o" style="margin-right:10px;"></i>' + $('#name').val() + '.' + str[str.length - 1]);
                }
                if (str[str.length - 1] === 'zip') {
                    return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file-zip-o" style="margin-right:10px;"></i>' + $('#name').val() + '.' + str[str.length - 1]);
                } else {
                    $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file" style="margin-right:10px;"></i>' + $('#name').val() + '.' + str[str.length - 1]);
                }
            }
        }

    });

    showFile();//显示已经上传的文件
});
//edit中显示已经上传的文件
function showFile() {
    if ($('#path').val()) {
        var path = $('#path').val();
       
        var str = path.split(".");
        
        if (str[str.length - 1] === 'pdf') {
           return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file-pdf-o" style="margin-right:10px;"></i>' + $('#name').val() + '.' + str[str.length - 1]);
        }
        if (str[str.length - 1] === 'zip') {
            return $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file-zip-o" style="margin-right:10px;"></i>' + $('#name').val() + '.' + str[str.length - 1]);
        } else {
            $('#uploadFile_show').show().html('<i class="fa  fa-2x fa-file" style="margin-right:10px;"></i>' + $('#name').val() + '.' + str[str.length - 1]);
        }
    }
}