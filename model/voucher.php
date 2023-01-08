<?php 
function all_voucher()
{
  $sql = "SELECT * FROM uu_dai";
  $result = pdo_query($sql);
  return $result;
}
function insert_voucher($data = [])
{
  $sql = "INSERT INTO uu_dai(code_voucher,ngay_bat_dau,ngay_het_han,value) VALUES (?,?,?,?) ";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}
function voucher_delete($id_voucher)
{
  $sql = "DELETE FROM uu_dai WHERE id_voucher=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_voucher]);
}
//function Lấy 1 bản ghi
function voucher_one($id_voucher)
{
  $sql = "SELECT * FROM uu_dai WHERE id_voucher=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_voucher]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}
function voucher_edit($data = [])
{
  $sql = "UPDATE uu_dai SET code_voucher=?, ngay_bat_dau=?, ngay_het_han=?, value=? WHERE id_voucher=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}