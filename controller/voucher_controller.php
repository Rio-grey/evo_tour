<?php 
  function show_voucher_ctr() {
    $all_voucher = all_voucher();
    render('admin/list-voucher', ['all_voucher' => $all_voucher]); 
  }
  function add_voucher_ctr(){
    render('admin/add-voucher');
  }
  function insert_voucher_ctr() {
    extract($_POST);
    $data = [
      $_POST['code_voucher'],
      $_POST['ngay_bat_dau'],
      $_POST['ngay_het_han'],
      $_POST['value']
    ];
    // validate mã voucher
    if (trim($code_voucher) == "") {
      $errors['code_voucher'] = "* Mã giảm giá không được để trống";
    }
    if ($code_voucher == "") {
      $errors['code_voucher'] = "* Mã giảm giá không được để trống";
    }
    if ($ngay_bat_dau == "") {
      $errors['ngay_bat_dau'] = "* Ngày bắt đầu có hiệu lực không được để trống";
    }
    if ($ngay_het_han == "") {
      $errors['ngay_het_han'] = "* Ngày hết hạn không được để trống";
    }
    if ($value == "") {
      $errors['value'] = "* Giá trị của mã không được để trống";
    }
    if (!isset($errors)) {
      insert_voucher($data);
      setcookie('message', 'Thêm dữ liệu thành công', time() + 1);
      header("location: ?ctr=show_voucher_admin");
    } else {
      render(
        'admin/add-voucher',
        [
          'data_old' => $data,
          'errors' => $errors,
        ]
      );
    }
  }
  function delete_voucher_ctr() {
    $id_voucher = $_GET['id_voucher'];
    voucher_delete($id_voucher);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_voucher_admin");
    die;
  }
  //Edit hàng hóa (hiển thị form)
  function update_voucher_ctr() {
    //Lấy mã hh trên URL
    $id_voucher = $_GET['id_voucher'];
    //lấy ra bản ghi hàng hóa cần sửa
    $voucher = voucher_one($id_voucher);
    render(
        "admin/edit-voucher",
        [
          'voucher' => $voucher,
        ]
    );
  }
  function edit_voucher_ctr() {
    extract($_POST);
    //Tạo mảng data để insert dữ liệu
    $data = [
      $code_voucher,
      $ngay_bat_dau,
      $ngay_het_han,
      $value,
      $id_voucher
    ];
    //Insert dữ liệu
    voucher_edit($data);
    setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_voucher_admin");
    die;
  }