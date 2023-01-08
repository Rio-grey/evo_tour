<?php
function all_orders()
{
  $sql = "SELECT * FROM book_tour_detail INNER JOIN booking ON book_tour_detail.id_booking=booking.id_booking";
  $result = pdo_query($sql);
  return $result;
}
function orders_delete($id_booking_detail)
{
  $sql = "DELETE FROM book_tour_detail WHERE id_booking_detail=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_booking_detail]);
}

function orders_one($id_booking_detail)
{
  $sql = "SELECT * FROM book_tour_detail INNER JOIN booking ON book_tour_detail.id_booking=booking.id_booking WHERE id_booking_detail=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_booking_detail]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}
function orders_edit($data = [])
{
  $sql = "UPDATE book_tour_detail SET status=? WHERE id_booking_detail=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}
function check_trang_thai_don_hang($trangthaidonhang)
{
  switch ($trangthaidonhang) {
    case '0':
      $ttdh = "Đơn hàng mới";
      break;
    case '1':
      $ttdh = "Đang xử lý";
      break;
    case '2':
      $ttdh = "Đang giao hàng";
      break;
    case '3':
      $ttdh = "Hoàn tất";
      break;
    default:
      $ttdh = "Đơn hàng mới";
      break;
  }
  return $ttdh;
}