<?php 
  function categories_ctr() {
    $all_categories = all_categories();
    $count_categories = all_categories();
    render('admin/list-category', ['all_categories' => $all_categories, 'count_categories' => $count_categories]); 
  }
  function add_category_ctr(){
    render('admin/add-category');
  }
  function insert_category_ctr() {
    extract($_POST);
    $data = [
      $_POST['ten_loai_tour']
    ];
    // validate tên loại
    if (trim($ten_loai_tour) == "") {
      $errors['ten_loai_tour'] = "* Tên không được để trống";
    }
    if ($ten_loai_tour == "") {
      $errors['ten_loai_tour'] = "* Tên không được để trống";
    }
    if (!isset($errors)) {
      insert_category($data);
      setcookie('message', 'Thêm dữ liệu thành công', time() + 1);
      header("location: ?ctr=show_categories_admin");
    } else {
      render(
        'admin/add-category',
        [
          'data_old' => $data,
          'errors' => $errors,
        ]
      );
    }
  }
  function delete_category_ctr() {
    $id_loai_tour = $_GET['id_loai_tour'];
    categories_delete($id_loai_tour);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_categories_admin");
    die;
  }
  //Edit hàng hóa (hiển thị form)
  function update_category_ctr() {
    //Lấy mã hh trên URL
    $id_loai_tour = $_GET['id_loai_tour'];
    //lấy ra bản ghi hàng hóa cần sửa
    $category = categories_one($id_loai_tour);
    render(
        "admin/edit-category",
        [
          'category' => $category,
        ]
    );
  }
  function edit_category_ctr() {
    extract($_POST);
    //Tạo mảng data để insert dữ liệu
    $data = [
      $ten_loai_tour,
      $id_loai_tour
    ];
    //Insert dữ liệu
    categories_edit($data);
    setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_categories_admin");
    die;
  }
  function sua_setting($id_setting,$dia_chi,$sdt,$email,$copyright,$zalo){
    $sql= "UPDATE `setting` SET`dia_chi`='$dia_chi',`sdt`='$sdt',`email`='$email',
    `copyright`='$copyright',`zalo`='$zalo' WHERE `id_setting`".$id_setting;
    echo $sql;
    pdo_execute($sql) ;
  }