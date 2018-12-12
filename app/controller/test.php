<?php

$settings["smtp_host"] = "mail.suatdilek.com.tr";
$settings["smtp_email"] = "mailadmin@suatdilek.com.tr";
$settings["smtp_password"] = "yB1861pG";
$settings["smtp_port"] = "587";
$settings["smtp_secure"] = "tls";
$settings["smtp_send_email"] = "mailadmin@suatdilek.com.tr";



/*
$email="suatdilek@gmail.com";
$name="Suat DİLEK";
$subject="DENEME MESAJI";
$message= "MESAJ İÇERİĞİ";*/
function send_email($email, $name, $subject, $message)
{
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail->SMTPDebug = 2;
    $mail->SetLanguage = "tr";
    $mail->CharSet = "UTF-8";
    $mail->From = setting("smtp_email");
    $mail->FromName = setting("smtp_send_name");
    $mail->Host = setting("smtp_host");
    $mail->Subject = $subject;
    $mail->Username = setting("smtp_email");
    $mail->Password = setting("smtp_password");
    $mail->SMTPAuth = true;
    $mail->IsHTML(true);
    $mail->IsSMTP();
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
    $mail->Body = $message;
    $mail->addAddress($email, $name);
//$mail->send();


$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}
/**/
$data['email']="suatdilek@gmail.com";
$data['name']="Suat DİLEK";
$data['subject']="DENEME MESAJI";
$data['message']= "MESAJ İÇERİĞİ";

$send = send_email($data['email'], $data['name'], $data['subject'], $data['message']);
if ($send) {
    echo 'Mesajınız başarıyla gönderildi!';
} else {
    echo 'Mesaj gönderilirken bir sıkıntı oluştu.';
}