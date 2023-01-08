<?php
  function all_news() {
    $sql = "SELECT * FROM tin_tuc";
    $result = pdo_query($sql);
    return $result;
  }
  function show_news_like() {
    $sql = "SELECT * FROM tin_tuc WHERE 1 ORDER BY total_views DESC LIMIT 0,6";
    $result = pdo_query($sql);
    return $result;
  }
  function news_top_1() {
    $sql = "SELECT * FROM tin_tuc WHERE 1 ORDER BY total_views DESC LIMIT 0,1";
    $result = pdo_query($sql);
    return $result;
  }
  function news_top_2() {
    $sql = "SELECT * FROM tin_tuc WHERE 1 ORDER BY total_views < 2000 DESC LIMIT 0,1";
    $result = pdo_query($sql);
    return $result;
  }
  function news_top_3() {
    $sql = "SELECT * FROM tin_tuc WHERE 1 ORDER BY total_views LIMIT 0,9";
    $result = pdo_query($sql);
    return $result;
  }
  function news_top_2_2() {
    $sql = "SELECT * FROM tin_tuc WHERE 1 ORDER BY total_views < 1200 DESC LIMIT 0,3";
    $result = pdo_query($sql);
    return $result;
  }
  
  function insert_news($data=[]){
    $sql = "INSERT INTO tin_tuc(title_news,desc_news,image) VALUES (?,?,?) ";
    $conn =pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt ->execute($data);
  }
  function news_delete($id_news) {
    $sql = "DELETE FROM tin_tuc WHERE id_news=?";
    $conn =pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt ->execute([$id_news]);
  }
  //function Lấy 1 bản ghi
  function news_one($id_news) {
    $sql = "SELECT * FROM tin_tuc WHERE id_news=?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_news]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
  function news_edit($data = []) {
    $sql = "UPDATE tin_tuc SET title_news=?, desc_news=?, image=? WHERE id_news=?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
  }