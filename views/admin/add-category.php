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
                <a class="breadcrumb-link" href="ecommerce-products.html">Categories</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Add category
              </li>
            </ol>
          </nav>

          <h1 class="page-header-title">Add category</h1>
        </div>
      </div>
      <!-- End Row -->  
    </div>
    <!-- End Page Header -->
    <form action="?ctr=save_add_category" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-8">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Category information</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Form Group -->
              <div class="form-group" style="margin-bottom: 0;">
                <label for="productNameLabel" class="input-label">Tên danh mục
                  <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>

                <input type="text" class="form-control" name="ten_loai_tour" id="productNameLabel" placeholder="Nhập tên danh mục" aria-label="Shirt, t-shirts, etc." value="<?= isset($data_old[0]) ? $data_old[0] : '' ?>" />
                <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['ten_loai_tour']) ? $errors['ten_loai_tour'] : '' ?></small>
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
                <button type="reset" class="btn btn-ghost-danger">Delete</button>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-ghost-light mr-2">
                  Discard
                </button>
                <button type="submit" class="btn btn-primary">Save</button>
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
          &copy; Rio.
          <span class="d-none d-sm-inline-block">2022 Htmlstream.</span>
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
          <p>"Compare to" Price, Bulk Discount Pricing, Inventory Tracking</p>

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
              Use this feature when you want to put a product on sale or show
              savings off suggested retail pricing.
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
            <p>Encourage higher purchase quantities with volume discounts.</p>
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
<?php include_once "views/admin/footer_admin.php" ?>