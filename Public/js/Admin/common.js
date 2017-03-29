//添加按钮btnAdd点击事件，跳转到add页面
$('#btnAdd').on('click',function(){
    var add_url = SCOPE.add_url;
    window.location.href = add_url;
});
//提交按钮事件，可以用来 更新/添加 
$('#btnSubmit').click(function(){
    var data = $("#editForm").serialize();
    var url = SCOPE.save_url;
    var jump_url = SCOPE.jump_url;

    $.post(url,data,function(result){
        if(result.status === 1){
            return dialog.success(result.message,jump_url);
        }
        else if(result.status === 0){
            return dialog.error(result.message);
        }
    },'json');
});

//编辑按钮事件 传参跳转到edit页面
$('.table #edit').on('click',function(){  
    var id = $(this).attr("data-id");
    var url = SCOPE.edit_url;
    window.location.href = url+'?id='+id;
});

//表格中操作列的删除操作
$('.table #delete,.table #updateStatus').click(function (){
    var id = $(this).attr("data-id");
    var status = $(this).attr("data-status");
    var url = SCOPE.set_status_url;
    var data = {id: id, status: status};//status -1删除
    var behavior = $(this).attr("data-behavior");
    //console.log(id);
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

//升序降序排序操作
$('#listorderId').on('click',function(){
    var order = $(this).attr('listorder');
    console.log(order);
    $('#formSearch').find('input[name="listorder"]').attr('value',order);
    $('#formSearch').submit();
});


//listorderUpdate事件
$('#listorderUpdate').on('click',function(){
    var url = SCOPE.listorder_url; 
    var data = $('#listorderForm').serialize();
    $.post(url,data,function(result){
        if(result.status === 1){
            return dialog.success(result.message,result['data']['jump_url']);
        }
        if(result.status === 0){
            return dialog.error(result.message);
        }
    },'json');
});

function setStatus(url, data) {
    $.post(url, data, function (result) {
        if (result.status === 1) {
            return dialog.success(result.message, result['data']['jump_url']);
        } else if (result.status === 0) {
            return dialog.error(result.message);
        }
    }, 'json');
}
//编辑页面显示已经上传的图片
 function showImg(id){
        if($('#'+id).attr('src')){
            $('#'+id).show();
        }
    }