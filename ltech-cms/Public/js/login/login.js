$(".btn").click(function () {
    is_hide();
});
var u = $("input[name=username]");
var p = $("input[name=password]");

$("#submit").on('click', function () {
    var username = $.trim(u.val());
    var password = $.trim(p.val());
    // var url = "/index.php/admin/login/check";
    var url = $('#posturl').val();//此方法是先在html中解析 再js引用
   
    if (!username || !password ){
        $("#ts").html("用户名或密码不能为空~");
        is_show();
        return false;
    } 
    var data={username:username,password:password};
    $.post(url,data,function(result){
        if(result.status === 1){
            $("#ts").html(result.message);
            is_show();
            
            $('.btn').attr('href',result['data']['url']);
            
        } else if(result.status === 0){
            $("#ts").html(result.message);
            is_show();                 
        }
        
    },'json');
});
window.onload = function () {
    $(".connect p").eq(0).animate({"left": "0%"}, 700);
    $(".connect p").eq(1).animate({"left": "0%"}, 500);
    $("h1").animate({"top": "0"}, 1000);
};
function is_hide() {
    $(".alert").animate({"top": "-40%"}, 300);
}
function is_show() {
    $(".alert").fadeIn().animate({"top": "10%"}, 1000);
}
