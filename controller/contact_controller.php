<?php
function contact(){
    $all_setting = setting();
    render('contact', ['all_setting' => $all_setting]);
}
function contact_ctr() {
    $all_contact = all_contact();
    $count_contact = all_contact();
    render('admin/list-contact', ['all_contact' => $all_contact, 'count_contact' => $count_contact]); 
}
function add_contact_ctr() {
    if (isset($_POST['btn_contact'])) {
        extract($_POST);
        $data=[
            $ho_ten,
            $email,
            $so_dien_thoai,
            $noi_dung_lien_he
        ];
        if($ho_ten == "") {
            $errors['ho_ten'] = "Bạn chưa nhập họ và tên";
        }
        if($email == "") {
            $errors['email'] = "Bạn chưa nhập email";
        }
        if($so_dien_thoai == "") {
            $errors['so_dien_thoai'] = "Bạn chưa nhập số điện thoại";
        }
        if($noi_dung_lien_he == "") {
            $errors['noi_dung_lien_he'] = "Bạn chưa nhập nội dung liên hệ";
        }
        if (!isset($errors)) {
            add_contact($data);
            // $thongbao = "Cảm ơn bạn đã đóng góp ý kiến";
            setcookie('messages', 'Cảm ơn bạn đã đóng góp ý kiến', time() + 1);
            header("location: ?ctr=contact");
        } else {
            // nếu có lỗi
            render(
                'contact',
                [
                    'errors' => $errors,
                ]
            );
        }
    }
}