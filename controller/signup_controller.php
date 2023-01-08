<?php
    function signup(){
        $all_setting = setting();
        render('signup', ['all_setting' => $all_setting]);
    }

    function sign_user_ctr(){
        if(isset($_POST['btn_sign'])){
            extract($_POST);
            $vaitro = 1;
            if($gioitinh == "Nam") $image = 'userMan.png';
            else $image = 'userWoman.png';
            $data=
            [
                $username,
                $password,
                $hoten,
                $phone,
                $diachi,
                $email,
                $image,
                $gioitinh,
                $vaitro
            ];
            $error = array();
            if(check_empty($hoten)) $error['hoten'] = 'Họ tên không được để trống';
            if(check_empty($phone)) $error['phone'] = 'số điện thoại không được để trống';
            if(check_empty($diachi)) $error['diachi'] = 'Địa chỉ không được để trống';
            if(check_empty($email)) $error['email'] = 'email không được để trống';
            if(check_empty($gioitinh)) $error['gioitinh'] = 'Phải chọn giới tính';
            if(check_empty($username)) $error['username'] = 'tài khoản không được để trống';
            if(check_empty($password)) $error['password'] = 'Mật khẩu không được để trống';
            if(check_empty($repassword)) $error['repassword'] = 'Chưa nhập lại mật khẩu';
            if(!is_numeric($phone)) $error['phone'] = 'số điện thoại chỉ được nhập số';
            if(check_exists_user($username)) $error['username'] = 'tài khoản đã tồn tại';
            if($password != $repassword) $error['repassword'] = 'Nhập lại mật khẩu chưa đúng';

            if(!$error){
                $all_setting = setting();
                add_user($data);
                render('login',['data' => $data,'all_setting' => $all_setting]);
            }
            else{
                $all_setting = setting();
                array_push($data,$repassword);
                render('signup',['error' => $error,'data_old' => $data,'all_setting' => $all_setting]);
            }

        }
    }