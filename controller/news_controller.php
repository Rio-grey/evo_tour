<?php
function news()
{
    $news_like = show_news_like();
    $news_top_1 = news_top_1();
    $news_top_2 = news_top_2();
    $news_top_3 = news_top_3();
    $news_top_2_2 = news_top_2_2();
    $all_setting = setting();
    render('news', ['news_top_1' => $news_top_1, 'news_top_2' => $news_top_2, 'news_top_2_2' => $news_top_2_2, 'news_like' => $news_like, 'news_top_3' => $news_top_3, 'all_setting' => $all_setting]);
}
function news_detail_ctr()
{
    if (isset($_GET['id_news'])) {
        $id_news = $_GET['id_news'];
        $news_detail = news_one($id_news);
        $news_like = show_news_like();
        $all_setting = setting();
        extract($news_detail);
        render('news_detail', [
            'news_detail' => $news_detail, 'news_like' => $news_like, 'all_setting' => $all_setting
        ]);
    }
}
function news_ctr()
{
    $all_news = all_news();
    $count_news = all_news();
    render('admin/list-posts', ['all_news' => $all_news, 'count_news' => $count_news]);
}
function news_like_ctr()
{
    $news_like = show_news_like();
    render('home', ['news_like' => $news_like]);
}
function news_top_1_ctr() {
    $news_top_1 = news_top_1();
    render('news', ['news_top_1' => $news_top_1]);
}
function news_top_2_ctr() {
    $news_top_2 = news_top_2();
    render('news', ['news_top_2' => $news_top_2]);
}
function news_top_3_ctr() {
    $news_top_3 = news_top_3();
    render('news', ['news_top_3' => $news_top_3]);
}
function news_top_2_2_ctr() {
    $news_top_2_2 = news_top_2_2();
    render('news', ['news_top_2_2' => $news_top_2_2]);
}
function add_news_ctr()
{
    render('admin/add-posts');
}
function insert_news_ctr()
{
    extract($_POST);
    $images = $_FILES['image'];
    $image = $images['name'];
    $data = [
        $title_news,
        $desc_news,
        $image
    ];
    // validate tên loại
    if (trim($title_news) == "") {
        $errors['title_news'] = "* Tiêu đề không được để trống";
    }
    if ($title_news == "") {
        $errors['title_news'] = "* Bạn chưa nhập tiêu đề";
    }
    if (trim($desc_news) == "") {
        $errors['desc_news'] = "* Nội dung không được để trống";
    }
    if ($desc_news == "") {
        $errors['desc_news'] = "* Bạn chưa nhập nội dung";
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
        move_uploaded_file($images['tmp_name'], "layout/images/products/" . $image);
        // insert dữ liệu
        insert_news($data);
        setcookie('message', 'Thêm dữ liệu thành công', time() + 1);
        header("location: ?ctr=show_news_admin");
        die;
    } else {
        // nếu có lỗi
        render(
            'admin/add-posts',
            [
                'data_old' => $data,
                'errors' => $errors,
            ]
        );
    }
}
function delete_news_ctr()
{
    $id_news = $_GET['id_news'];
    news_delete($id_news);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_news_admin");
    die;
}
//Edit hàng hóa (hiển thị form)
function update_news_ctr()
{
    //Lấy mã hh trên URL
    $id_news = $_GET['id_news'];
    //lấy ra bản ghi hàng hóa cần sửa
    $news = news_one($id_news);
    render(
        "admin/edit-posts",
        [
            'news' => $news,
        ]
    );
}
function edit_news_ctr()
{
    extract($_POST);
    // Lấy dữ liệu hình ảnh
    $images = $_FILES['image'];
    // Kiểm tra nếu người dùng có cập nhật hình thì lấy hình mới, còn không thì vẫn lưu hình cũ
    if ($images['size'] > 0) {
        $image = $images['name'];
        // upload
        move_uploaded_file($images['tmp_name'], "layout/images/products/" . $image);
    }
    //Tạo mảng data để insert dữ liệu
    $data = [
        $title_news,
        $desc_news,
        $image,
        $id_news
    ];
    //Insert dữ liệu
    news_edit($data);
    setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_news_admin");
    die;
}
