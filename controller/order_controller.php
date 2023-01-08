<?php
function  show_orders_ctr()
{
  $all_orders = all_orders();
  $count_orders = all_orders();
  render('admin/list-orders', ['all_orders' => $all_orders, 'count_orders' => $count_orders]);
}
function delete_orders_ctr()
{
  $id_booking_detail = $_GET['id_booking_detail'];
  orders_delete($id_booking_detail);
  setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
  header("location: ?ctr=show_orders_admin");
  die;
}
function update_orders_ctr()
{
  //Lấy mã hh trên URL
  $id_booking_detail = $_GET['id_booking_detail'];
  //lấy ra bản ghi hàng hóa cần sửa
  $order = orders_one($id_booking_detail);
  render(
    "admin/edit-orders",
    [
      'order' => $order,
    ]
  );
}
function edit_orders_ctr()
{
  extract($_POST);
  //Tạo mảng data để insert dữ liệu
  $data = [
    $status,
    $id_booking_detail
  ];
  //Insert dữ liệu
  orders_edit($data);
  setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
  header("location: ?ctr=show_orders_admin");
  die;
}
