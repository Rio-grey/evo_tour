<link rel="stylesheet" href="./layout/css/tin_tuc.css">
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css">
<?php include_once "header.php" ?>

<section class="bread-crumb">
    <div class="container">
        <ul>
            <li>
                <a href="?ctr=home">Trang chủ</a>
            </li>
            <li class="cheo">/</li>
            <li>Tất cả tin tức và kinh nghiệm du lịch</li>
        </ul>
    </div>
</section>

<section class="list-blogs">
    <div class="container">
        <div class="list-blog">
            <div class="newslist">
                <div class="newslist-top">
                    <?php foreach($news_top_1 as $news) : ?>
                        <div class="later-news-big">
                            <div class="news-image">
                                <a href="?ctr=news_detail&id_news=<?= $news['id_news'] ?>">
                                    <img src="./layout/images/products/<?= $news['image'] ?>" alt="" />
                                </a>
                            </div>
                            <h3>
                                <a href="?ctr=news_detail"><?= $news['title_news'] ?></a>
                            </h3>
                            <figure>
                                Đà Nẵng có cả núi, đồng bằng và biển, chỉ nằm cách Hội An 30
                                km. Bao quanh bởi hàng loạt điểm tham quan du lịch cũng như
                                danh lam thắng cảnh nổi tiếng nên không khó hiểu vì sao nơi
                                đây lại thu hút khách du lịch đến vậy. Dưới đây, Traveloka sẽ
                                mang đến cho các bạn một “cuốn” cẩm nang du lịch Đà Nẵng một
                                ngày đầy ắp những gợi ý cho chuyến đi hoàn hảo, cùng nhóm bạn
                                “tái tạo” lại năng lượng để quay về học tập – làm việc nhé!
                            </figure>
                        </div>
                    <?php endforeach ?>    
                    <ul class="later-news">
                        <?php foreach($news_top_2 as $news) : ?>
                            <li class="later-news-middle">
                                <a href="?ctr=news_detail&id_news=<?= $news['id_news'] ?>">
                                    <img src="./layout/images/products/<?= $news['image'] ?>" alt="" class="later-news-middle-img" />
                                </a>
                                <h3>
                                    <a href="?ctr=news_detail">
                                        <?= $news['title_news'] ?>
                                    </a>
                                </h3>
                            </li>
                        <?php endforeach ?>
                        <?php foreach($news_top_2_2 as $news) : ?>
                            <li class="list-small">
                                <h3>
                                    <a href="?ctr=news_detail&id_news=<?= $news['id_news'] ?>">
                                        <?= $news['title_news'] ?>
                                    </a>
                                </h3>
                            </li>
                        <?php endforeach ?>    
                    </ul>
                </div>
                <div class="blogs">
                    <?php foreach($news_top_3 as $news) : ?>
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <a href="?ctr=news_detail&id_news=<?= $news['id_news'] ?>">
                                    <img src="./layout/images/products/<?= $news['image'] ?>" alt="" />
                                </a>
                            </div>
                            <h3 class="blog-item-title">
                                <a href="?ctr=news_detail&id_news=<?= $news['id_news'] ?>"><?= $news['title_news'] ?></a>
                            </h3>
                            <!-- <p class="blog-item-desc">
                                Hệ thống giao thông tại Nhật Bản phát triển rất đa dạng và khá
                                phức tạp. Với những người lần đầu đến xứ sở mặt trời mọc cũng
                                sẽ gặp Hệ thống giao thông tại Nhật Bản phát triển rất đa dạng
                                và khá phức tạp. Với những người lần đầu đến xứ sở mặt trời
                                mọc cũng sẽ gặp
                            </p> -->
                        </div>
                    <?php endforeach ?>    
                </div>
                <div class="slider"></div>
            </div>
            <?php include_once "news_sidebar.php" ?>
        </div>
    </div>
</section>

<?php include_once "footer.php" ?>