$(function () {
    //family banner配置        
    $(".owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: false,
        margin: 10,
        responsive: {
            992: {
                items: 3
            },
            0: {
                items: 2
            }

        }
    });
    //三个浏览图的点击切换操     
    $(".small-img img").on('click', function () {
        var src = $(this).attr("src");
        $("#bigImg").attr("src", src);
    });
    //判断是否有图片 有就显示  没有就删除该节点
    var count = 0;//判断图片是否大于1张 若大于一张就启动自动循环轮播
    $(".owl-carousel-two img").each(function (i) {
        if ($(this).attr('src')) {
            $(this).removeClass('hide');
            count += i;
        } else {
            $(this).remove();
        }

    });
     console.log(count);
    if (count > 0) {
        //count>0说明不止一张图，可以设置自动轮播
        $(".owl-carousel-two").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: true,
            margin: 10,
            items: 1
        });
    } else {
        //data_banner_img数据图轮播配置
        $(".owl-carousel-two").owlCarousel({
            autoplay: false,

            autoplayHoverPause: true,
            dots: true,

            items: 1
        });
    }

//    Request pricing 按钮操作
    $("#Name,#Company,#Email,#Phone").on("blur", function () {
        var name = $("#Name").val();
        var company = $("#Company").val();
        var email = $("#Email").val();
        var phone = $("#Phone").val();
        if ($.trim(name) === "") {
            $("#Name").css("border-color", "red");

        } else if ($.trim(name) !== "") {
            $("#Name").css("border-color", "");
        }
        if ($.trim(company) === "") {
            $("#Company").css("border-color", "red");

        } else if ($.trim(company) !== "") {
            $("#Company").css("border-color", "");
        }
        if ($.trim(email) === "" || !checkmail(email)) {
            $("#Email").css("border-color", "red");

        } else if ($.trim(email) !== "" && checkmail(email)) {
            $("#Email").css("border-color", "");
        }
        if ($.trim(phone) === "") {
            $("#Phone").css("border-color", "red");

        } else {
            $("#Phone").css("border-color", "");
        }
    });

//Inquery按钮操作
    $("#inqueryBtn").click(function () {
        var name = $("#Name").val();
        var company = $("#Company").val();
        var email = $("#Email").val();
        var phone = $("#Phone").val();
        var website = $("#Website").val();
        var title = $("#Title").val();
        var content = $("#Content").val();

        if ($.trim(name) === "") {
            $("#Name").css("border-color", "red");
            return false;
        } else if ($.trim(name) !== "") {
            $("#Name").css("border-color", "");
        }
        if ($.trim(company) === "") {
            $("#Company").css("border-color", "red");
            return false;
        } else if ($.trim(company) !== "") {
            $("#Company").css("border-color", "");
        }
        if ($.trim(email) === "" || !checkmail(email)) {
            $("#Email").css("border-color", "red");
            return false;
        } else if ($.trim(email) !== "") {
            $("#Email").css("border-color", "");
        }
        if ($.trim(phone) === "") {
            $("#Phone").css("border-color", "red");
            return false;
        } else {
            $("#Phone").css("border-color", "");
        }
        var ii = layer.load(0, {shade: [0.5, '#fff']});//加载图 ing
        $.ajax({
            url: "/Home/Email/inquiry",
            data: {name: name, company: company, email: email, phone: phone, website: website, title: title, content: content},
            type: 'post',
            success: function (result) {
                layer.close(ii);//关闭加载图
                console.log(result);
                if (result === "success") {
                    layer.msg('Send Inquiry Success', {icon: 1});//提交到后台并且成功发送就弹出这个tip...
                    $("#Name").val("");
                    $("#Company").val("");
                    $("#Email").val("");
                    $("#Phone").val("");
                    $("#Website").val("");
                    $("#Content").val("");

                    hidemask();
                } else {
                    layer.msg('Server error!Try again please', {icon: 2});//提交到后台但发送失败就弹出这个tip...
                }
            },
            error: function () {
                layer.close(ii);//关闭加载图
                layer.msg('Error,try again please!', {icon: 2, time: 5000});
            }
        });

        return false;

    });
    //下载按钮的事件，弹出遮罩层和相关文件让用户选择
    $('#downloadBtn').on('click', function () {
        $("#mask").css({'height':'100%','width':'100%'}).fadeIn(1000);
        $('.download-box').fadeIn(1000);

    });

    //统计某个下文件的点击数
    $('.download-box a').on('click', function () {
        var fileId = $(this).attr('data-id');
        var url = "/Home/Products/downloadCount";
        var data = {fileId: fileId};
        $.post(url, data, function (result) {
            console.log(result);
        }, 'json');
    });

});

//遮罩层的实现
function showmask() {
    $("#mask").css({'height':'100%','width':'100%'}).fadeIn(1000);
    $("#Inquiry").fadeIn(1000);
}
function hidemask() {
    $("#mask").fadeOut(1000);
    $("#Inquiry").fadeOut(1000);
    $('.download-box').fadeOut(1000);
}