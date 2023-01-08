<?php 
function all_slide()
{
  $sql = "SELECT * FROM slide";
  $result = pdo_query($sql);
  return $result;
}
function insert_slide($data = [])
{
  $sql = "INSERT INTO slide(image,desc_slide) VALUES (?,?) ";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}
function slide_delete($id_slide)
{
  $sql = "DELETE FROM slide WHERE id_slide=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_slide]);
}
//function Lấy 1 bản ghi
function slide_one($id_slide)
{
  $sql = "SELECT * FROM slide WHERE id_slide=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_slide]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}
function slide_edit($data = [])
{
  $sql = "UPDATE slide SET image=?, desc_slide=? WHERE id_slide=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}