<?php
function thongke()
{
  $sql = 'SELECT Min(`price`) AS NN , MAX(`price`) as LN, AVG(`tong_tien`) as tongtien FROM `book_tour_detail`';
  $thongke =  pdo_query($sql);
  return $thongke;
}
function show_userall()
{
  $sql = 'SELECT * FROM `taikhoan`';
  $thongke =  pdo_query($sql);
  return $thongke;
}
function show_all_tours()
{
  $sql = 'SELECT a.`ten_loai_tour` as loaitour ,
    count(`id_tour`) as count_tour,
    a.`id_loai_tour` 
FROM `tours` b inner join  `loai_tour` a 
on a.id_loai_tour = b.id_loai_tour 
GROUP by    a.`id_loai_tour` 
ORDER  by a.`id_loai_tour` ;`';
  $thongke =  pdo_query($sql);
  return $thongke;
}
function ngayditour()
{
  $sql = ' SELECT COUNT(`ngay_di`) as ngaydi , ngay_di FROM `booking` 
    GROUP by ngay_di ORDER by ngay_di;';
  $thongke =  pdo_query($sql);
  return $thongke;
}
function demuser(){
  $sql = 'SELECT COUNT(`id_users`) as a FROM `taikhoan` where vaitro = 1' ;
  $thongke =  pdo_query($sql);
  return $thongke;
}
function demtour(){
  $sql = 'SELECT COUNT(`id_tour`) as tour FROM `tours`' ;
  $thongke =  pdo_query($sql);
  return $thongke;
}
function demorder(){
  $sql = 'SELECT COUNT(`id_booking_detail`) as orders FROM `book_tour_detail`' ;
  $thongke =  pdo_query($sql);
  return $thongke;
}
function demcomment(){
  $sql = 'SELECT COUNT(`id_bl`) as comment FROM `binh_luan`' ;
  $thongke =  pdo_query($sql);
  return $thongke;
}