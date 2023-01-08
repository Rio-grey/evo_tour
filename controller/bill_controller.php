<?php
if (!isset($_SESSION['bill'])) {
  $_SESSION['bill'] = [];
}

function bill_ctr()
{

  if (isset($_POST['dattour'])) {
    $id_tour = $_POST['id_tour'];
    $name_tour = $_POST['name_tour'];
    $image = $_POST['img'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $lich_khoi_hanh = $_POST['lich_khoi_hanh'];
    $thoi_gian = $_POST['thoi_gian'];
    $nguoilon = $_POST['nguoi'];
    $tre_em = $_POST['tre_em'];
    $ngay_di = $_POST['date_go'];
    $ngay_dat_hang = date('d/m/Y');
    if ($ngay_di == "") {
      header("location: ?ctr=tour_detail&id_tour=" . $id_tour);
    }

    // $tour = [$id_tour, $name_tour, $image, $price, $sale_price, $lich_khoi_hanh, 
    // $thoi_gian,$nguoilon,$tre_em,$ngay_di,$ngay_dat_hang];
    // $_SESSION['bill'][] = $tour; 

// kiểm tra tour đã có trong giỏ hàng hay không
    $fl = 0;

    for ($i = 0; $i < sizeof($_SESSION['bill']); $i++) {
      if ($_SESSION['bill'][$i][0] == $id_tour) {
        $fl = 1;
        $so_luong_nguoi_new = $nguoilon + $_SESSION['bill'][$i][7];
        $so_luong_tre_em_vew = $tre_em + $_SESSION['bill'][$i][8];
        $_SESSION['bill'][$i][7] = $so_luong_nguoi_new;
        $_SESSION['bill'][$i][8] = $so_luong_tre_em_vew;
        break;
      }
      // if($_SESSION['bill'][$i][9] != $ngay_di){
      //   $ngay_new =  $_SESSION['bill'][$i][9];
      //   $_SESSION['bill'][$i][9] = $ngay_new;
        
      //   break;
      // }
    }
    
    if ($fl == 0) {
      $tour = [
        $id_tour, $name_tour, $image, $price, $sale_price, $lich_khoi_hanh,
        $thoi_gian, $nguoilon, $tre_em, $ngay_di, $ngay_dat_hang
      ];
      $_SESSION['bill'][] = $tour;
    }
    render('bill', ['bill' => $_SESSION['bill']]);
  }
  render('bill');
}
function bill_del()
{
  if (isset($_GET['idtour'])) {
    // unset($_SESSION['love']);

    array_splice($_SESSION['bill'], $_GET['idtour'], 1);
  }
  header("location:?ctr=gio_hang");
}

function gio_hang(){
  $all_setting = setting();
  if (isset($_GET['idtour'])) {
    // unset($_SESSION['love']);
    array_splice($_SESSION['bill'], $_GET['idtour'], 1);
  }
  // header("location:?ctr=gio_hang");
  render('gio_hang', ['all_setting' => $all_setting]);  
}