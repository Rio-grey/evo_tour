<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
function bill_confirm()
{
    if (isset($_POST['dathang'])) {
        $fullname    = $_POST['name'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $dia_chi = $_POST['dia_chi'];
        $id_users = $_POST['id_users'];
        $ngay_di = $_POST['ngay_di'];
        $nguoi_lon = $_POST['nguoi_lon'];
        $tre_em = $_POST['tre_em'];
        $ngay_dat_hang = $_POST['ngay_dat_hang'];
        $tong_tien = $_POST['tong_tien'];
        $pttt = $_POST['pttt'];
        $ma_dh = rand(0, 999999);
        // phương thức thanh toán 
        switch ($pttt) {
            case '1':
                $pttt = 'Thanh toán khi giao hàng (COD)';
                break;
            case '2':
                $pttt = 'Thanh toán online (Chuyển khoản)';
                break;
            default:
        }
        if(strlen($sdt) != 10){
            $errors= "Số điện thoại sai định dạng";
            header("location: ?ctr=bill&errors=$errors");
        }
        $data = [
            $fullname,
            $sdt,
            $email,
            $dia_chi,
            $id_users,
            $ngay_di,
            $nguoi_lon,
            $tre_em,
            $ngay_dat_hang,
            $tong_tien,
            $pttt,
            $ma_dh
        ];
        $id_booking = add_bill($fullname, $sdt, $email, $dia_chi, $id_users, $ngay_di, $nguoi_lon, $tre_em, $ngay_dat_hang, $tong_tien, $pttt, $ma_dh);
        foreach ($_SESSION['bill'] as $cart) {
            $soluong_nguoi = $cart[7] + $cart[8];
            $tong_tien_nguoi_lon = $cart[7] * $cart[3];
            $tong_tien_tre_em = ($cart[8] * $cart[3]) * 0.05;
            $tong_tien = $tong_tien_nguoi_lon + $tong_tien_tre_em;
            insert_booking_detail($cart[0], $id_users, $cart[1], $cart[2], $cart[3], $soluong_nguoi, $tong_tien, $id_booking, $fullname, $sdt, $dia_chi, $email);
        }
        render('bill_confirm', ['bill' => $data]);
    }
    render('bill_confirm');
}