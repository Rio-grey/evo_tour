<?php
function add_bill($name, $sdt, $email, $dia_chi, $id_users, $ngay_di, $nguoi_lon, $tre_em, $ngay_dat_hang, $tong_tien, $pttt, $ma_dh)
{
    $sql = "INSERT INTO `booking`(`fullname`,`sdt`,`email`,`dia_chi`,`id_users`,
    `ngay_di`,`peoples`,`children`,`ngay_dat_hang`,`tong_tien_tour`,`pttt`,`ma_dh`) 
    VALUES ('$name','$sdt','$email','$dia_chi','$id_users','$ngay_di',
    '$nguoi_lon','$tre_em','$ngay_dat_hang','$tong_tien','$pttt','$ma_dh')";
    // pdo_execute($sql);
    return pdo_execute_return_lastInsertId($sql);
}
function insert_booking_detail($id_tour, $id_users, $name_tour, $img, $price, $soluong_nguoi, $tong_tien, $id_booking, $fullname, $sdt, $dia_chi, $email)
{
    $sql = "INSERT INTO `book_tour_detail`(`id_tours`, `id_users`,`name_tour`,`img`,`price`,`soluong_nguoi`,`tong_tien`,`id_booking`,`name`,`sdt`,`dia_chi`,`email`) 
    VALUES ('$id_tour','$id_users','$name_tour','$img','$price','$soluong_nguoi','$tong_tien','$id_booking','$fullname','$sdt','$dia_chi','$email')";
    // echo $sql;
    pdo_execute($sql);
}
function show_dh()
{
    $sql = "SELECT `b`.`ma_dh`, `b`.`ngay_di`,`a`.`dia_chi`, `b`.`tong_tien_tour` , `b`.`pttt`,`a`.`status`,`b`.`id_users`,`id_booking_detail`     FROM `book_tour_detail` a
    inner join `booking` b on a.id_booking = b.id_booking ;";

    $don_hang = pdo_query($sql);
    return $don_hang;
}
function del_dh($id_booking_detail)
{
    $sql = "DELETE FROM book_tour_detail  WHERE id_booking_detail=" . $id_booking_detail;
    pdo_execute($sql);
}
