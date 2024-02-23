<?php
//ADD ACCOUNT
function insert_taikhoan($user, $pass, $email) {
    $sql = "INSERT INTO taikhoan(user, pass, email) VALUES ('$user', '$pass', '$email');";
    pdo_execute($sql);
}
// VALIDATE EMAIL
function validate_email($email){
    
    if ($email != '') {
        
        $error = false;
    } else {
        $error = true;
    }
    return $error;
}
// VALIDATE USER
function validate_user($user){
    if (strlen($user) > 2 && $user != '') {
        $error = false;
    } else {
        $error = true;
    }
    return $error;
}
// VALIDATE PASSWORD
function validate_pass($pass){
    if (strlen($pass) > 2 && $pass != '') {
        $error = false;
    } else {
        $error = true;
    }
    return $error;
}
// CHECK USER PRESS OK
session_start();
function confirm_dangnhap($user,$pass) {
    $sql = "SELECT * FROM taikhoan WHERE user = '$user' AND pass = '$pass'";
    $taikhoan = pdo_query_one($sql);
    if ($taikhoan != false) {
        $_SESSION['user'] = $user;
    } else {
        return 'Tài khoản hoặc mật khẩu sai';
    }
    return '';
}
// LOGOUT ACCOUNT
function dangxuat(){
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}
// SEND EMAIL PASSWORD
function send_email($email) {
    if ($email != '') {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        $result = pdo_query_one($sql);
        if ($result != false) {
            extract($result);
            send_email_pass($email,$user,$pass);
            return 'Mật khẩu đã được gửi về địa chỉ email';
        } else {
            return 'Không tìm thấy email';
        }
    } else {
        return "Bạn không thể để trống email";
    }
}
// SHOW ALL ACCOUNT INFORMATION
function loadall_taikhoan() {
    $sql = "SELECT * FROM taikhoan";
    $result = pdo_query($sql);
    return $result;
}
// DELETE ACCOUNT
function xoa_taikhoan($id) {
    $sql = "DELETE FROM taikhoan WHERE id = $id";
    pdo_execute($sql);
} 
// ADD ACCOUNT (admin) 
function admin_taikhoan($user, $pass, $email,$vaitro) {
    $sql = "INSERT INTO taikhoan(user, pass, email, role) VALUES ('$user', '$pass', '$email','$vaitro');";
    pdo_execute($sql);
}

// SEND CONTENT TO EMAIL BY PHP

function send_email_pass($email,$user,$pass) {
    require './PHPMailer-master/src/Exception.php';
    require './PHPMailer-master/src/PHPMailer.php';
    require './PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //SEVER SETTING
    $mail->SMTPDebug = 0;                      //Enable detailed debugging output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send 
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'doyouknowkun21@gmail.com';                     //SMTP username
    $mail->Password   = 'ohbw uuji emsr kjur';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom('doyouknowkun21@gmail.com', 'Shop');
    $mail->addAddress($email, $user);
    $mail->addCC('doyouknowkun21@gmail.com.com');
    
    //CONTENT
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Give password';
    $mail->Body    = 'Mật khẩu của bạn là: '.$pass;

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent"
}
}
// DISPLAY USER ROLES
function load_vaitro($user){
    $sql = "SELECT role FROM taikhoan WHERE user = '$user'";
    $result = pdo_query_one($sql);
    return $result;
}
// DISPLAY ACCOUNT ID
function load_taikhoan($user) {
    $sql = "SELECT id FROM taikhoan WHERE user = '$user'";
    $result = pdo_query_one($sql);
    return $result;
}
?>