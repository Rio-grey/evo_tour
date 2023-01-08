<?php
$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
$ten_menu = isset($_GET['ten_menu']) ? $_GET['ten_menu'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Evo Tour</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./layout/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./layout/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <script src="https://cdn.tiny.cloud/1/fitqm3itf1xqzhn8uazv6w0hoc6ztfv5cqw6dkob9zguvued/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '.chinh_sach_tour',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [{
          value: 'First.Name',
          title: 'First Name'
        },
        {
          value: 'Email',
          title: 'Email'
        },
      ]
    });
  </script>
  <script src="https://kit.fontawesome.com/91fe53bdda.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="./layout/css/style.css" />
  <link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css">
</head>

<body>
  <header>
    <div class="container">
      <div class="header-top">
        <div class="header-logo">
          <?php foreach($all_setting as $setting) : ?>
            <a href="?ctr=home"><img src="./layout/images/<?= $setting['logo'] ?>" alt="" /></a>
          <?php endforeach ?>
        </div>
        <form action="?ctr=search_tour" method="post" class="header-searchs">
          <div class="header-search">
            <input type="text" name="search_tour" placeholder="Nhập tên điểm đến hoặc thành phố bạn muốn tới" />
            <button type="submit">
              <ion-icon name="search-outline"></ion-icon>
            </button>
          </div>
        </form>
        <div class="header-user">
          <div class="evo-acount">
            <?php if (!isset($_SESSION['user'])) : ?>
              <a href="#">
                <ion-icon name="person-outline" class="person"></ion-icon>
                <span>Tài khoản</span>
              </a>
              <ul>
                <li>
                  <a href="?ctr=login">Đăng nhập</a>
                </li>
                <li>
                  <a href="?ctr=signup">Đăng ký</a>
                </li>
              </ul>
            <?php elseif (isset($_SESSION['user'])) : ?>
              <a href="?ctr=account_detail">
                <img src="./views/admin/assets/img/160x160/<?=isset($_SESSION['user']['image']) ? $_SESSION['user']['image'] : ""?>" alt="" style="border-radius: 100rem; width: 35px; height: 35px;">
                <span><?= isset($_SESSION['user']['hoten']) ? $_SESSION['user']['hoten'] : "" ?></span>
              </a>
              <ul>
                <li>
                  <a href="?ctr=account_detail">Thông tin tài khoản</a>
                </li>
                <?php if ((isset($_SESSION['user']['vaitro']) && $_SESSION['user']['vaitro'] == 3) || (isset($_SESSION['user']['vaitro']) && $_SESSION['user']['vaitro'] == 2)) : ?>
                  <li>
                    <a href="?ctr=home_admin" target="_blank">Quản trị website</a>
                  </li>
                <?php endif ?>
                <li>
                  <a href="?ctr=logout_acc">Đăng xuất</a>
                </li>
              </ul>
            <?php endif ?>
          </div>
          <div class="evo-heart">
            <a href="?ctr=show_yeu_thich">
              <ion-icon name="heart-outline" class="heart"></ion-icon>
              <span>Yêu thích</span>
              <span class="quantity-icon">
                <?php
                if (!isset($_SESSION['love'])) {
                  $i = 0;
                } else {
                  $i = 0;
                  foreach ($_SESSION['love'] as $item) {
                    $i++;
                  }
                }
                echo $i;
                ?>
              </span>
            </a>
            <!-- <div class="top-wish-list-content">
              <div class="added-products">
                <span class="favorites-message">
                  Những tour thích <span class="favorites-count">(0)</span>
                </span>
                <div class="wish-list-small">
                  <div class="emty-description">
                    <span class="emty-icon">
                      <i class="ico ico-favorite-heart"></i>
                    </span>
                    <div class="emty-text">
                      <h3>
                        Tour nào của chúng tôi bạn mong muốn sở hữu nhất?
                      </h3>
                      <p>Hãy thêm vào danh sách Tour yêu thích ngay nhé!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <a href="?ctr=gio_hang">
            <ion-icon name="cart-outline" class="cart"></ion-icon>
            <span class="quantity-icon"><?= count($_SESSION['bill']) ?></span>
          </a>
        </div>
      </div>
    </div>
    <div class="header-menu">
      <div class="container">
        <ul class="menu">
          <li class="menu-item">
            <a href="?ctr=home" class="<?= ($ctr == 'home' || $ctr == '/') ? 'menu-link active' : 'menu-link' ?>">TRANG CHỦ</a>
          </li>
          <li class="menu-item">
            <a href="?ctr=about" class="<?= ($ctr == 'about') ? 'menu-link active' : 'menu-link' ?>">GIỚI THIỆU</a>
          </li>
          <li class="menu-item">
            <a href="?ctr=tourDL" class="<?= ($ctr == 'tourDL') ? 'menu-link active' : 'menu-link' ?>">TOUR DU LỊCH <ion-icon name="chevron-down-outline"></ion-icon></a>
            <div class="menu__child">
              <div class="menu__child-item">
                <h4><a href="?ctr=tourDL_3mien&mien=1">Miền Bắc</a></h4>
                <!-- miền bắc các tỉnh du lịch nhỏ -->
                <ul class="menu__child-list">
                  <?php
                  $mb = show_tour_mb();
                  foreach ($mb as $b) {
                    extract($b);
                    if ($id_loai_tour == 1) {
                      echo '
                      <li ><a href="?ctr=mienbac&mb=' . $tour_cu_the . '&id_loai_tour=' . $id_loai_tour . '">' . $tour_cu_the . '</a></li>
                      ';
                    }
                  }
                  ?>
                </ul>
              </div>
              <div class="menu__child-item">
                <h4><a href="?ctr=tourDL_3mien&mien=3">Miền Trung</a></h4>
                <!-- miền trung các tỉnh du lịch nhỏ -->
                <ul class="menu__child-list">
                  <?php
                  $mb = show_tour_mb();
                  foreach ($mb as $b) {
                    extract($b);
                    if ($id_loai_tour == 3) {
                      echo '
                    <li ><a href="?ctr=mientrung&mb=' . $tour_cu_the . '&id_loai_tour=' . $id_loai_tour . ' ">' . $tour_cu_the . '</a></li>
                    ';
                    }
                  }
                  ?>
                </ul>
              </div>
              <div class="menu__child-item">
                <h4><a href="?ctr=tourDL_3mien&mien=2">Miền Nam</a></h4>
                <!-- miền nam các tỉnh du lịch nhỏ -->
                <ul class="menu__child-list">
                  <?php
                  $mb = show_tour_mb();
                  foreach ($mb as $b) {
                    extract($b);
                    if ($id_loai_tour == 2) {

                      echo '
                    <li ><a href="?ctr=miennam&mb=' . $tour_cu_the . '&id_loai_tour=' . $id_loai_tour . '">' . $tour_cu_the . '</a></li>
                    ';
                    }
                  }
                  ?>
                </ul>
              </div>

            </div>
          </li>
          <li class="menu-item">
            <a href="?ctr=tourKM" class="<?= ($ctr == 'tourKM') ? 'menu-link active' : 'menu-link' ?>"> TOUR KHUYẾN MÃI</a>
          </li>
          <li class="menu-item">
            <a href="?ctr=news" class="<?= ($ctr == 'news') ? 'menu-link active' : 'menu-link' ?>">TIN TỨC & KINH NGHIỆM DU LỊCH</a>
          </li>
          <li class="menu-item">
            <a href="?ctr=faq" class="<?= ($ctr == 'faq') ? 'menu-link active' : 'menu-link' ?>">FAQ</a>
          </li>
          <li class="menu-item">
            <a href="?ctr=contact" class="<?= ($ctr == 'contact') ? 'menu-link active' : 'menu-link' ?>">LIÊN HỆ</a>
          </li>
        </ul>
      </div>
    </div>
  </header>