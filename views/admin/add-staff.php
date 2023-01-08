<?php include_once "views\admin\header_admin.php" ?>
<!-- ========== HEADER ========== -->

<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<!-- Navbar Vertical -->

<!-- End Navbar Vertical -->

<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-sm mb-2 mb-sm-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item">
                <a class="breadcrumb-link" href="ecommerce-products.html">Staffs</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Add staff
              </li>
            </ol>
          </nav>

          <h1 class="page-header-title">Add staff</h1>
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <form method="POST" enctype="multipart/form-data" action="?ctr=save_add_staff">
      <div class="row">
        <div class="col-lg-8">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Staff information</h4>
            </div>
            <!-- End Header -->
            <!-- Body -->
            <div class="card-body">
              <!-- Form Group -->
              <div class="form-group">
                <label for="productNameLabel" class="input-label">Họ và tên
                  <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>
                <input type="text" class="form-control" name="hoten" id="productNameLabel" aria-label="Shirt, t-shirts, etc." value="<?= isset($data_old[0]) ? $data_old[0] : '' ?>" />
                <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['hoten']) ? $errors['hoten'] : '' ?></small>
              </div>
              <!-- End Form Group -->
              <!-- Form Group -->
              <div class="form-group">
                <label for="productNameLabel" class="input-label">Tên đăng nhập
                  <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>
                <input type="text" class="form-control" name="user_name" id="productNameLabel" aria-label="Shirt, t-shirts, etc." value="<?= isset($data_old[0]) ? $data_old[0] : '' ?>" />
                <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['user_name']) ? $errors['user_name'] : '' ?></small>
              </div>
              <!-- End Form Group -->
              <!-- Form Group -->
              <div class="form-group">
                <label for="exampleInput" class="input-label">Ảnh</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="exampleInput">
                  <label class="custom-file-label" for="customFileEg1">Choose file</label>
                </div>
                <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['image']) ? $errors['image'] : '' ?></small>
              </div>
              <!-- End Form Group -->
              <!-- Row -->
              <div class="row">
                <div class="col-sm-6">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="SKULabel" class="input-label">Giới tính</label>
                    <div class="js-add-field" data-hs-add-field-options='{
                        "template": "#addAnotherOptionFieldTemplate",
                        "container": "#addAnotherOptionFieldContainer",
                        "defaultCreated": 0
                      }'>
                      <!-- Form Group -->
                      <div class="form-group">
                        <div class="row">
                          <div class="col-12">
                            <div class="input-group-prepend">
                              <!-- Select -->
                              <select class="js-select2-custom custom-select" name="gioitinh" size="1" style="opacity: 0" data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity"
                                    }'>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                              </select>
                              <!-- End Select -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Form Group -->
                    </div>
                    <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['gioitinh']) ? $errors['gioitinh'] : '' ?></small>
                  </div>
                  <!-- End Form Group -->
                </div>
                <div class="col-sm-6">
                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12">
                        <!-- Form Group -->
                        <div class="form-group">
                          <label for="productNameLabel" class="input-label">Email</label>
                          <input type="email" class="form-control" name="email" id="productNameLabel" aria-label="Shirt, t-shirts, etc." value="" />
                          <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['email']) ? $errors['email'] : '' ?></small>
                        </div>
                        <!-- End Form Group -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12">
                        <!-- Form Group -->
                        <div class="form-group">
                          <label for="productNameLabel" class="input-label">Số điện thoại</label>
                          <input type="text" class="form-control" name="sdt" id="productNameLabel" aria-label="Shirt, t-shirts, etc." value="" />
                          <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['sdt']) ? $errors['sdt'] : '' ?></small>
                        </div>
                        <!-- End Form Group -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->
                </div>
                <div class="col-sm-6">
                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12">
                        <!-- Form Group -->
                        <div class="form-group">
                          <label for="productNameLabel" class="input-label">Địa chỉ</label>
                          <input type="text" class="form-control" name="diachi" id="productNameLabel" aria-label="Shirt, t-shirts, etc." value="<?= isset($data_old[0]) ? $data_old[0] : '' ?>" />
                          <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['diachi']) ? $errors['diachi'] : '' ?></small>
                        </div>
                        <!-- End Form Group -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->
                </div>
              </div>
              <!-- End Row -->
            </div>
            <!-- Body -->
          </div>
          <!-- End Card -->
        </div>
        <div class="col-lg-4">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Password</h4>
            </div>
            <!-- End Header -->
            <!-- Body -->
            <div class="card-body">
              <!-- Form Group -->
              <div class="form-group">
                <label for="priceNameLabel" class="input-label">Mật khẩu</label>
                <div class="input-group">
                  <input type="password" class="form-control" name="pass" id="priceNameLabel"/>
                </div>
                <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['pass']) ? $errors['pass'] : '' ?></small>
              </div>
              <!-- End Form Group -->
              <!-- Form Group -->
              <div class="form-group">
                <label for="priceNameLabel" class="input-label">Nhập lại mật khẩu</label>
                <div class="input-group">
                  <input type="password" class="form-control" name="repass" id="priceNameLabel"/>
                </div>
                <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['repass']) ? $errors['repass'] : '' ?></small>
              </div>
              <!-- End Form Group -->
            </div>
            <!-- Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Row -->

      <div class="position-fixed bottom-0 content-centered-x w-100 z-index-99 mb-3" style="max-width: 40rem">
        <!-- Card -->
        <div class="card card-sm bg-dark border-dark mx-2">
          <div class="card-body">
            <div class="row justify-content-center justify-content-sm-between">
              <div class="col">
                <button type="reset" class="btn btn-ghost-danger">
                  Delete
                </button>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-ghost-light mr-2">
                  Discard
                </button>
                <button type="submit" class="btn btn-primary" name="btn_insert">Save</button>
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>
    </form>
  </div>
  <!-- End Content -->

  <!-- Footer -->

  <div class="footer">
    <div class="row justify-content-between align-items-center">
      <div class="col">
        <p class="font-size-sm mb-0">
          &copy; Front.
          <span class="d-none d-sm-inline-block">2020 Htmlstream.</span>
        </p>
      </div>
      <div class="col-auto">
        <div class="d-flex justify-content-end">
          <!-- List Dot -->
          <ul class="list-inline list-separator">
            <li class="list-inline-item">
              <a class="list-separator-link" href="#">FAQ</a>
            </li>

            <li class="list-inline-item">
              <a class="list-separator-link" href="#">License</a>
            </li>

            <li class="list-inline-item">
              <!-- Keyboard Shortcuts Toggle -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                  <i class="tio-command-key"></i>
                </a>
              </div>
              <!-- End Keyboard Shortcuts Toggle -->
            </li>
          </ul>
          <!-- End List Dot -->
        </div>
      </div>
    </div>
  </div>

  <!-- End Footer -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Keyboard Shortcuts -->
<div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
  <div class="card card-lg sidebar-card">
    <div class="card-header">
      <h4 class="card-header-title">Keyboard shortcuts</h4>

      <!-- Toggle Button -->
      <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
        <i class="tio-clear tio-lg"></i>
      </a>
      <!-- End Toggle Button -->
    </div>

    <!-- Body -->
    <div class="card-body sidebar-body sidebar-scrollbar">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="font-weight-bold">Bold</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">i</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">u</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Alt</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">s</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">s</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">e</kbd>
            </div>
          </div>
        </div>
      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
          </div>
        </div>
      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">r</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">n</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">p</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Shift</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Shift</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Shift</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Alt</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">m</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">z</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">y</kbd>
            </div>
          </div>
        </div>
      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Alt</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">n</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Shift</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">p</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Shift</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">s</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Shift</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">o</kbd>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <div class="col-7 text-right">
              <kbd class="d-inline-block mb-1">Ctrl</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">Shift</kbd>
              <small class="text-muted">+</small>
              <kbd class="d-inline-block mb-1">/</kbd>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Body -->
  </div>
</div>
<!-- End Keyboard Shortcuts -->

<!-- Activity -->
<div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
  <div class="card card-lg sidebar-card">
    <div class="card-header">
      <h4 class="card-header-title">Activity stream</h4>

      <!-- Toggle Button -->
      <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
        <i class="tio-clear tio-lg"></i>
      </a>
      <!-- End Toggle Button -->
    </div>

    <!-- Body -->
    <div class="card-body sidebar-body sidebar-scrollbar">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="views\admin\assets\img\160x160\img9.jpg" alt="Image Description" />
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="font-size-sm mb-1">
                Added 2 files to task
                <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a>
              </p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <div class="media">
                        <span class="mt-1 mr-2">
                          <img class="avatar avatar-xs" src="views\admin\assets\svg\brands\excel.svg" alt="Image Description" />
                        </span>
                        <div class="media-body text-truncate">
                          <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <small class="d-block text-muted">12kb</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="media">
                        <span class="mt-1 mr-2">
                          <img class="avatar avatar-xs" src="views\admin\assets\svg\brands\word.svg" alt="Image Description" />
                        </span>
                        <div class="media-body text-truncate">
                          <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <small class="d-block text-muted">4kb</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- End List Item -->
              </ul>

              <small class="text-muted text-uppercase">Now</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="font-size-sm mb-1">
                Marked
                <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a>
                as
                <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span>
              </p>

              <small class="text-muted text-uppercase">Today</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="views\admin\assets\img\160x160\img3.jpg" alt="Image Description" />
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="font-size-sm mb-1">
                Added 5 card to <a href="#">Payments</a>
              </p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded ie-sidebar-activity-img" src="views\admin\assets\svg\illustrations\card-1.svg" alt="Image Description" />
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded ie-sidebar-activity-img" src="views\admin\assets\svg\illustrations\card-2.svg" alt="Image Description" />
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded ie-sidebar-activity-img" src="views\admin\assets\svg\illustrations\card-3.svg" alt="Image Description" />
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <small class="text-muted text-uppercase">May 12</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="font-size-sm mb-1">
                Added a new member to Front Dashboard
              </p>

              <small class="text-muted text-uppercase">May 15</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="views\admin\assets\img\160x160\img7.jpg" alt="Image Description" />
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="font-size-sm mb-1">
                Marked
                <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a>
                as
                <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span>
              </p>

              <small class="text-muted text-uppercase">Apr 29</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="views\admin\assets\img\160x160\img5.jpg" alt="Image Description" />
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="font-size-sm mb-1">
                Earned a "Top endorsed"
                <i class="tio-verified text-primary"></i> badge
              </p>

              <small class="text-muted text-uppercase">Apr 06</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="tio-user"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="font-size-sm mb-1">
                Marked
                <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a>
                as
                <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In
                  progress"</span>
              </p>

              <small class="text-muted text-uppercase">Feb 10</small>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
    </div>
    <!-- End Body -->
  </div>
</div>
<!-- End Activity -->

<!-- Welcome Message Modal -->
<div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-close">
        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body p-sm-5">
        <div class="text-center">
          <div class="w-75 w-sm-50 mx-auto mb-4">
            <img class="img-fluid" src="views\admin\assets\svg\illustrations\graphs.svg" alt="Image Description" />
          </div>

          <h4 class="h1">Welcome to Front</h4>

          <p>We're happy to see you in our community.</p>
        </div>
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer d-block text-center py-sm-5">
        <small class="text-cap mb-4">Trusted by the world's best teams</small>

        <div class="w-85 mx-auto">
          <div class="row justify-content-between">
            <div class="col">
              <img class="img-fluid ie-welcome-brands" src="views\admin\assets\svg\brands\gitlab-gray.svg" alt="Image Description" />
            </div>
            <div class="col">
              <img class="img-fluid ie-welcome-brands" src="views\admin\assets\svg\brands\fitbit-gray.svg" alt="Image Description" />
            </div>
            <div class="col">
              <img class="img-fluid ie-welcome-brands" src="views\admin\assets\svg\brands\flow-xo-gray.svg" alt="Image Description" />
            </div>
            <div class="col">
              <img class="img-fluid ie-welcome-brands" src="views\admin\assets\svg\brands\layar-gray.svg" alt="Image Description" />
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Welcome Message Modal -->

<!-- Add Image from URL Modal -->
<div class="modal fade" id="addImageFromURLModal" tabindex="-1" role="dialog" aria-labelledby="addImageFromURLModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="addImageFromURLModalTitle" class="modal-title">
          Add image from URL
        </h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <label for="pasteImageURLNameLabel" class="input-label">Paste image URL</label>
        <input type="text" class="form-control" name="projectName" id="pasteImageURLNameLabel" placeholder="https://" aria-label="https://" />
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">
          Cancel
        </button>
        <button type="button" class="btn btn-primary">Add media</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Add Image from URL Modal -->

<!-- Embed Video Modal -->
<div class="modal fade" id="embedVideoModal" tabindex="-1" role="dialog" aria-labelledby="embedVideoModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="embedVideoModalTitle" class="modal-title">Embed video</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <label for="pasteVideoURLNameLabel" class="input-label">Paste video URL</label>
        <input type="text" class="form-control" name="projectName" id="pasteVideoURLNameLabel" placeholder="https://" aria-label="https://" />
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">
          Cancel
        </button>
        <button type="button" class="btn btn-primary">Add media</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
  -
</div>
<!-- End Embed Video Modal -->

<!-- Products Advanced Features Modal -->
<div class="modal fade" id="productsAdvancedFeaturesModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-close">
        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <div class="text-center mb-7">
          <h4 class="h1">Advanced features</h4>
          <p>
            "Compare to" Price, Bulk Discount Pricing, Inventory Tracking
          </p>

          <a class="btn btn-primary" href="#">
            <i class="tio-star mr-1"></i> Upgrade to get these features
          </a>
        </div>

        <!-- Media -->
        <div class="d-sm-flex">
          <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="views\admin\assets\svg\illustrations\choice.svg" alt="Image Description" />

          <div class="media-body">
            <h4>"Compare to" price</h4>
            <p>
              Use this feature when you want to put a product on sale or
              show savings off suggested retail pricing.
            </p>
          </div>
        </div>
        <!-- End Media -->

        <hr class="my-4" />

        <!-- Media -->
        <div class="d-sm-flex">
          <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="views\admin\assets\svg\illustrations\presenting.svg" alt="Image Description" />

          <div class="media-body">
            <h4>Bulk discount pricing</h4>
            <p>
              Encourage higher purchase quantities with volume discounts.
            </p>
          </div>
        </div>
        <!-- End Media -->

        <hr class="my-4" />

        <!-- Media -->
        <div class="d-sm-flex">
          <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="views\admin\assets\svg\illustrations\book.svg" alt="Image Description" />

          <div class="media-body">
            <h4>Inventory tracking</h4>
            <p>
              Automatically keep track of product availability and receive
              notifications when inventory levels get low.
            </p>
          </div>
        </div>
        <!-- End Media -->
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">
          Close
        </button>
        <button type="button" class="btn btn-primary">Upgrade now</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
  -
</div>
<!-- End Products Advanced Features Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- JS Implementing Plugins -->
<script src="views\admin\assets\js\vendor.min.js"></script>

<!-- JS Front -->
<script src="views\admin\assets\js\theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on("ready", function() {
    // ONLY DEV
    // =======================================================

    if (window.localStorage.getItem("hs-builder-popover") === null) {
      $("#builderPopover")
        .popover("show")
        .on("shown.bs.popover", function() {
          $(".popover").last().addClass("popover-dark");
        });

      $(document).on("click", "#closeBuilderPopover", function() {
        window.localStorage.setItem("hs-builder-popover", true);
        $("#builderPopover").popover("dispose");
      });
    } else {
      $("#builderPopover").on("show.bs.popover", function() {
        return false;
      });
    }

    // END ONLY DEV
    // =======================================================

    // BUILDER TOGGLE INVOKER
    // =======================================================
    $(".js-navbar-vertical-aside-toggle-invoker").click(function() {
      $(".js-navbar-vertical-aside-toggle-invoker i").tooltip("hide");
    });

    // INITIALIZATION OF MEGA MENU
    // =======================================================
    var megaMenu = new HSMegaMenu($(".js-mega-menu"), {
      desktop: {
        position: "left",
      },
    }).init();

    // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
    // =======================================================
    var sidebar = $(".js-navbar-vertical-aside").hsSideNav();

    // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
    // =======================================================
    $(".js-nav-tooltip-link").tooltip({
      boundary: "window"
    });

    $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
      if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
        return false;
      }
    });

    // INITIALIZATION OF UNFOLD
    // =======================================================
    $(".js-hs-unfold-invoker").each(function() {
      var unfold = new HSUnfold($(this)).init();
    });

    // INITIALIZATION OF FORM SEARCH
    // =======================================================
    $(".js-form-search").each(function() {
      new HSFormSearch($(this)).init();
    });

    // INITIALIZATION OF SELECT2
    // =======================================================
    $(".js-select2-custom").each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });

    // INITIALIZATION OF QUILLJS EDITOR
    // =======================================================
    var quill = $.HSCore.components.HSQuill.init(".js-quill");

    // INITIALIZATION OF ADD INPUT FILED
    // =======================================================
    $(".js-add-field").each(function() {
      new HSAddField($(this), {
        addedField: function() {
          $(".js-add-field .js-select2-custom-dynamic").each(function() {
            var select2dynamic = $.HSCore.components.HSSelect2.init(
              $(this)
            );
          });
        },
      }).init();
    });

    // INITIALIZATION OF TAGIFY
    // =======================================================
    $(".js-tagify").each(function() {
      var tagify = $.HSCore.components.HSTagify.init($(this));
    });

    // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
    // =======================================================
    $(".js-dropzone").each(function() {
      var dropzone = $.HSCore.components.HSDropzone.init(
        "#" + $(this).attr("id")
      );
    });
  });
</script>

<!-- IE Support -->
<script>
  if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent))
    document.write(
      '<script src="views/admin/assets/vendor/babel-polyfill/polyfill.min.js"><\/script>'
    );
</script>
</body>

</html>