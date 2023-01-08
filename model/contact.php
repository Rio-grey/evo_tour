<?php 
  function add_contact($data = []) {
    $sql = "INSERT INTO lien_he (ho_ten,email,so_dien_thoai,noi_dung_lien_he) VALUES(?, ?, ?, ?)";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt -> execute($data);
  }
  function all_contact() {
    $sql = "SELECT * FROM lien_he";
    $result = pdo_query($sql);
    return $result;
  }