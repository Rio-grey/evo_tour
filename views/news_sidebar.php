<link rel="stylesheet" href="./layout/css/tin_tuc.css">
<aside class="sidebar">
  <div class="aside-item collection-category">
    <h3 class="aside-title">DANH MỤC</h3>
    <div class="aside-content">
      <ul class="nav-category">
        <li class="nav-item">
          <a href="?ctr=home" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a href="?ctr=about" class="nav-link">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <div class="add">
            <a href="?ctr=tourDL" class="nav-link">
              Tour du lịch
            </a>
            <ion-icon name="add-outline" id="dropdownmenu"></ion-icon>
          </div>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu nav-item">
              <div class="add">
                <a href="#" class="nav-link" style="padding-left: 10px">Tour trong nước</a>
                <ion-icon name="add-outline" id="dropdownmenu"></ion-icon>
              </div>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu nav-item">
                  <div class="add">
                    <a href="?ctr=tourDL_3mien&mien=1" class="nav-link" style="padding-left: 20px">Miền Bắc</a>
                    <ion-icon name="add-outline" id="dropdownmenu"></ion-icon>
                  </div>
                </li>
                <li class="dropdown-submenu nav-item">
                  <div class="add">
                    <a href="?ctr=tourDL_3mien&mien=3" class="nav-link" style="padding-left: 20px">Miền
                      Trung</a>
                    <ion-icon name="add-outline" id="dropdownmenu"></ion-icon>
                  </div>
                </li>
                <li class="dropdown-submenu nav-item">
                  <div class="add">
                    <a href="?ctr=tourDL_3mien&mien=2" class="nav-link" style="padding-left: 20px">Miền Nam</a>
                    <ion-icon name="add-outline" id="dropdownmenu"></ion-icon>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="?ctr=tourKM" class="nav-link">Tour khuyến mãi</a>
        </li>
        <li class="nav-item">
          <a href="?ctr=news" class="nav-link">Tin tức và kinh nghiệm du lịch</a>
        </li>
        <li class="nav-item">
          <a href="?ctr=faq" class="nav-link">FAQ</a>
        </li>
        <li class="nav-item">
          <a href="?ctr=contact" class="nav-link">Liên hệ</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="aside-item top-news">
    <h3 class="aside-title">BÀI VIẾT ĐƯỢC YÊU THÍCH</h3>
    <?php foreach ($news_like as $news) : ?>
      <div class="top-new">
        <div class="top-new-img">
          <a href="?ctr=news_detail&id_news=<?= $news['id_news'] ?>">
            <img src="./layout/images/products/<?= $news['image'] ?>" alt="" />
          </a>
        </div>
        <div class="top-new-info">
          <h4>
            <a href="?ctr=news_detail&id_news=<?= $news['id_news'] ?>"><?= $news['title_news'] ?></a>
          </h4>
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <div class="aside-item blog-banner">
    <a href="#">
      <img src="./layout/images/blog_banner.png" alt="" />
    </a>
  </div>
</aside>