/*
 //common.js要依赖jquery.min.js/bootstrap.min.js/layer.js/skype接口js/jquery.goup.js，
 // 要先引入这5个js才能引入common.js
 */

//关闭click.bs.dropdown.data-api事件，使顶级菜单可点击
$(document).off('click.bs.dropdown.data-api');
//自动展开
$('.nav .dropdown').mouseenter(function () {
    $(this).addClass('open');
});
//自动关闭
$('.nav .dropdown').mouseleave(function () {
    $(this).removeClass('open');
});

$(function () {
    //对bootm-info中的发邮件地址按钮进行点击事件操作
    var url = "/Home/Email/collectEmail";
    $('#emailbtn').on('click', function () {
        $(this).attr("disabled", "true");
        var emailAddress = $("#emailAddress").val();

        if (!checkmail(emailAddress)) {
            layer.msg('Please enter a valid email address!', {icon: 0, time: 4000, shift: 6});//依赖layer.js
            $(this).removeAttr("disabled");
            return false;
        }
        var data = {emailAddress: emailAddress};
        // console.log(emailAddress);
        $.post(url, data, function (result) {
            if (result.status === 1) {
                layer.msg(result.message, {icon: 1, time: 5000});
                $("#emailAddress").val("");//清空email数据
                $("#emailbtn").removeAttr("disabled");

            }
            if (result.status === 0) {
                layer.msg(result.message, {icon: 2, time: 5000, shift: 4});
                $("#emailbtn").removeAttr("disabled");
            }
        }, 'json');
        return false;
    });

    //对底部分享栏中的skype按钮的点击事件绑定，和侧边栏的skype按钮一样效果
    $('#skype').click(function () {
        $('#SkypeButton_Call_ltechlighting_1 >p > a').trigger('click');
    });

    //顶部导航条中的搜索按钮操作
    $("#searchBtn").on('click', function () {
        var keyword = $('#keyword').val();
        if (!$.trim(keyword)) {
            $('#keyword').val('').focus();
            return layer.msg('Please enter some keywords!', {icon: 2, time: 4000, shift: 4});
        }
        var url = '/Home/Search/index';
        window.location.href = url + "?keyword=" + keyword;
    });

    //search，  projects ，news页面左侧搜索操作
    $("#search").on('click', function () {
        var v = $('#searchValue').val();
        console.log(v);
        if (!$.trim(v)) {
            $('#searchValue').val('').focus();
            return layer.msg('Please enter some keywords!', {icon: 2, time: 4000, shift: 4});
        }

        var url = SCOPE.search_url;//SCOPE.search_url的具体地址在不同的页面中代表不同的地址
        window.location.href = url + "?keyword=" + v;
    });
});


//下面是skype 和 返回顶部按钮设置
jQuery(document).ready(function () {
    Skype.ui({//配置skype按钮信息 要依赖skype的接口js
        "name": "chat",
        "element": "SkypeButton_Call_ltechlighting_1",
        "participants": ["live:lt_456"],
        "imageSize": 24
    });

    jQuery.goup();//返回顶部按钮   要依赖jquery.goup.js


    $("#SkypeButton_Call_ltechlighting_1").hide().css({"position": "fixed", "right": "6px", "bottom": "124px"});//skype 按钮先隐藏

    $('#SkypeButton_Call_ltechlighting_1_paraElement > a > img').attr("src", "/Public/img/home/rightside/skype.jpg");//替换skype图片


    $(window).scroll(function () {
        var scrolltop = $(document).scrollTop();
        var documentWidth = $(document).width();

        if (documentWidth > 767) {//小于767px的屏幕不显示skype

            if (scrolltop > 300) {//滚动条滚动到中间才显示skype
                $("#SkypeButton_Call_ltechlighting_1").fadeIn();

            } else {
                $("#SkypeButton_Call_ltechlighting_1").fadeOut();
            }
        }

    });

});
//skype 和 返回顶部按钮设置结束

//检查邮箱格式是否正确
function checkmail(szMail) {
    var szReg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return szReg.test(szMail);

}

//document.write('<script src="/Public/js/Home/GA.js"></script>'); //凡是加入了common.js的页面都会加载GA.js代码谷歌分析追踪脚本，上传服务器的时候才去掉本注释