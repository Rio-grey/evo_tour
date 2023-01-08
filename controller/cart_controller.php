<?php
function my_cart()
{
  $show_dh = show_dh();
  $all_setting = setting();
  render('my_cart', ['show_dh' => $show_dh, 'all_setting' => $all_setting]);
}
function my_cart_del()
{
  if (isset($_GET['id_booking_detail'])) {
    $id_booking_detail = $_GET['id_booking_detail'];

    del_dh($id_booking_detail);
  }
  header("location:?ctr=my_cart");
  setcookie('message', "Đơn hàng của bạn đã được xóa ", time() + 1);
  render('my_cart');
}
