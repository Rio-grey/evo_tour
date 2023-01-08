<?php
// function show_tour_luot_xem()
// {
//     $sql = "SELECT * FROM tours where 1 order by  so_luot_xem  desc LIMIT 0,4";
//     // $sql = "UPDATE tours SET so_luot_xem = so_luot_xem + 1 WHERE  id_tour=".$id_tour;
//     $result = pdo_query($sql);
//     return $result;
// }
// function tour_tang_luot_xem($id_tour)
// {
//     $sql = "UPDATE tours SET so_luot_xem = so_luot_xem + 1 WHERE  id_tour=" . $id_tour;
//     $result = pdo_query_one($sql);
//     return $result;
// }
function tour_rand()
{
    $sql = "SELECT * FROM `tours` ORDER BY RAND() LIMIT 5 ";
    $result = pdo_query($sql);
    return $result;
}
function alltour($mb)
{

    $sql = "SELECT * FROM `tours` where  name_tour like '%" . $mb . "%' ";

    $showtour =   pdo_query($sql);


    return  $showtour;
}
function show_tour_luot_xem()
{
    $sql = "SELECT * FROM tours where 1 order by  luot_khach  desc LIMIT 0,4";
    // $sql = "UPDATE tours SET so_luot_xem = so_luot_xem + 1 WHERE  id_tour=".$id_tour;
    $result = pdo_query($sql);
    return $result;
}
function tour_tang_luot_xem($id_tour)
{
    $sql = "UPDATE tours SET luot_khach = luot_khach + 1 WHERE  id_tour=" . $id_tour;
    $result = pdo_query_one($sql);
    return $result;
}
function khoihanhtu($list, $kyw, $kywngay)
{
    $sql = "SELECT * FROM tours where 1";
    if ($list  != "") {
        $sql .= " and khoi_hanh_tu like '%" . $list . "%'";
    }
    if ($kyw != "") {
        $sql = "SELECT * FROM tours where 1 and name_tour like '%" . $kyw . "%'";
    }
    if($kywngay != ""){
        $timess= strtotime($kywngay);
        $sql = "SELECT * FROM tours where 1 and ngay_khoi_hanh like '%".strftime('%Y-%m-%d',$timess)."%'";
    }

    if ($list != "" && $kywngay != "") {
        $sql = "SELECT * FROM tours where 1 and  khoi_hanh_tu  like '%" . $list . "%'";
        $timess = strtotime($kywngay);
        $sql .= " and ngay_khoi_hanh like '%" . strftime('%Y-%m-%d', $timess) . "%'";
    }

    $showtour = pdo_query($sql);
    return  $showtour;
}
function listkhoihanh()
{
    $sql = "SELECT  DISTINCT `tours`.`khoi_hanh_tu` FROM `tours` ";

    $listkhoihanh = pdo_query($sql);
    return $listkhoihanh;
}
function all_cac_tour($tk){
    $sql = "SELECT * FROM tours WHERE id_loai_tour = '" .$tk. "' ";
  
    $showtour =   pdo_query($sql);

    return  $showtour;
}
function show_mienbac($mb , $id_loai_tour)
{
   
    $sql ="SELECT * FROM `tours` where   id_loai_tour = ".$id_loai_tour."  and name_tour like '%".$mb."%' ";
 
    $showtour =   pdo_query($sql);
      
      
    return  $showtour;
}
function ten_tour_ct($id_loai_tour){
  
    $sql = "SELECT  DISTINCT tour_cu_the FROM `tours` WHERE `id_loai_tour` =  ".$id_loai_tour;
    
    $showtour =   pdo_query($sql);
      
      
    return  $showtour;
}
function show_tour_mb()
{

    $sql = "SELECT DISTINCT `id_loai_tour` ,`tour_cu_the` FROM `tours` ";
    $showtour =   pdo_query($sql); 
    return  $showtour;
}
function show_tour_3mien($mien)
{
    $sql = "SELECT * FROM tours WHERE id_loai_tour = $mien ";
    $result = pdo_query($sql);
    return  $result;
}
function sreach_tour($tk)
{

    $sql = "SELECT * FROM `tours` where 1  ";
    if ($tk != "") {
        $sql .= " and name_tour like '%" . $tk . "%' ";
    }
    $sql .= " GROUP BY id_tour";
    $sql .= " order by price desc  limit 0,8  ";

    $showtour =   pdo_query($sql);
    return  $showtour;
}
function sreach_tour_tk($tk)
{

    $sql = "SELECT * FROM `tours` where 1  ";
    if ($tk != "") {
        $sql .= " and name_tour like '%" . $tk . "%'";
    }
    $sql .= " GROUP BY id_tour";
    $sql .= " order by price desc  limit 0,8  ";

    $showtour =   pdo_query($sql);
    return  $showtour;
}
function asc(){
    $sql = "SELECT * FROM `tours` ORDER BY `tours`.`name_tour` ASC ";
    $showtour =   pdo_query($sql);
    return  $showtour;
}
function desc(){
    
    $sql = "SELECT * FROM `tours` ORDER BY `tours`.`name_tour` desc  ";
    $showtour =   pdo_query($sql);

    return  $showtour;
}
function asc_price(){
    $sql = "SELECT * FROM `tours` ORDER BY price-sale_price ";
    $showtour =   pdo_query($sql);
    return  $showtour;
}
function desc_price(){
    
    $sql = "SELECT * FROM `tours` ORDER BY price-sale_price desc ";
    $showtour =   pdo_query($sql);

    return  $showtour;
}
function show_tour_tuong_tu($id_loai_tour, $id_tour)
{
    $sql = "SELECT * FROM tours WHERE id_loai_tour = " . $id_loai_tour . " and id_tour <> " . $id_tour;
    $result =   pdo_query($sql);
    return  $result;
}
function show_tour_by_domain_ctr($id_loai)
{
    $sql = "SELECT * from tours
        where id_loai_tour = $id_loai";
    $result = pdo_query($sql);
    return $result;
}

function show_tour_cheap()
{
    $sql = "SELECT * FROM tours where 1 order by (price - sale_price) LIMIT 0,4";
    $result = pdo_query($sql);
    return $result;
}
function show_tour_sale()
{
    $sql = "SELECT * FROM tours WHERE sale_price != 0";
    $result = pdo_query($sql);
    return $result;
}

// tour model trong quản trị
function show_all_tour()
{
    $sql = "SELECT * FROM tours INNER JOIN loai_tour ON tours.id_loai_tour = loai_tour.id_loai_tour";
    $result = pdo_query($sql);
    return $result;
}
function insert_tour($data = [])
{
    $sql = "INSERT INTO tours (name_tour,image,price,sale_price,lich_khoi_hanh,thoi_gian,khoi_hanh_tu,phuong_tien,chuong_trinh,
        chinh_sach,dieu_khoan,description,id_loai_tour) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
function tour_delete($id_tour)
{
    $sql = "DELETE FROM tours WHERE id_tour=?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_tour]);
}
//function Lấy 1 bản ghi
function tour_one($id_tour)
{
    $sql = "SELECT * FROM tours WHERE id_tour=?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_tour]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function tour_edit($data = [])
{
    $sql = "UPDATE tours SET name_tour=?, image=?, price=?, sale_price=?, lich_khoi_hanh=?, thoi_gian=?, khoi_hanh_tu=?, phuong_tien=?, chuong_trinh=?,
        chinh_sach=?, dieu_khoan=?, description=?, id_loai_tour=? WHERE id_tour=?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
function check_lich_khoi_hanh($lichkhoihanh)
{
    switch ($lichkhoihanh) {
        case 'Thứ 2 hàng tuần':
            $lkh = "Thứ 2 hàng tuần";
            break;
        case 'Thứ 3 hàng tuần':
            $lkh = "Thứ 3 hàng tuần";
            break;
        case 'Thứ 4 hàng tuần':
            $lkh = "Thứ 4 hàng tuần";
            break;
        case 'Thứ 5 hàng tuần':
            $lkh = "Thứ 5 hàng tuần";
            break;
        case 'Thứ 6 hàng tuần':
            $lkh = "Thứ 6 hàng tuần";
            break;
        case 'Thứ 7 hàng tuần':
            $lkh = "Thứ 7 hàng tuần";
            break;
        case 'Chủ nhật hàng tuần':
            $lkh = "Chủ nhật hàng tuần";
            break;
        default:
            $lkh = "Thứ 2 hàng tuần";
            break;
    }
    return $lkh;
}

function check_thoi_gian($thoigian)
{
    switch ($thoigian) {
        case '2 ngày 1 đêm':
            $tg = "2 ngày 1 đêm";
            break;
        case '3 ngày 2 đêm':
            $tg = "3 ngày 2 đêm";
            break;
        case '4 ngày 3 đêm':
            $tg = "4 ngày 3 đêm";
            break;
        case '5 ngày 4 đêm':
            $tg = "5 ngày 4 đêm";
            break;
        case '6 ngày 5 đêm':
            $tg = "6 ngày 5 đêm";
            break;
        case '7 ngày 6 đêm':
            $tg = "7 ngày 6 đêm";
            break;
        default:
            $tg = "2 ngày 1 đêm";
            break;
    }
    return $tg;
}

function check_khoi_hanh_tu($khoihanhtu)
{
    switch ($khoihanhtu) {
        case 'TP.Hồ Chí Minh':
            $kht = "TP.Hồ Chí Minh";
            break;
        case 'TP.Huế':
            $kht = "TP.Huế";
            break;
        case 'Đà Nẵng':
            $kht = "Đà Nẵng";
            break;
        case 'Hà Nội':
            $kht = "Hà Nội";
            break;
        case 'Quảng Ninh':
            $kht = "Quảng Ninh";
            break;
        case 'Hải Phòng':
            $kht = "Hải Phòng";
            break;
        case 'Cần Thơ':
            $kht = "Cần Thơ";
            break;
        case 'Nghệ An':
            $kht = "Nghệ An";
            break;
        case 'Khánh Hòa':
            $kht = "Khánh Hòa";
            break;
        case 'Lâm Đồng':
            $kht = "Lâm Đồng";
            break;
        case 'Bình Định':
            $kht = "Bình Định";
            break;
        case 'Kiên Giang':
            $kht = "Kiên Giang";
            break;
        case 'Đồng Nai':
            $kht = "Đồng Nai";
            break;
        default:
            $kht = "Thứ 2 hàng tuần";
            break;
    }
    return $kht;
}
function check_phuong_tien($phuongtien)
{
    switch ($phuongtien) {
        case 'Máy bay.svg':
            $pt = "Máy bay";
            break;
        case 'Ô tô.svg':
            $pt = "Ô tô";
            break;
        case 'Tàu thủy.svg':
            $pt = "Tàu thủy";
            break;
        default:
            $pt = "Máy bay";
            break;
    }
    return $pt;
}
