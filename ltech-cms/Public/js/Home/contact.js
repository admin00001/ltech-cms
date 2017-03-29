$(document).ready(function () {
    var btn = $("#send");
    $("#form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 30
            },
            company: {
                required: true,
                maxlength: 50
            },
            email: {
                required: true,
                email: true,
                maxlength: 50
            },
            tel: {
                //  digits:true,
                //number:true,
                rangelength: [7, 15]
            },
            message: {
                maxlength: 2000
            }
        }
    });

    btn.click(function () {
        if (!$("#form").valid()) { //判断表单是否填写正确齐全                     
            layer.open({
                shift: 6,
                title: false,
                content: 'Please write the required field.',
                icon: 2,
                btn: ['Try again'],
                shade: [0.5, '#393D49'],
                shadeClose: true,
                time: 5000

            });
            return false;

        } else { //表单齐全可提交了
            var AJAXurl = SCOPE.email_contact_url;
            var name = $("#inputName").val();            //获取取对应数据值    
            var company = $("#inputCompany").val();
            var email = $("#inputEmail").val();
            var tel = $("#inputPhone").val();
            var message = $("#message").val();
            if(!$.trim(name) || !$.trim(company) ||!$.trim(email)){
                layer.open({
                    title:false,
                    shift:6,
                    icon:2,
                    shade: [0.5, '#393D49'],
                    shadeClose: true,
                    btn: ['Try again'],
                    time:5000,
                    content:"The Name,Company,Email can not be null!"
                });
                return false;
            }
            var ii = layer.load(0, {shade: [0.6, '#fff']});//加载图 ing


            $.ajax({
                url: AJAXurl,
                type: "post",
                data: {name: name, company: company, email: email, tel: tel, message: message},
                dataType: "text",
                success: function (result) {
                    console.log(result);
                    layer.close(ii);//关闭加载图
                    if (result === "success") {
                        layer.msg('send email success', {icon: 1});//提交到后台并且成功发送就弹出这个tip...
                        $("#inputName").val("");//清空原来填的表单数据
                        $("#inputCompany").val("");//清空原来填的表单数据
                        $("#inputEmail").val("");//清空原来填的表单数据
                        $("#inputPhone").val("");//清空原来填的表单数据
                        $("#message").val("");//清空原来填的表单数据

                    } else {//后台发送失败就弹出这个...
                        layer.open({
                            title: false,
                            content: 'Server send email error!',
                            icon: 2,
                            btn: ['Try again'],
                            shade: [0.5, '#393D49'],
                            shadeClose: true
                        });
                    }
                },
                error: function () {//没提交到后台就弹出这个
                    layer.close(ii);
                    layer.open({
                        title: false,
                        content: 'Send email error!',
                        icon: 2,
                        btn: ['Try again'],
                        shade: [0.8, '#393D49'],
                        shadeClose: false

                    });
                }

            });

        }
        return false;
    });

});
