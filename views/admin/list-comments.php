<?php include_once "views/admin/header_admin.php" ?>

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
      <h1 class="page-header-title">Manage reviews</h1>

      <!-- Nav -->
      <ul class="nav nav-tabs page-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#"> Published </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Pending
            <span class="badge badge-soft-dark badge-pill ml-1">2</span>
          </a>
        </li>
      </ul>
      <!-- End Nav -->
    </div>
    <!-- End Page Header -->

    <!-- Card -->
    <div class="card mb-3 mb-lg-5">
      <!-- Body -->
      <div class="card-body">
        <div class="row align-items-md-center gx-md-5">
          <div class="col-md-auto mb-3 mb-md-0">
            <div class="d-flex align-items-center">
              <img class="avatar avatar-xxl avatar-4by3 mr-4" src="views\admin\assets\svg\illustrations\review-5-star.svg" alt="Image Description" />

              <div class="d-block">
                <h4 class="display-2 text-dark mb-0">4.84</h4>
                <p>
                  &mdash; of 7 reviews
                  <span class="badge badge-soft-dark badge-pill ml-1">+1 this week</span>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md">
            <ul class="list-unstyled list-unstyled-py-2 mb-0">
              <!-- Review Ratings -->
              <li class="d-flex align-items-center font-size-sm">
                <span class="mr-3">5 star</span>
                <div class="progress flex-grow-1">
                  <div class="progress-bar" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="ml-3">4</span>
              </li>
              <!-- End Review Ratings -->

              <!-- Review Ratings -->
              <li class="d-flex align-items-center font-size-sm">
                <span class="mr-3">4 star</span>
                <div class="progress flex-grow-1">
                  <div class="progress-bar" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="ml-3">3</span>
              </li>
              <!-- End Review Ratings -->

              <!-- Review Ratings -->
              <li class="d-flex align-items-center font-size-sm">
                <span class="mr-3">3 star</span>
                <div class="progress flex-grow-1">
                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="ml-3">0</span>
              </li>
              <!-- End Review Ratings -->

              <!-- Review Ratings -->
              <li class="d-flex align-items-center font-size-sm">
                <span class="mr-3">2 star</span>
                <div class="progress flex-grow-1">
                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="ml-3">0</span>
              </li>
              <!-- End Review Ratings -->

              <!-- Review Ratings -->
              <li class="d-flex align-items-center font-size-sm">
                <span class="mr-3">1 star</span>
                <div class="progress flex-grow-1">
                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="ml-3">0</span>
              </li>
              <!-- End Review Ratings -->
            </ul>
          </div>
        </div>
      </div>
      <!-- End Body -->
    </div>
    <!-- End Card -->
    <?php if (isset($_COOKIE['message'])) : ?>
      <div class="alert alert-success" role="alert">
        <?= $_COOKIE['message'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <i class="tio-clear tio-lg" style="color: white;"></i>
        </button>
      </div>
    <?php endif ?>
    <!-- Card -->
    <div class="card">
      <!-- Header -->
      <div class="card-header">
        <div class="row justify-content-between align-items-center flex-grow-1">
          <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-search"></i>
                  </div>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search reviews" aria-label="Search reviews" />
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="col-sm-6">
            <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
              <!-- Datatable Info -->
              <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none">
                <div class="d-flex align-items-center">
                  <span class="font-size-sm mr-3">
                    <span id="datatableCounter">0</span>
                    Selected
                  </span>
                  <a class="btn btn-sm btn-outline-danger mr-2" href="javascript:;">
                    <i class="tio-delete-outlined"></i> Delete
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:;">
                    <i class="tio-publish"></i> Publish
                  </a>
                </div>
              </div>
              <!-- End Datatable Info -->

              <!-- Unfold -->
              <div class="hs-unfold mr-2">
                <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersExportDropdown",
                         "type": "css-animation"
                       }'>
                  <i class="tio-download-to mr-1"></i> Export
                </a>

                <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                  <span class="dropdown-header">Options</span>
                  <a id="export-copy" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="views\admin\assets\svg\illustrations\copy.svg" alt="Image Description" />
                    Copy
                  </a>
                  <a id="export-print" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="views\admin\assets\svg\illustrations\print.svg" alt="Image Description" />
                    Print
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Download options</span>
                  <a id="export-excel" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="views\admin\assets\svg\brands\excel.svg" alt="Image Description" />
                    Excel
                  </a>
                  <a id="export-csv" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="views\admin\assets\svg\components\placeholder-csv-format.svg" alt="Image Description" />
                    .CSV
                  </a>
                  <a id="export-pdf" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="views\admin\assets\svg\brands\pdf.svg" alt="Image Description" />
                    PDF
                  </a>
                </div>
              </div>
              <!-- End Unfold -->

              <!-- Select -->
              <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0" data-target-column-index="5" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm",
                            "dropdownAutoWidth": true,
                            "width": true,
                            "placeholder": "Filters"
                          }'>
                <option value="">All</option>
                <option value="Published">Published</option>
                <option value="Pending">Pending</option>
              </select>
              <!-- End Select -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Header -->

      <!-- Table -->
      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 3, 6],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 5,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
          <thead class="thead-light">
            <tr>
              <th scope="col" class="table-column-pr-0">
                <div class="custom-control custom-checkbox">
                  <input id="datatableCheckAll" type="checkbox" class="custom-control-input" />
                  <label class="custom-control-label" for="datatableCheckAll"></label>
                </div>
              </th>
              <th>Product</th>
              <th>Reviewer</th>
              <th>Review</th>
              <th>Date</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($all_comments as $comment) : ?>
              <tr>
                <td class="table-column-pr-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="usersDataCheck2" />
                    <label class="custom-control-label" for="usersDataCheck2"></label>
                  </div>
                </td>
                <th>
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="avatar">
                      <img class="avatar-img" src="layout/images/products/<?= $comment['image'] ?>" alt="Image Description" />
                    </div>
                    <div class="ml-3">
                      <span class="h5 text-hover-primary"><?= $comment['name_tour'] ?></span>
                    </div>
                  </a>
                </th>
                <td>
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <!-- <div class="avatar avatar-circle">
                      <img class="avatar-img" src="views\admin\assets\img\160x160\img10.jpg" alt="Image Description" />
                    </div> -->
                    <div class="">
                      <span class="d-block h5 text-hover-primary mb-0"><?= $comment['hoten'] ?>
                      </span>
                      <span class="d-block font-size-sm text-body"><?= $comment['email'] ?></span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="text-wrap" style="width: 18rem">
                    <div class="d-flex mb-2">
                      <div class="mr-1">
                        <img src="views\admin\assets\svg\components\star.svg" alt="Review rating" width="14" />
                      </div>
                      <div class="mr-1">
                        <img src="views\admin\assets\svg\components\star.svg" alt="Review rating" width="14" />
                      </div>
                      <div class="mr-1">
                        <img src="views\admin\assets\svg\components\star.svg" alt="Review rating" width="14" />
                      </div>
                      <div class="mr-1">
                        <img src="views\admin\assets\svg\components\star.svg" alt="Review rating" width="14" />
                      </div>
                      <div class="mr-1">
                        <img src="views\admin\assets\svg\components\star.svg" alt="Review rating" width="14" />
                      </div>
                    </div>

                    <h4 class="mb-1">I just love it!</h4>
                    <p>
                      <?= $comment['noi_dung'] ?>
                    </p>
                  </div>
                </td>
                <td><?= $comment['ngay_bl'] ?></td>
                <td>
                  <span class="badge badge-soft-success">Published</span>
                </td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-sm btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" href="?ctr=delete-comment&id_bl=<?= $comment['id_bl'] ?>">
                      <i class="tio-delete-outlined"></i> Delete
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- End Table -->

      <!-- Footer -->
      <div class="card-footer">
        <!-- Pagination -->
        <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
          <div class="col-sm mb-2 mb-sm-0">
            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
              <span class="mr-2">Showing:</span>

              <!-- Select -->
              <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                <option value="5" selected="">5</option>
                <option value="7">7</option>
                <option value="12">12</option>
              </select>
              <!-- End Select -->

              <span class="text-secondary mr-2">of</span>

              <!-- Pagination Quantity -->
              <span id="datatableWithPaginationInfoTotalQty"></span>
            </div>
          </div>

          <div class="col-sm-auto">
            <div class="d-flex justify-content-center justify-content-sm-end">
              <!-- Pagination -->
              <nav id="datatablePagination" aria-label="Activity pagination"></nav>
            </div>
          </div>
        </div>
        <!-- End Pagination -->
      </div>
      <!-- End Footer -->
    </div>
    <!-- End Card -->
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

<!-- Upload files Modal -->
<div class="modal fade" id="uploadFilesModal" tabindex="-1" role="dialog" aria-labelledby="uploadFilesModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="uploadFilesModalTitle" class="modal-title">Add files</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <!-- Dropzone -->
        <div id="attachFilesLabel" class="js-dropzone dropzone-custom custom-file-boxed">
          <div class="dz-message custom-file-boxed-label">
            <img class="avatar avatar-xl avatar-4by3 mb-3" src="views\admin\assets\svg\illustrations\browse.svg" alt="Image Description" />

            <h5>Drag and drop your file here</h5>

            <p class="mb-2">or</p>

            <span class="btn btn-sm btn-white">Browse files</span>
          </div>
        </div>
        <!-- End Dropzone -->
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white" data-dismiss="modal" aria-label="Close">
          Cancel
        </button>
        <button type="button" class="btn btn-primary">Upload</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Upload files Modal -->
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

    // INITIALIZATION OF DATATABLES
    // =======================================================
    var datatable = $.HSCore.components.HSDatatables.init($("#datatable"), {
      dom: "Bfrtip",
      buttons: [{
          extend: "copy",
          className: "d-none",
        },
        {
          extend: "excel",
          className: "d-none",
        },
        {
          extend: "csv",
          className: "d-none",
        },
        {
          extend: "pdf",
          className: "d-none",
        },
        {
          extend: "print",
          className: "d-none",
        },
      ],
      select: {
        style: "multi",
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: "#datatableCheckAll",
          counter: "#datatableCounter",
          counterInfo: "#datatableCounterInfo",
        },
      },
      language: {
        zeroRecords: '<div class="text-center p-4">' +
          '<img class="mb-3" src="views/admin/assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
          '<p class="mb-0">No data to show</p>' +
          "</div>",
      },
    });

    $("#export-copy").click(function() {
      datatable.button(".buttons-copy").trigger();
    });

    $("#export-excel").click(function() {
      datatable.button(".buttons-excel").trigger();
    });

    $("#export-csv").click(function() {
      datatable.button(".buttons-csv").trigger();
    });

    $("#export-pdf").click(function() {
      datatable.button(".buttons-pdf").trigger();
    });

    $("#export-print").click(function() {
      datatable.button(".buttons-print").trigger();
    });

    $(".js-datatable-filter").on("change", function() {
      var $this = $(this),
        elVal = $this.val(),
        targetColumnIndex = $this.data("target-column-index");

      datatable.column(targetColumnIndex).search(elVal).draw();
    });

    $("#datatableSearch").on("mouseup", function(e) {
      var $input = $(this),
        oldValue = $input.val();

      if (oldValue == "") return;

      setTimeout(function() {
        var newValue = $input.val();

        if (newValue == "") {
          // Gotcha
          datatable.search("").draw();
        }
      }, 1);
    });

    // INITIALIZATION OF SELECT2
    // =======================================================
    $(".js-select2-custom").each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
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