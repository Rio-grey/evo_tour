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
<section class="news">
  <div class="container">
    <div class="main-news">
      <div class="news-content">
        <h1 class="news-title"><?= $news_detail['title_news'] ?></h1>
        <div class="news-desc"><?= $news_detail['desc_news'] ?></div>
        <div class="evo-article-toolbar">
          <div class="evo-article-toolbar-left">
            <span class="evo-article-toolbar-head">Bạn đang xem: </span>
            <span class="evo-article-toolbar-title" title="Cẩm nang du lịch Đà Nẵng một ngày cho hội bạn vui chơi “sập” Đà thành"><?= $news_detail['title_news'] ?></span>
          </div>
          <!-- <div class="evo-article-toolbar-right">
            <a href="#" title="Bài trước">
              <svg class="Icon Icon--select-arrow-left" role="presentation" viewBox="0 0 11 18">
                <path d="M9.5 1.5L1.5 9l8 7.5" stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
              </svg>Bài trước
            </a>
          </div> -->
        </div>
      </div>
      <?php include_once "news_sidebar.php" ?>
    </div>
  </div>
</section>

<?php include_once "footer.php" ?>