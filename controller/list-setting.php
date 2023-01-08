<?php
function show_setting()
{
  $setting =   setting();
  render('admin/list-setting', ['setting' => $setting]);
}
//Edit hàng hóa (hiển thị form)
function setting_update()
{
  //Lấy mã hh trên URL
  $id_setting = $_GET['id_setting'];
  //lấy ra bản ghi hàng hóa cần sửa
  $setting = setting_one($id_setting);
  render(
    "admin/edit-setting",
    [
      'setting' => $setting,
    ]
  );
}


function edit_setting_ctr()
{
  extract($_POST);
  //Tạo mảng data để insert dữ liệu
  // lấy tên ảnh củ
  $logo = $_FILES['logo'];
  $hinh = $logo['name'];
  move_uploaded_file($file['tmp_name'], 'layout/images/'.$hinh);
  $data = [
    $hinh,
    $dia_chi,
    $sdt,
    $email,
    $copyright,
    $zalo,$id_setting
  ];

  //Insert dữ liệu
  setting_edit($data);
  setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
  // render('admin/edit-setting',['data' => $data]);
  header("location:?ctr=show-setting");
  // die;
}