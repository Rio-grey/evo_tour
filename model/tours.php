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

// tour model trong qu???n tr???
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
//function L???y 1 b???n ghi
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
        case 'Th??? 2 h??ng tu???n':
            $lkh = "Th??? 2 h??ng tu???n";
            break;
        case 'Th??? 3 h??ng tu???n':
            $lkh = "Th??? 3 h??ng tu???n";
            break;
        case 'Th??? 4 h??ng tu???n':
            $lkh = "Th??? 4 h??ng tu???n";
            break;
        case 'Th??? 5 h??ng tu???n':
            $lkh = "Th??? 5 h??ng tu???n";
            break;
        case 'Th??? 6 h??ng tu???n':
            $lkh = "Th??? 6 h??ng tu???n";
            break;
        case 'Th??? 7 h??ng tu???n':
            $lkh = "Th??? 7 h??ng tu???n";
            break;
        case 'Ch??? nh???t h??ng tu???n':
            $lkh = "Ch??? nh???t h??ng tu???n";
            break;
        default:
            $lkh = "Th??? 2 h??ng tu???n";
            break;
    }
    return $lkh;
}

function check_thoi_gian($thoigian)
{
    switch ($thoigian) {
        case '2 ng??y 1 ????m':
            $tg = "2 ng??y 1 ????m";
            break;
        case '3 ng??y 2 ????m':
            $tg = "3 ng??y 2 ????m";
            break;
        case '4 ng??y 3 ????m':
            $tg = "4 ng??y 3 ????m";
            break;
        case '5 ng??y 4 ????m':
            $tg = "5 ng??y 4 ????m";
            break;
        case '6 ng??y 5 ????m':
            $tg = "6 ng??y 5 ????m";
            break;
        case '7 ng??y 6 ????m':
            $tg = "7 ng??y 6 ????m";
            break;
        default:
            $tg = "2 ng??y 1 ????m";
            break;
    }
    return $tg;
}

function check_khoi_hanh_tu($khoihanhtu)
{
    switch ($khoihanhtu) {
        case 'TP.H??? Ch?? Minh':
            $kht = "TP.H??? Ch?? Minh";
            break;
        case 'TP.Hu???':
            $kht = "TP.Hu???";
            break;
        case '???? N???ng':
            $kht = "???? N???ng";
            break;
        case 'H?? N???i':
            $kht = "H?? N???i";
            break;
        case 'Qu???ng Ninh':
            $kht = "Qu???ng Ninh";
            break;
        case 'H???i Ph??ng':
            $kht = "H???i Ph??ng";
            break;
        case 'C???n Th??':
            $kht = "C???n Th??";
            break;
        case 'Ngh??? An':
            $kht = "Ngh??? An";
            break;
        case 'Kh??nh H??a':
            $kht = "Kh??nh H??a";
            break;
        case 'L??m ?????ng':
            $kht = "L??m ?????ng";
            break;
        case 'B??nh ?????nh':
            $kht = "B??nh ?????nh";
            break;
        case 'Ki??n Giang':
            $kht = "Ki??n Giang";
            break;
        case '?????ng Nai':
            $kht = "?????ng Nai";
            break;
        default:
            $kht = "Th??? 2 h??ng tu???n";
            break;
    }
    return $kht;
}
function check_phuong_tien($phuongtien)
{
    switch ($phuongtien) {
        case 'M??y bay.svg':
            $pt = "M??y bay";
            break;
        case '?? t??.svg':
            $pt = "?? t??";
            break;
        case 'T??u th???y.svg':
            $pt = "T??u th???y";
            break;
        default:
            $pt = "M??y bay";
            break;
    }
    return $pt;
}
