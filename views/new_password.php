<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css" />
<link rel="stylesheet" href="./layout/css/dang_ky.css" />
<?php include_once "views/header.php" ?>
<section class="bread-crumb">
  <div class="container">
    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/</li>
      <li>Quên Mật Khẩu</li>
    </ul>
  </div>
</section>
<section class="login">
  <div class="container">
    <div class="page-login">
      <div class="account-banner">
        <!-- <img src="./images/account-banner.png" alt="" /> -->
        <div class="account_policy_title">Quyền lợi thành viên</div>
        <div class="account_policy_content">
          <p>Tour chọn lọc chất lượng nhất</p>
          <p>Đội ngũ tư vấn chi tiết và tận tình</p>
          <p>Nhận nhiều chương trình ưu đãi hấp dẫn từ chúng tôi</p>
        </div>
      </div>
      <div class="account-login">
        <ul class="auth-block__menu-list">
          <li class="active">
            <a href="?ctr=login" title="Đăng nhập">Đăng nhập</a>
          </li>
          <li>
            <a href="?ctr=signup" title="Đăng ký">Đăng ký</a>
          </li>
        </ul>
        <div class="miss-text">
          Thiết lập lại mật khẩu mới
        </div>
        <form action="?ctr=new_pass" method="post" class="form-login">
          <input type="hidden" name="email" value="<?=$_POST['email']?>">
          <div class="form-signup">
            <div class="form-group">
              <label>Mật khẩu mới<span class="required">*</span></label>
              <input placeholder="Mật khẩu mới" type="password" class="form-control form-control-lg" name="pass" required="" />
            </div>
            <div class="form-group">
              <label>Xác nhận mật khẩu<span class="required">*</span></label>
              <input placeholder="Xác nhận mật khẩu" type="password" class="form-control form-control-lg" name="re_pass" required="" />
              <small class="form-text text-muted" style="color: red;"><?= isset($errors['pass']) ? $errors['pass'] : "" ?></small>
            </div>
            <button name="btn_pass" type="submit" class="btn-blues">
              Đặt lại mật khẩu
            </button>
          </div>
        </form>
        <p class="return">
          Quay lại
          <a href="?ctr=login" class="">tại đây.</a>
        </p>
      </div>
    </div>
  </div>
</section>
<?php include_once "views//footer.php";
