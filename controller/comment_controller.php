<?php
  function show_comment_ctr() {
    $all_comments = show_binhluan_admin();
    render('admin/list-comments', ['all_comments' => $all_comments]); 
  }
  function delete_comment_ctr() {
    $id_bl = $_GET['id_bl'];
    comment_delete($id_bl);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=show_comments_admin");
    die;
  }