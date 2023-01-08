<?php include_once "header.php" ?>
<link rel="stylesheet" href="./layout/css/dang_ky.css">
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css">
<section class="bread-crumb">
      <div class="container">
        <ul>
          <li>
            <a href="?ctr=home">Trang chủ</a>
          </li>
          <li class="cheo">/</li>
          <li>Đăng ký tài khoản</li>
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
              <li>
                <a href="?ctr=login" title="Đăng nhập">Đăng nhập</a>
              </li>
              <li class="active">
                <a href="?ctr=signup" title="Đăng ký">Đăng ký</a>
              </li>
            </ul>
            <form action="?ctr=signup_acc" method="post" class="form-login">
              <div class="form-signup">
                <div class="form-group">
                  <label>Họ và tên<span class="required">*</span></label>
                  <input
                    placeholder="Nhập Họ và Tên"
                    type="text"
                    class="form-control form-control-lg"
                    name="hoten"
                    value="<?=isset($data_old[2]) ? $data_old[2] : ''?>"
                  />
                  <small><?=isset($error['hoten']) ? $error['hoten'] : ''?></small>
                </div>
                <div class="form-group">
                  <label>Số điện thoại<span class="required">*</span></label>
                  <input
                    placeholder="Nhập Số điện thoại"
                    type="tel"
                    class="number-sidebar form-control form-control-lg"
                    name="phone"
                    value="<?=isset($data_old[3]) ? $data_old[3] : '' ?>"
                  />
                  <small><?=isset($error['phone']) ? $error['phone'] : ''?></small>
                </div>
                <div class="form-group">
                  <label>Địa chỉ<span class="required">*</span></label>
                  <input
                    placeholder="Nhập Địa chỉ"
                    type="text"
                    class="form-control form-control-lg"
                    name="diachi"
                    value="<?=isset($data_old[4]) ? $data_old[4] : ''?>"
                  />
                  <small><?=isset($error['diachi']) ? $error['diachi'] : ''?></small>
                </div>
                <div class="form-group">
                  <label>Giới tính<span class="required">*</span></label>
                  <div class="form-control form-control-lg" style="padding-top: 10px;">
                    <input type="hidden" name="gioitinh" value="">
                    <span for="">Nam</span>
                    <input type="radio" name="gioitinh" value="Nam" >
                    <span for="" style="margin-left: 10px;">Nữ</span>
                    <input type="radio" name="gioitinh" value="Nữ">
                  </div>
                  <small><?=isset($error['gioitinh']) ? $error['gioitinh'] : ''?></small> 
                </div>
                <div class="form-group">
                  <label>Email<span class="required">*</span></label>
                  <input
                    placeholder="Nhập Địa chỉ Email"
                    type="email"
                    class="form-control form-control-lg"
                    name="email"
                    value="<?=isset($data_old[5]) ? $data_old[5] : ''?>"
                  />
                  <small><?=isset($error['email']) ? $error['email'] : ''?></small>
                </div>
                <div class="form-group">
                  <label>Tài khoản<span class="required">*</span></label>
                  <input
                    placeholder="Nhập Tên tài khoản"
                    type="text"
                    class="form-control form-control-lg"
                    name="username"
                    value="<?=isset($data_old[0]) ? $data_old[0] : ''?>"
                  />
                  <small><?=isset($error['username']) ? $error['username'] : ''?></small>
                </div>
                <div class="form-group">
                  <label>Mật khẩu<span class="required">*</span></label>
                  <input
                    placeholder="Nhập Mật khẩu"
                    type="password"
                    class="form-control form-control-lg"
                    name="password"
                    value="<?=isset($data_old[1]) ? $data_old[1] : '' ?>"
                  />
                  <small><?=isset($error['password']) ? $error['password'] : ''?></small>
                </div>
                <div class="form-group">
                  <label>Nhập lại mật khẩu<span class="required">*</span></label>
                  <input
                    placeholder="Nhập lại Mật khẩu"
                    type="password"
                    class="form-control form-control-lg"
                    name="repassword"
                    value="<?=isset($data_old[9]) ? $data_old[9] : ''?>"
                  />
                  <small><?=isset($error['repassword']) ? $error['repassword'] : ''?></small>
                </div>
                <button type="submit" class="btn-blues" name="btn_sign">Tạo tài khoản</button>
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
                      redirect_uri:
                        "https://store.mysapo.net/account/facebook_account_callback",
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
                      client_id:
                        "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",
                      redirect_uri:
                        "https://store.mysapo.net/account/google_account_callback",
                      scope:
                        "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
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
              <a
                href="javascript:void(0)"
                class="social-login--facebook"
                onclick="loginFacebook()"
                ><img
                  width="129px"
                  height="37px"
                  alt="facebook-login-button"
                  src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"
              /></a>
              <a
                href="javascript:void(0)"
                class="social-login--google"
                onclick="loginGoogle()"
                ><img
                  width="129px"
                  height="37px"
                  alt="google-login-button"
                  src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
   

<?php include_once "footer.php" ?>