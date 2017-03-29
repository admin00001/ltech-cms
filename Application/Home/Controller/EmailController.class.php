<?php

namespace Home\Controller;
use Think\Exception;

class EmailController extends CommonController{
    // 接收inquiry弹窗的数据
    public function inquiry(){
        if ($_POST) {
            if (!$_POST['name'] || !trim($_POST['name'])) {
                return 0;
            }
            if (!$_POST['company'] || !trim($_POST['company'])) {
                return 0;
            }
            if (!$_POST['email'] || !trim($_POST['email'])) {
                return 0;
            }
            if (!$_POST['phone'] || !trim($_POST['phone'])) {
                return 0;
            }
            $data = I('post.');

            $this->sentemail($data);
        }
    }

    public function sentemail($data){
        require("class.phpmailer.php"); //这个是一个smtp的php文档，网上可以下载得到

        $mail = new \PHPMailer(); //建立邮件发送类,由于这里是在框架里面  所以要在 $mail = new PHPMailer() 加个\ 变成$mail = new \PHPMailer();这样才不会走进框架识别控制器的流程
        //$mail->SMTPSecure="ssl";//这里用QQ邮箱发送才开启，而且把$mail->Password那里设置为QQ邮箱的授权码，$mail->Port=465,$mail->Host="SMTP.QQ.COM" 就行了
        $mail->CharSet = "UTF-8";
        $address = "lt@ltechlighting.com"; //收件人的邮箱
        $mail->IsSMTP(); // 使用SMTP方式发送
        $mail->Host = "smtpout.secureserver.net"; //就是发送者的邮箱域名
        $mail->SMTPAuth = true; // 启用SMTP验证功能
        $mail->Username = "post@ltechlighting.com"; // 邮箱用户名(请填写完整的email地址)
        $mail->Password = "Ltechpost555"; // 邮箱密码
        $mail->Port = 25;
        $mail->From = "post@ltechlighting.com"; //邮件发送者email地址
        $mail->FromName = $data['company']; //附加的公司名字
        $mail->AddAddress("$address", "ltechlighting"); //收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")

        $mail->IsHTML(true); // set email format to HTML //是否使用HTML格式

        $mail->Subject = $data['title'] ? $data['title'] : "Contact us"; //邮件标题客户询盘邮件

        $mail->Body = "Name:" . $data['name'] . "<br/><br/>" . "Company:" . $data['company'] . "<br/><br/>" . "Email:" . $data['email'] . "<br><br/>" . "Phone:" . $data['phone'] . "<br><br/>" . "Website:" . $data['website'] . "<br><br/>" . "Title:" . $data['title'] . "<br><br/>" . "Content:" . $data['content']; //邮件内容，上面设置HTML，则可以是HTML


        if (!$mail->Send()) {
            $result = "error";
        } else {
            $result = "success";
        }

        exit($result);
    }

    public function collectEmail(){
        if ($_POST) {
            $email = I('post.emailAddress');

            if (!$email || !trim($email)) {
                return show(0, "Please enter a valid email address!");
            }
            if (!checkEmail($email)) {//验证邮箱格式 checkEmail 在Common/Common/function公共函数里面
                return show(0, "Please enter a valid email address!");
            }
            $data = array('email' => $email);
            try {
                $res = D("Email")->insert($data);
                if (!$res) {
                    return show(0, 'Send email error!');
                }
                return show(1, 'Send email success');
            } catch (Exception $ex) {
                return show(0, $ex->getMessage());
            }
        }
    }

    //接受contact us页面的数据
    public function contact(){
        if ($_POST) {
            if (!$_POST['name'] || !trim($_POST['name'])) {
                return 0;
            }
            if (!$_POST['company'] || !trim($_POST['company'])) {
                return 0;
            }
            if (!$_POST['email'] || !trim($_POST['email'])) {
                return 0;
            }
            $postData = I('post.');
            //转换一下字段名 合并到 sentemail方法里面
            $data = array(
                'name' => $postData['name'],
                'company' => $postData['company'],
                'email' => $postData['email'],
                'phone' => $postData['tel'],
                'content' => $postData['message']
            );

            $this->sentemail($data);
        }
    }

}
