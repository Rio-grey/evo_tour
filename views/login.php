<?php include_once "header.php" ?>
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css" />
<link rel="stylesheet" href="./layout/css/dang_ky.css" />
<section class="bread-crumb">
  <div class="container">
    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/</li>
      <li>Đăng nhập tài khoản</li>
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
        <form action="?ctr=login_acc" method="post" class="form-login">
          <div class="form-signup">
            <div class="form-group">
              <label>User Name<span class="required">*</span></label>
              <input placeholder="Nhập username" class="form-control form-control-lg" name="user_name" value="<?= isset($data[0]) ? $data[0] : '' ?>" />
            </div>
            <small style="color: red;"><?= isset($error['user_name']) ? $error['user_name'] : '' ?></small>
            <div class="form-group">
              <label>Mật khẩu<span class="required">*</span></label>
              <input placeholder="Nhập Mật khẩu" type="password" class="form-control form-control-lg" name="password" />
            </div>
            <small style="color: red;"><?= isset($error['password']) ? $error['password'] : '' ?></small>
            <small style="color: red;"><?= isset($error['check']) ? $error['check'] : '' ?></small>
            <p class="">
              <a href="?ctr=miss_password" class="miss-password">Quên mật khẩu?</a>
            </p>
            <button type="submit" name="btn_login" class="btn-blues">Đăng nhập</button>
            <p class="login--notes">
              Evo Tour cam kết bảo mật và sẽ không bao giờ đăng <br />hay
              chia sẻ thông tin mà chưa có được sự đồng ý của bạn.
            </p>
          </div>
        </form>
        <div class="line-break">
          <span>hoặc đăng nhập qua</span>
        </div>
        <div class="social-login">
          <script>
            function loginFacebook() {
              var a = {
                  client_id: "947410958642584",
                  redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                  state: JSON.stringify({
                    redirect_url: window.location.href,
                  }),
                  scope: "email",
                  response_type: "code",
                },
                b =
                "https://www.facebook.com/v3.2/dialog/oauth" +
                encodeURIParams(a, !0);
              window.location.href = b;
            }

            function loginGoogle() {
              var a = {
                  client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",
                  redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                  scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                  access_type: "online",
                  state: JSON.stringify({
                    redirect_url: window.location.href,
                  }),
                  response_type: "code",
                },
                b =
                "https://accounts.google.com/o/oauth2/v2/auth" +
                encodeURIParams(a, !0);
              window.location.href = b;
            }

            function encodeURIParams(a, b) {
              var c = [];
              for (var d in a)
                if (a.hasOwnProperty(d)) {
                  var e = a[d];
                  null != e &&
                    c.push(
                      encodeURIComponent(d) + "=" + encodeURIComponent(e)
                    );
                }
              return 0 == c.length ? "" : (b ? "?" : "") + c.join("&");
            }
          </script>
          <a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg" /></a>
          <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg" /></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once "footer.php" ?>