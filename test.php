<?php
	error_reporting(E_STRICT);
    date_default_timezone_set('Asia/Shanghai');//�趨ʱ��������
    require_once('class.phpmailer.php');
    include('class.smtp.php');
	try {
		$mail = new PHPMailer(true);
		$mail->IsSMTP();
		$mail->CharSet='GBK'; //�����ʼ����ַ����룬�����Ҫ����Ȼ��������
		$mail->SMTPAuth = true; //������֤
		$mail->Host = "smtp.163.com";
		$mail->Port = 25;
		$mail->Username = "test@163.com";
		$mail->Password = "password";
		//$mail->IsSendmail(); //���û��sendmail�����ע�͵���������֡�Could not execute: /var/qmail/bin/sendmail ���Ĵ�����ʾ
		//$mail->AddReplyTo("test@163.com","mckee");//�ظ���ַ
		$mail->From = "test@163.com";
		$mail->FromName = "echo";
		$to = "test@163.com";
		$mail->AddAddress($to);
		$mail->Subject = "phpmailer���Ա���";
		$mail->Body = "<h1>phpmail��ʾ</h1>����php���ͨ��<font color=red>www.phpddt.com</font>����phpmailer�Ĳ�������";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //���ʼ���֧��htmlʱ������ʾ������ʡ��
		$mail->WordWrap = 80; // ����ÿ���ַ����ĳ���
		//$mail->AddAttachment("f:/test.png"); //������Ӹ���
		$mail->IsHTML(true);
		$mail->Send();
		echo '�ʼ��ѷ���';
	} catch (phpmailerException $e) {
		echo "�ʼ�����ʧ�ܣ�".$e->errorMessage();
	} 
?>
