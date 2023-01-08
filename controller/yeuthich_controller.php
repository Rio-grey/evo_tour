<?php
if (!isset($_SESSION['love'])) {
  $_SESSION['love'] = [];
}
function show_yeu_thich()
{
  $all_setting = setting();
  render('yeu_thich', ['all_setting' => $all_setting]);
}


function yeu_thich_ctr()
{


  if (isset($_POST['btn'])) {
    $id_tour = $_POST['id_tour'];
    $name_tour = $_POST['name_tour'];
    $image = $_POST['img'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $lich_khoi_hanh = $_POST['lich_khoi_hanh'];
    $thoi_gian = $_POST['thoi_gian'];
    $phuong_tien = $_POST['phuong_tien'];
    $tour = [$id_tour, $name_tour, $image, $price, $sale_price, $lich_khoi_hanh, $thoi_gian, $phuong_tien];
    $_SESSION['love'][] = $tour;
    $all_setting = setting();
    render('yeu_thich', ['yeuthich' => $_SESSION['love'], 'all_setting' => $all_setting]);
  }
}
function yeu_thich_del()
{
  if (isset($_GET['idtour'])) {
    // unset($_SESSION['love']);

    array_splice($_SESSION['love'], $_GET['idtour'], 1);
  }
  header("location:?ctr=show_yeu_thich");
}
