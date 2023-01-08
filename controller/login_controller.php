<?php
session_start();
function login()
{
    $all_setting = setting();
    render('login',['all_setting' => $all_setting]);
}
function account_detail()
{
    $all_setting = setting();
    render('account_detail',['all_setting' => $all_setting]);
}
function change_pass_ctr()
{  
    $all_setting = setting();
    render('change_pass',['all_setting' => $all_setting]);
}
function edit_pass_ctr(){
    // var_dump($_POST);
    extract($_POST);
    if($pass != $_SESSION['user']['pass']){
        $errors['pass'] = "Mật khẩu cũ không khớp";
    }
    if($pass == $new_pass){
        $errors['new_pass'] = "Bạn đã nhập trùng mật khẩu cũ";
    }
    if($new_pass != $renew_pass){
        $errors['renew_pass'] = "Mật khẩu không khớp mật khẩu mới";
    }
    if(!$errors){
        $_SESSION['user']['pass'] = $new_pass;
        change_pass($new_pass, $_SESSION['user']['user_name']);
        header("location: ?ctr=change_pass");
        setcookie('message', "Thay đổi mật khẩu thành công", time() + 1);
    }
    else{
        render('change_pass',['errors' => $errors]);
    }
}
    function new_pass_ctr(){
        if(isset($_POST['btn_pass'])){
        extract($_POST);
        if($re_pass != $pass){
            $errors['pass'] = "Xác nhận mật khẩu không khớp";
        }
        if(!$errors){
            change_pass_email($pass, $email);
            header("location: ?ctr=login");
        }
        else{
            render('new_password');
        }
        }
    }
// function my_cart()
// {
//     render('my_cart');
// }

function log_user_ctr()
{
    if (isset($_POST['btn_login'])) {
        extract($_POST);
        $data =
        [
            $user_name,
            $password
        ];
        if($user_name == ''){
            $error['user_name'] = 'Bạn chưa nhập tài khoản';
        }
        if($password == ''){
            $error['password'] = 'Bạn chưa nhập mật khẩu';
        }
        $user = show_user_one_by_hoten($user_name);   
        $check_user = check_user_log($user_name,$password);
        if(is_array($check_user)){
            $_SESSION['user'] = $user;
            
            header('location: ?ctr=home');
        }else{
            if($user_name == "") {
                $error['check'] = '';
            } else {
                $error['check'] = 'Tài khoản không tồn tại';
            }
            render('login',['error' => $error,'data' => $data]);
        }
    }
}
function logout_user_ctr() {
    unset($_SESSION['user']);
    header("location: ?ctr=login");
}

function miss_password_ctr() {
    $all_setting = setting();
    render('miss_password',['all_setting' => $all_setting]);
}
function new_password_ctr() {
    $all_setting = setting();
    render('new_password',['all_setting' => $all_setting]);
}