<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/91fe53bdda.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <title>Evo Tour</title>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./layout/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./layout/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="./layout/css/bill_confirm.css" />
</head>

<body>
  <div class="container">
    <header>
      <div class="logo"><a href="?ctr=home">Evo Tour</a></div>
    </header>
    <section class="main-bill">
      <div class="bill-confirm">
        <div class="bill-infos">
          <div class="thankyou-message">
            <div class="thankyou-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                  <circle cx="36" cy="36" r="35" style="
                        stroke-dasharray: 240px, 240px;
                        stroke-dashoffset: 480px;
                      "></circle>
                  <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="
                        stroke-dasharray: 50px, 50px;
                        stroke-dashoffset: 0px;
                      "></path>
                </g>
              </svg>
            </div>
            <div class="thankyou-content">
              <h2 class="thankyou-title">C???m ??n b???n ???? ?????t h??ng</h2>
              <p class="thankyou-desc">
                M???t email x??c nh???n ???? ???????c g???i t???i <?= $bill[2] ?>.
                <br />
                Xin vui l??ng ki???m tra email c???a b???n
              </p>
            </div>
          </div>
          <div class="bill-info">
            <div class="bill-row">
              <div class="bill-col">
                <h2>Th??ng tin mua h??ng</h2>
                <p><?= $bill[0] ?></p>
                <p><?= $bill[2] ?></p>
                <p>+84 <?= $bill[1] ?></p>
              </div>
              <div class="bill-col">
                <h2>?????a ch??? nh???n h??ng</h2>
                <p><?= $bill[0] ?></p>
                <p><?= $bill[3] ?></p>
                <p>+84 <?= $bill[1] ?></p>

              </div>

            </div>
            <div class="bill-row">
              <div class="bill-col">
                <h2>Ph????ng th???c thanh to??n</h2>
                <p><?= $bill[10] ?></p>
              </div>
              <div class="bill-col">
                <h2>Ph????ng th???c v???n chuy???n</h2>
                <p>Giao h??ng t???n n??i</p>
              </div>
            </div>
          </div>
        </div>
        <div class="bill-cart">
          <p class="order">????n h??ng #<?= $bill[11] ?></p>
          <?php
          $tong = 0;
          ?>
          <?php foreach ($_SESSION['bill'] as $item) : ?>
            <div class="table-overflow">
              <table class="table">
                <tbody>
                  <tr class="product">
                    <td class="product__image">
                      <div class="product-thumnail">
                        <div class="product-thumbnail__wrapper">
                          <img src="./layout/images/products/<?= $item[2] ?>" alt="" class="product-thumbnail__image" />
                        </div>
                        <!-- <span class="product-thumbnail__quantity">2</span> -->
                      </div>
                    </td>
                    <td class="product__description">
                      <span class="product__description__name">
                        <?= $item[1] ?>
                      </span>
                      <span class="product__description__property">Ng?????i L???n: <?= $item[7] ?> </span>
                      <span class="product__description__property">Tr??? em: <?= $item[8] ?> </span>
                      <span class="product__description__property">
                        Ng??y ??i: <?= $item[9] ?>
                      </span>
                    </td>
                    <td class="product__price"><?= number_format(($item[7] * ($item[3] - $item[4])) +  ($item[8] * (($item[3] - $item[4]) / 2))) ?>???</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <?php $tong_tien = ($item[7] * ($item[3] - $item[4])) +  ($item[8] * (($item[3] - $item[4]) / 2));
            $tong += $tong_tien;
            ?>
          <?php endforeach ?>
          <div class="price">
            <p>T???m t??nh:</p>
            <p><?= number_format($tong) ?>???</p>
          </div>
          <div class="shipping">
            <p>Ph?? v???n chuy???n</p>
            <p>40.000???</p>
          </div>
          <div class="total-price">
            <p>T???ng c???ng</p>
            <p><?= number_format($tong + 40000) ?>???</p>
          </div>
        </div>
      </div>
      <button class="btn btn-blues"><a href="?ctr=del_dh">Ti???p T???c Mua H??ng </a></button>
    </section>
  </div>
</body>

</html>