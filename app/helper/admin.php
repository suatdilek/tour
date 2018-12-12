<?php

function admin_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/admin/controller/' . $controllerName . '.php';
}


function admin_view($viewName){
    return PATH . '/admin/view/' . $viewName . '.php';
}

function user_ranks($rankId = null)
{
    $ranks = [
        1 => 'Yönetici',
        2 => 'Editör',
        3 => 'Üye'
    ];
    return $rankId ? $ranks[$rankId] : $ranks;
}

function permission($url, $action){
    $permissions = json_decode(session('user_permissions'), true);
    if (isset($permissions[$url][$action]))
        return true;
    return false;
}

function permission_page(){
    die('Bu bölümü görüntüleme yetkiniz yok!');
    exit;
}

function send_email($email, $name, $subject, $message)
{
    $mail = new PHPMailer();
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

    if ($mail->Send()) {
        return true;

    } else {
        return false;
    }

}