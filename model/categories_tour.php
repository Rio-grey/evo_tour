<?php
function all_categories()
{
  $sql = "SELECT * FROM loai_tour";
  $result = pdo_query($sql);
  return $result;
}
function insert_category($data = [])
{
  $sql = "INSERT INTO loai_tour(ten_loai_tour) VALUES (?) ";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}
function categories_delete($id_loai_tour)
{
  $sql = "DELETE FROM loai_tour WHERE id_loai_tour=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_loai_tour]);
}
//function Lấy 1 bản ghi
function categories_one($id_loai_tour)
{
  $sql = "SELECT * FROM loai_tour WHERE id_loai_tour=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_loai_tour]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}
function categories_edit($data = [])
{
  $sql = "UPDATE loai_tour SET ten_loai_tour=? WHERE id_loai_tour=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}
function setting_one($id_setting)
{
  $sql = "SELECT * FROM setting WHERE id_setting=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_setting]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function setting_edit($data = [])
{
  $sql = "UPDATE setting SET logo=?,
    dia_chi=?,sdt=?,email=?,
    copyright=?,zalo=? WHERE id_setting=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}
function setting()
{
  $sql = "SELECT * FROM setting";
  $result = pdo_query($sql);
  return $result;
}
