<?php
function insert_bl($id_tour, $noidung, $id_user, $ngaybinhluan)
{
  $sql = "INSERT INTO `binh_luan`( `id_tour`, `id_users`, `noi_dung`, `ngay_bl`) VALUES ('$id_tour','$id_user','$noidung','$ngaybinhluan')";
  pdo_execute($sql);
}
function show_binhluan()
{
  $sql = "SELECT * FROM binh_luan INNER JOIN taikhoan ON binh_luan.id_users = taikhoan.id_users";
  $list_bl = pdo_query($sql);
  return $list_bl;
}
function show_binhluan_admin()
{
  $sql = "SELECT * FROM binh_luan INNER JOIN taikhoan ON binh_luan.id_users = taikhoan.id_users INNER JOIN tours ON binh_luan.id_tour=tours.id_tour";
  $list_bl = pdo_query($sql);
  return $list_bl;
}
function comment_delete($id_bl)
{
  $sql = "DELETE FROM binh_luan WHERE id_bl=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_bl]);
}