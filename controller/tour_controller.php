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
// controller trong qu???n tr???
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
        $errors['name_tour'] = "* T??n kh??ng ???????c ????? tr???ng";
    }
    if ($name_tour == "") {
        $errors['name_tour'] = "* B???n ch??a nh???p t??n tour du l???ch";
    }
    if ($price == "" || trim($price) == "") {
        $errors['price'] = "* B???n ch??a nh???p gi??";
    } elseif (!is_numeric($price) || $price <= 0) {
        $errors['price'] = "* Gi?? ph???i l?? s??? v?? l???n h??n 0";
    }
    if ($sale_price == "" || trim($sale_price) == "") {
        $errors['sale_price'] = "* B???n ch??a nh???p gi?? gi???m";
    } elseif (!is_numeric($sale_price) || $sale_price < 0) {
        $errors['sale_price'] = "* Gi?? gi???m ph???i l?? s??? v?? l???n h??n ho???c b???ng 0";
    }
    if ($lich_khoi_hanh == "") {
        $errors['lich_khoi_hanh'] = "* B???n ch??a ch???n l???ch kh???i h??nh";
    }
    if ($thoi_gian == "") {
        $errors['thoi_gian'] = "* B???n ch??a ch???n th???i gian";
    }
    if ($khoi_hanh_tu == "") {
        $errors['khoi_hanh_tu'] = "* B???n ch??a ch???n kh???i h??nh t??? ????u";
    }
    if ($phuong_tien == "") {
        $errors['phuong_tien'] = "* B???n ch??a ch???n ph????ng ti???n";
    }
    if ($chuong_trinh == "" || trim($chuong_trinh) == "") {
        $errors['chuong_trinh'] = "* B???n ch??a nh???p ch????ng tr??nh tour";
    }
    if ($chinh_sach == "" || trim($chinh_sach) == "") {
        $errors['chinh_sach'] = "* B???n ch??a nh???p ch??nh s??ch tour";
    }
    if ($dieu_khoan == "" || trim($dieu_khoan) == "") {
        $errors['dieu_khoan'] = "* B???n ch??a nh???p ??i???u kho???n tour";
    }
    if ($description == "" || trim($description) == "") {
        $errors['description'] = "* B???n ch??a nh???p description tour";
    }
    // validate ???nh
    if ($images['size'] > 0) {
        $file_type = ['jpg', 'png', 'gif'];
        $file_extension = pathinfo($images['name'], PATHINFO_EXTENSION);
        if (!in_array($file_extension, $file_type)) {
            $errors['image'] = "* ???nh ph???i c?? ?????nh d???ng jpg, png ho???c gif";
        }
    } else {
        $errors['image'] = "* B???n ch??a nh???p ???nh";
    }
    // N???u kh??ng c?? l???i
    if (!isset($errors)) {
        // upload
        move_uploaded_file($images['tmp_name'], "layout/images/products/" . $image);
        // insert d??? li???u
        insert_tour($data);
        setcookie('message', 'Th??m d??? li???u th??nh c??ng', time() + 1);
        header("location: ?ctr=show_tours_admin");
        die;
    } else {
        // n???u c?? l???i
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
    setcookie('message', 'X??a d??? li???u th??nh c??ng', time() + 1);
    header("location: ?ctr=show_tours_admin");
    die;
}
//Edit h??ng h??a (hi???n th??? form)
function update_tour_ctr()
{
    //L???y m?? hh tr??n URL
    $id_tour = $_GET['id_tour'];
    // L???y ra danh s??ch lo???i h??ng ????? ????a v??o list
    $category = all_categories();
    //l???y ra b???n ghi h??ng h??a c???n s???a
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
    // L???y d??? li???u h??nh ???nh
    $images = $_FILES['image'];
    // Ki???m tra n???u ng?????i d??ng c?? c???p nh???t h??nh th?? l???y h??nh m???i, c??n kh??ng th?? v???n l??u h??nh c??
    if ($images['size'] > 0) {
        $image = $images['name'];
        // upload
        move_uploaded_file($images['tmp_name'], "layout/images/products/" . $image);
    }
    //T???o m???ng data ????? insert d??? li???u
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
    //Insert d??? li???u
    tour_edit($data);
    setcookie('message', 'C???p nh???t d??? li???u th??nh c??ng', time() + 1);
    header("location: ?ctr=show_tours_admin");
    die;
}
