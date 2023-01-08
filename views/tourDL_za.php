<?php include_once "header.php" ?>

<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css">
<section class="bread-crumb">
    <div class="container">
        <ul>
            <li>
                <a href="?ctr=home">Trang chủ</a>
            </li>
            <li class="cheo">/</li>
            <li>Tour du lịch</li>
        </ul>
    </div>
</section>
<section class="cat-banner">
    <a href="#">
        <img src="./layout/images/cat-banner-2.png" alt="" />
    </a>
</section>
<section class="search-all">
    <div class="container">
        <form action="" method="post">
            <div class="search">
                <div class="group-a">
                    <img src="./layout/images/place-localizer.svg" alt="" />
                    <input type="text" placeholder="Bạn muốn đi đâu?" />
                </div>
                <div class="group-b">
                    <img src="./layout/images/date.svg" alt="" />
                    <div class="banner-date-content">
                        <p>Ngày khởi hành</p>
                        <input type="text" name="" id="banner-date" placeholder="Chọn Ngày khởi hành" />
                    </div>
                </div>
                <div class="group-c">
                    <img src="./layout/images/paper-plane.svg" alt="" />
                    <div class="banner-plane-content">
                        <p>Khởi hành từ</p>
                        <select name="" id="" class="">
                            <option value="">Tất cả</option>
                            <option value="">TP.Hồ Chí Minh</option>
                            <option value="">Hà Nội</option>
                            <option value="">TP.Huế</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="banner-btn">TÌM</button>
            </div>
        </form>
    </div>

</section>
<section class="sale">
    <div class="container">
        <div class="sort-cate">
            <div class="sort-left">
                <h3>Xếp theo:</h3>

                <form action="?index.php?ctr=tourDL" method="post">
                    <li><input type="radio" onclick="window.location= '?ctr=A-Z';" name="sort" id="id1"  />Tên A - Z</li>
                    <li><input type="radio" onclick="window.location= '?ctr=Z-A';" name="sort" id="" checked />Tên Z - A</li>
                    <li><input type="radio" onclick="window.location= '?ctr=tangdan';" name="sort" id=""  />Giá tăng dần</li>
                    <li><input type="radio" onclick="window.location= '?ctr=giamdan';" name="sort" id=""  />Giá giảm dần</li>
                </form>
                   
               
            </div>
        </div>
    </div>
</section>
   
   
<section class="tour-inbound">
    <div class="container">
        <div class="tour-last">
        <?php foreach ($desc as $tour) : ?>
                <div class="tour-last-item">
                    <div class="tour-last-img">
                        <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>">
                            <img src="./layout/images/products/<?= $tour['image'] ?>" alt="" />
                        </a>
                    </div>
                    <div class="tour-last-info">
                        <h3 class="info-tour-title">
                            <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>"><?= $tour['name_tour'] ?></a>
                        </h3>
                        <div class="info-bottom">
                            <div class="vote-box">
                                <div class="meta-vote">
                                    <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
                                </div>
                                <div class="sale-off"><?= number_format($tour['price']) ?>₫</div>
                            </div>
                            <div class="date-go">
                                <ul>
                                    <li>
                                        <img src="./layout/images/tag_icon_4.svg" alt="" />
                                        <div>
                                            <span class="date">Lịch khởi hành:</span>
                                            <span class="date-go-color"><?= $tour['lich_khoi_hanh'] ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="./layout/images/tag_icon_5.svg" alt="" />
                                        <div>
                                            <span class="date">Thời gian:</span>
                                            <span class="date-go-color"><?= $tour['thoi_gian'] ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="action-box">
                                <h2 class="price-box"><?= number_format($tour['price'] - $tour['sale_price']) ?>₫</h2>
                                <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <!-- <ul class="pagination pagination phantrang">
            <li><a href="?ctr=tourDL&trang=1">1</a></li>
            <li><a href="?ctr=tourDL&trang=2 ">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul> -->


    </div>
</section>

<?php include_once "footer.php" ?>