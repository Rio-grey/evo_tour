<?php
function tour_all()
{
        if(isset($_GET['tk'])){
            $tk = $_GET['tk'];
        }
    $alltour = all_cac_tour($tk);
    $all_setting = setting();
    render('all_tour',['alltour'=>$alltour, 'all_setting' => $all_setting]);
}
function all_tour(){
    if(isset($_GET['name_tour'])){
        $mb = $_GET['name_tour'];
    }
    $cuthe = alltour($mb);
    $all_setting = setting();
    render('tour_kham_pha',['cuthe_mb'=>$cuthe, 'all_setting' => $all_setting]);
}
function khoihanh(){
    if(isset($_POST['btn'])){
        $list = $_POST['list'];
        $kyw = $_POST['kyw'];
        $kywngay = $_POST['kywngay'];
    }else{
        $kyw = '';
        $kywngay='';
        $list='';
    }
    $abc = khoihanhtu($list,$kyw,$kywngay);
    $list =  listkhoihanh();
    $all_setting = setting();
    render('listkhoihanh',['abc'=>$abc,'list'=>$list, 'all_setting' => $all_setting]);
}
function show_mienbac_ct(){
    if(isset($_GET['mb'])){
        $mb = $_GET['mb'];
    }
    if(isset($_GET['id_loai_tour'])){
        $id_loai_tour = $_GET['id_loai_tour'];
    }
    $cuthe = show_mienbac($mb,$id_loai_tour);
    $ten_tour  = ten_tour_ct($id_loai_tour);
    $all_setting = setting();
    render('mienbac',['cuthe_mb'=>$cuthe, 'ten_tour'=>$ten_tour, 'all_setting' => $all_setting]);
}
function show_mientrung_ct(){
    if(isset($_GET['mb'])){
        $mb = $_GET['mb'];
    }
    if(isset($_GET['id_loai_tour'])){
        $id_loai_tour = $_GET['id_loai_tour'];
    }
    $cuthe = show_mienbac($mb,$id_loai_tour);

    $ten_tour  = ten_tour_ct($id_loai_tour);
    $all_setting = setting();
    render('mientrung',['cuthe_mb'=>$cuthe, 'ten_tour'=>$ten_tour, 'all_setting' => $all_setting]);
}
function show_miennam_ct(){
    if(isset($_GET['mb'])){
        $mb = $_GET['mb'];
    }
    if(isset($_GET['id_loai_tour'])){
        $id_loai_tour = $_GET['id_loai_tour'];
    }
    $cuthe = show_mienbac($mb,$id_loai_tour);

    $ten_tour  = ten_tour_ct($id_loai_tour);
    $all_setting = setting();
    render('miennam',['cuthe_mb'=>$cuthe, 'ten_tour'=>$ten_tour, 'all_setting' => $all_setting]);
}
function tour_detail_ctr()
{
    if (isset($_GET['id_tour'])) {
        $id_tour = $_GET['id_tour'];
        $tangluotxem =   tour_tang_luot_xem($id_tour);
        $tour_detail = tour_one($id_tour);  
        extract($tour_detail);

        $tour_tuong_tu =  show_tour_tuong_tu($id_loai_tour,$id_tour);

        $tour_cheap = show_tour_cheap();
        $show_bl = show_binhluan();
        $all_setting = setting();
        // $xem = tangluotxem($id_tour);

        render('tour_detail', [
            'tour_detail' => $tour_detail, 'tour_cheap' => $tour_cheap, 'tour_tuong_tu' => $tour_tuong_tu, 'show_bl'=> $show_bl,'tangluotxem'=>$tangluotxem,
            'all_setting' => $all_setting
        ]);
    }
}
function tour_like_ctr()
{
    $tour_like = show_tour_sale();
    $all_setting = setting();
    render('tour_like', ['tour_like' => $tour_like, 'all_setting' => $all_setting]);
}
function tour_cheap_ctr()
{
    $tour_cheap = show_tour_cheap();
    $all_setting = setting();
    render('show_tour_cheap', ['tour_cheap' => $tour_cheap, 'all_setting' => $all_setting]);
}
function search_tour_ctr()
{
    // $get_search = $_POST['search_tour'];
    // if ($get_search == "") {
    //     $search_tour = 1;
    // }
    if (isset($_POST['search_tour'])) {
        $tk = $_POST['search_tour'];
    } else {
        $tk = "";
    }
    $search_tour = sreach_tour($tk);
    $all_setting = setting();
    
    render('search', ['timkiem' => $search_tour, 'all_setting' => $all_setting]);
}
function search_tours_ctr()
{
    if (isset($_POST['tktour'])) {
        $tk = $_POST['tktour'];
    } else {
        $tk = "";
    }
    $all_setting = setting();
    $search_tour = sreach_tour_tk($tk);
    render('search_error', ['timkiem' => $search_tour, 'all_setting' => $all_setting]);
}
function show_tourDL_ctr()
{
    $all_tours_DL = show_all_tour();
    $all_setting = setting();
    render('tourDL', ['all_tours_DL' => $all_tours_DL, 'all_setting' => $all_setting]);
}
function show_tour_3mien_ctr()
{
    if (isset($_GET['mien'])) {
        $mien = $_GET['mien'];
    }
    $tour_3mien = show_tour_3mien($mien);
    $all_setting = setting();
    render('tour_3mien', ['tour_3mien' => $tour_3mien, 'all_setting' => $all_setting]);
}
function show_tourKM_ctr()
{
    $tours_sale = show_tour_sale();
    $all_setting = setting();
    render('tourKM', ['tours_sale' => $tours_sale, 'all_setting' => $all_setting]);
}
// controller trong quản trị
function show_admin_tours_ctr()
{
    $all_tours = show_all_tour();
    $count_tours = show_all_tour();
    render('admin/list-tour', ['all_tours' => $all_tours, 'count_tours' => $count_tours]);
}
function add_tour_ctr()
{
    $category = all_categories();
    render('admin/add-tour', ['category' => $category]);
}
function insert_tour_ctr()
{
    extract($_POST);
    $images = $_FILES['image'];
    $image = $images['name'];
    $data = [
        $name_tour,
        $image,
        $price,
        $sale_price,
        $lich_khoi_hanh,
        $thoi_gian,
        $khoi_hanh_tu,
        $phuong_tien,
        $chuong_trinh,
        $chinh_sach,
        $dieu_khoan,
        $description,
        $id_loai_tour
    ];
    // validate
    if (trim($name_tour) == "") {
        $errors['name_tour'] = "* Tên không được để trống";
    }
    if ($name_tour == "") {
        $errors['name_tour'] = "* Bạn chưa nhập tên tour du lịch";
    }
    if ($price == "" || trim($price) == "") {
        $errors['price'] = "* Bạn chưa nhập giá";
    } elseif (!is_numeric($price) || $price <= 0) {
        $errors['price'] = "* Giá phải là số và lớn hơn 0";
    }
    if ($sale_price == "" || trim($sale_price) == "") {
        $errors['sale_price'] = "* Bạn chưa nhập giá giảm";
    } elseif (!is_numeric($sale_price) || $sale_price < 0) {
        $errors['sale_price'] = "* Giá giảm phải là số và lớn hơn hoặc bằng 0";
    }
    if ($lich_khoi_hanh == "") {
        $errors['lich_khoi_hanh'] = "* Bạn chưa chọn lịch khởi hành";
    }
    if ($thoi_gian == "") {
        $errors['thoi_gian'] = "* Bạn chưa chọn thời gian";
    }
    if ($khoi_hanh_tu == "") {
        $errors['khoi_hanh_tu'] = "* Bạn chưa chọn khởi hành từ đâu";
    }
    if ($phuong_tien == "") {
        $errors['phuong_tien'] = "* Bạn chưa chọn phương tiện";
    }
    if ($chuong_trinh == "" || trim($chuong_trinh) == "") {
        $errors['chuong_trinh'] = "* Bạn chưa nhập chương trình tour";
    }
    if ($chinh_sach == "" || trim($chinh_sach) == "") {
        $errors['chinh_sach'] = "* Bạn chưa nhập chính sách tour";
    }
    if ($dieu_khoan == "" || trim($dieu_khoan) == "") {
        $errors['dieu_khoan'] = "* Bạn chưa nhập điều khoản tour";
    }
    if ($description == "" || trim($description) == "") {
        $errors['description'] = "* Bạn chưa nhập description tour";
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
        insert_tour($data);
        setcookie('message', 'Thêm dữ liệu thành công', time() + 1);
        header("location: ?ctr=show_tours_admin");
        die;
    } else {
        // nếu có lỗi
        $category = all_categories();
        render(
            'admin/add-tour',
            [
                'category' => $category,
                'data_old' => $data,
                'errors' => $errors,
            ]
        );
    }
}
function delete_tour_ctr()
{
    $id_tour = $_GET['id_tour'];
    tour_delete($id_tour);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_tours_admin");
    die;
}
//Edit hàng hóa (hiển thị form)
function update_tour_ctr()
{
    //Lấy mã hh trên URL
    $id_tour = $_GET['id_tour'];
    // Lấy ra danh sách loại hàng để đưa vào list
    $category = all_categories();
    //lấy ra bản ghi hàng hóa cần sửa
    $tour = tour_one($id_tour);
    render(
        "admin/edit-tour",
        [
            'tour' => $tour,
            'category' => $category
        ]
    );
}
function edit_tour_ctr()
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
        $name_tour,
        $image,
        $price,
        $sale_price,
        $lich_khoi_hanh,
        $thoi_gian,
        $khoi_hanh_tu,
        $phuong_tien,
        $chuong_trinh,
        $chinh_sach,
        $dieu_khoan,
        $description,
        $id_loai_tour,
        $id_tour
    ];
    //Insert dữ liệu
    tour_edit($data);
    setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_tours_admin");
    die;
}
