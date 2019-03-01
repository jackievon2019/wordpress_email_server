<?php
//解决Wordpress无法发送邮件的问题，如无法发送请确保PHP开启了openssl扩展
function cus_mail_smtp( $phpmailer ) {
    $phpmailer->FromName = '发件人名称';
    $phpmailer->Host = '发件人邮箱主机';
    $phpmailer->Port = 465;
    $phpmailer->Username = '发件人邮箱帐号';
    $phpmailer->Password = '发件人邮箱密码';
    $phpmailer->From = '发件人邮箱帐号';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = 'ssl'; //tls or ssl （port=25时->留空，465时->ssl）
    $phpmailer->IsSMTP();
}
add_action('phpmailer_init', 'cus_mail_smtp');
