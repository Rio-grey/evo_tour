<?php 
  function show_admin_customers_ctr() {
    $all_customers = show_customers_admin();
    render('admin/list-customers', ['all_customers' => $all_customers]); 
  }
  function delete_customer_ctr() {
    $id_users = $_GET['id_users'];
    customer_delete($id_users);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_customers_admin");
    die;
  }
  function update_customer_ctr() {
    //Lấy mã hh trên URL
    $id_users = $_GET['id_users'];
    //lấy ra bản ghi hàng hóa cần sửa
    $customer = customer_one($id_users);
    render(
        "admin/edit-customer",
        [
          'customer' => $customer,
        ]
    );
  }
  function edit_customer_ctr() {
    extract($_POST);
    // Lấy dữ liệu hình ảnh
    $images = $_FILES['image'];
    // Kiểm tra nếu người dùng có cập nhật hình thì lấy hình mới, còn không thì vẫn lưu hình cũ
    if ($images['size'] > 0) {
        $image = $images['name'];
        // upload
        move_uploaded_file($images['tmp_name'], "views/admin/assets/img/160x160/" . $image);
    }
    //Tạo mảng data để insert dữ liệu
    $data = [
        $hoten,
        $sdt,
        $diachi,
        $email,
        $image,
        $gioitinh,
        $user_name,
        $id_users
    ];
    //Insert dữ liệu
    customer_edit($data);
    setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_customers_admin");
    die;
  }
  function show_admin_staffs_ctr() {
    $all_staffs = show_staffs_admin();
    $count_staffs = show_staffs_admin();
    render('admin/list-staff', ['all_staffs' => $all_staffs, 'count_staffs' => $count_staffs]); 
  }
  function delete_staff_ctr() {
    $id_users = $_GET['id_users'];
    customer_delete($id_users);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_staffs_admin");
    die;
  }
  function add_staff_ctr()
  {
      // $category = all_categories();
      render('admin/add-staff');
  }
  function insert_staff_ctr()
  {
      extract($_POST);
      $vaitro = 2;
      $images = $_FILES['image'];
      $image = $images['name'];
      $data = [
        $hoten,
        $sdt,
        $diachi,
        $email,
        $image,
        $gioitinh,
        $user_name,
        $pass,
        $vaitro
      ];
      // validate
      if (trim($hoten) == "") {
          $errors['hoten'] = "* Họ tên không được để trống";
      }
      if ($hoten == "") {
          $errors['hoten'] = "* Bạn chưa nhập họ tên";
      }
      if ($sdt == "" || trim($sdt) == "") {
        $errors['sdt'] = "* Bạn chưa nhập số điện thoại";
      } elseif (!is_numeric($sdt)) {
        $errors['sdt'] = "* Số điện thoại phải là số";
      }
      if (trim($diachi) == "") {
          $errors['diachi'] = "* Địa chỉ không được để trống";
      }
      if ($diachi == "") {
          $errors['diachi'] = "* Bạn chưa nhập địa chỉ";
      }
      if (trim($email) == "") {
          $errors['email'] = "* Email không được để trống";
      }
      if ($email == "") {
          $errors['email'] = "* Bạn chưa nhập email";
      }
      if ($gioitinh == "") {
          $errors['gioitinh'] = "* Bạn chưa chọn giới tính";
      }
      if (trim($user_name) == "") {
        $errors['user_name'] = "* Tên đăng nhập không được để trống";
      }
      if ($user_name == "") {
        $errors['user_name'] = "* Bạn chưa nhập tên đăng nhập";
      }
      if (trim($pass) == "") {
        $errors['pass'] = "* Mật khẩu không được để trống";
      }
      if ($pass == "") {
        $errors['pass'] = "* Bạn chưa nhập mật khẩu";
      }
      if ($repass != $pass) {
        $errors['repass'] = "* Mật khẩu không khớp ở trên";
      }
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
          move_uploaded_file($images['tmp_name'], "views/admin/assets/img/160x160/" . $image);
          // insert dữ liệu
          insert_staff($data);
          setcookie('message', 'Thêm dữ liệu thành công', time() + 1);
          header("location: ?ctr=show_staffs_admin");
          die;
      } else {
          // nếu có lỗi
          render(
              'admin/add-staff',
              [
                  'data_old' => $data,
                  'errors' => $errors,
              ]
          );
      }
  }
  function update_staff_ctr() {
    //Lấy mã hh trên URL
    $id_users = $_GET['id_users'];
    //lấy ra bản ghi hàng hóa cần sửa
    $staff = customer_one($id_users);
    render(
        "admin/edit-staff",
        [
          'staff' => $staff,
        ]
    );
  }
  function edit_staff_ctr() {
    extract($_POST);
    // Lấy dữ liệu hình ảnh
    $images = $_FILES['image'];
    // Kiểm tra nếu người dùng có cập nhật hình thì lấy hình mới, còn không thì vẫn lưu hình cũ
    if ($images['size'] > 0) {
        $image = $images['name'];
        // upload
        move_uploaded_file($images['tmp_name'], "views/admin/assets/img/160x160/" . $image);
    }
    //Tạo mảng data để insert dữ liệu
    $data = [
        $hoten,
        $sdt,
        $diachi,
        $email,
        $image,
        $gioitinh,
        $user_name,
        $id_users
    ];
    //Insert dữ liệu
    customer_edit($data);
    setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_staffs_admin");
    die;
  }
  function edit_account_ctr() {
    extract($_POST);
    // Lấy dữ liệu hình ảnh
    $images = $_FILES['image'];
    // Kiểm tra nếu người dùng có cập nhật hình thì lấy hình mới, còn không thì vẫn lưu hình cũ
    if ($images['size'] > 0) {
        $image = $images['name'];
        // upload
        move_uploaded_file($images['tmp_name'], "views/admin/assets/img/160x160/" . $image);
    }
  
    //Tạo mảng data để edit dữ liệu
    $data= [
      $user_name,
      $hoten,
      $sdt,
      $diachi,
      $email,
      $image,
      $id_users
    ];
    $_SESSION['user']['user_name'] = $data[0];
    $_SESSION['user']['hoten'] = $data[1];
    $_SESSION['user']['sdt'] = $data[2];
    $_SESSION['user']['diachi'] = $data[3];
    $_SESSION['user']['email'] = $data[4];
    $_SESSION['user']['image'] = $data[5];
  
    //Insert dữ liệu
    account_edit($data);
    setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
    header("location: ?ctr=account_detail");
  }