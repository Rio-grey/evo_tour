<?php
function show_slide_ctr()
{
  $all_slide = all_slide();
  render('admin/list-slide', ['all_slide' => $all_slide]);
}
function delete_slide_ctr()
{
  $id_slide = $_GET['id_slide'];
  slide_delete($id_slide);
  setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
  header("location: ?ctr=show_slide_admin");
  die;
}
function add_slide_ctr()
{
  render('admin/add-slide');
}
function insert_slide_ctr()
{
  extract($_POST);
  $images = $_FILES['image'];
  $image = $images['name'];
  $data = [
    $image,
    $desc_slide
  ];
  // validate
  // validate ảnh
  if ($images['size'] > 0) {
    $file_type = ['jpg', 'png', 'gif'];
    $file_extension = pathinfo($images['name'], PATHINFO_EXTENSION);
    if (!in_array($file_extension, $file_type)) {
      $errors['image'] = "* Ảnh phải có định dạng jpg, png hoặc gif";
    }
  } else {
    $errors['image'] = "* Bạn chưa nhập ảnh";
  }
  // Nếu không có lỗi
  if (!isset($errors)) {
    // upload
    move_uploaded_file($images['tmp_name'], "layout/images/" . $image);
    // insert dữ liệu
    insert_slide($data);
    setcookie('message', 'Thêm dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_slide_admin");
    die;
  } else {
    // nếu có lỗi
    render(
      'admin/add-slide',
      [
        'data_old' => $data,
        'errors' => $errors,
      ]
    );
  }
}
function update_slide_ctr()
{
  //Lấy mã hh trên URL
  $id_slide = $_GET['id_slide'];
  //lấy ra bản ghi hàng hóa cần sửa
  $slide = slide_one($id_slide);
  render(
    "admin/edit-slide",
    [
      'slide' => $slide,
    ]
  );
}
function edit_slide_ctr()
{
  extract($_POST);
  // Lấy dữ liệu hình ảnh
  $images = $_FILES['image'];
  // Kiểm tra nếu người dùng có cập nhật hình thì lấy hình mới, còn không thì vẫn lưu hình cũ
  if ($images['size'] > 0) {
    $image = $images['name'];
    // upload
    move_uploaded_file($images['tmp_name'], "layout/images/" . $image);
  }
  //Tạo mảng data để insert dữ liệu
  $data = [
    $image,
    $desc_slide,
    $id_slide
  ];
  //Insert dữ liệu
  slide_edit($data);
  setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
  header("location: ?ctr=show_slide_admin");
  die;
}
