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
      <div class="row align-items-center mb-3">
        <div class="col-sm mb-2 mb-sm-0">
          <h1 class="page-header-title">
            Customers <span class="badge badge-soft-dark ml-2"><?= count($all_customers) ?></span>
          </h1>

          <div class="mt-2">
            <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#importCustomersModal">
              <i class="tio-publish mr-1"></i> Import customers
            </a>
            <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#exportCustomersModal">
              <i class="tio-download-to mr-1"></i> Export
            </a>

            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker text-body" href="javascript:;" data-hs-unfold-options='{
                      "target": "#moreOptionsDropdown",
                      "type": "css-animation"
                    }'>
                More options <i class="tio-chevron-down"></i>
              </a>

              <div id="moreOptionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                <a class="dropdown-item" href="#">
                  <i class="tio-copy dropdown-item-icon"></i> Manage
                  duplicates
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-edit dropdown-item-icon"></i> Edit users
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-restore dropdown-item-icon"></i> Restore
                  clients
                </a>
              </div>
            </div>
            <!-- End Unfold -->
          </div>
        </div>

        <!-- <div class="col-sm-auto">
          <a class="btn btn-primary" href="?ctr=add-customers">Add customers</a>
        </div> -->
      </div>
      <!-- End Row -->

      <!-- Nav Scroller -->
      <div class="js-nav-scroller hs-nav-scroller-horizontal">
        <span class="hs-nav-scroller-arrow-prev" style="display: none">
          <a class="hs-nav-scroller-arrow-link" href="javascript:;">
            <i class="tio-chevron-left"></i>
          </a>
        </span>

        <span class="hs-nav-scroller-arrow-next" style="display: none">
          <a class="hs-nav-scroller-arrow-link" href="javascript:;">
            <i class="tio-chevron-right"></i>
          </a>
        </span>

        <!-- Nav -->
        <ul class="nav nav-tabs page-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">All customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">New</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Returning</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Abandoned checkouts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Email subscribers</a>
          </li>
        </ul>
        <!-- End Nav -->
      </div>
      <!-- End Nav Scroller -->
    </div>
    <!-- End Page Header -->
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
      <!-- Body -->
      <div class="card-body">
        <div class="row justify-content-between align-items-center flex-grow-1">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-search"></i>
                  </div>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search customers" aria-label="Search customers" />
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="col-lg-6">
            <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
              <!-- Datatable Info -->
              <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none">
                <div class="d-flex align-items-center">
                  <span class="font-size-sm mr-3">
                    <span id="datatableCounter">0</span>
                    Selected
                  </span>
                  <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                    <i class="tio-delete-outlined"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Datatable Info -->

              <!-- Unfold -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;" data-hs-unfold-options='{
                        "target": "#showHideDropdown",
                        "type": "css-animation"
                      }'>
                  <i class="tio-table mr-1"></i> Columns
                  <span class="badge badge-soft-dark rounded-circle ml-1">5</span>
                </a>

                <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Name</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_name">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_name" checked="" />
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">E-mail</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_email">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_email" checked="" />
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Phone</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_phone">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_phone" />
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Address</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_country">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_country" checked="" />
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Account status</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_account_status">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_account_status" />
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Orders</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_orders">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_orders" checked="" />
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Total spent</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_total_spent">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_total_spent" checked="" />
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center">
                        <span class="mr-2">Actions</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_last_activity">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_last_activity" />
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Unfold -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Body -->

      <!-- Table -->
      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                    "columnDefs": [{
                        "targets": [0],
                        "orderable": false
                      }],
                    "order": [],
                    "info": {
                      "totalQty": "#datatableWithPaginationInfoTotalQty"
                    },
                    "search": "#datatableSearch",
                    "entries": "#datatableEntries",
                    "pageLength": 15,
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
              <th class="table-column-pl-0">Name</th>
              <th>E-mail</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Account status</th>
              <th>Orders</th>
              <th>Total spent</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach($all_customers as $customer) : ?>
              <?php if( $customer['bao_nhieu_don'] == 0 )
              {
                $customer['bao_nhieu_don'] =1;
              }
              ?>
              <tr>
                <td class="table-column-pr-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="usersDataCheck1" />
                    <label class="custom-control-label" for="usersDataCheck1"></label>
                  </div>
                </td>
                <td class="table-column-pl-0">
                  <a class="d-flex align-items-center" href="?ctr=customer-detail">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="views\admin\assets\img\160x160\<?= $customer['image'] ?>" alt="Image Description" />
                    </div>
                    <div class="ml-3">
                      <span class="h5 text-hover-primary"><?= $customer['hoten'] ?></span>
                    </div>
                  </a>
                </td>
                <td><?= $customer['email'] ?></td>
                <td>0<?= $customer['sdt'] ?></td>
                <td>
                  <?= $customer['diachi'] ?> <span class="text-hide">Code: GB</span>
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td><?= $customer['bao_nhieu_don']?></td>
                <td><?=number_format( $customer['tongt']) ?>₫</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-sm btn-outline-primary" href="?ctr=update-customer&id_users=<?= $customer['id_users'] ?>">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </div>
                  <div class="btn-group" role="group">
                    <a class="btn btn-sm btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" href="?ctr=delete-customer&id_users=<?= $customer['id_users'] ?>">
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
                <option value="10">10</option>
                <option value="15" selected="">15</option>
                <option value="20">20</option>
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
          &copy; Rio.
          <span class="d-none d-sm-inline-block">2022 Evo Tour.</span>
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



<!-- Export Customers Modal -->
<div class="modal fade" id="exportCustomersModal" tabindex="-1" role="dialog" aria-labelledby="exportCustomersModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="exportCustomersModalTitle" class="modal-title">
          Export customers
        </h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <!-- Form Group -->
        <div class="form-group">
          <!-- Custom Checkbox -->
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="customersRadio1" name="customersRadio" class="custom-control-input" checked="" />
            <label class="custom-control-label" for="customersRadio1">Current page</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="customersRadio2" name="customersRadio" class="custom-control-input" />
            <label class="custom-control-label" for="customersRadio2">All customers</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="customersRadio3" name="customersRadio" class="custom-control-input" disabled="" />
            <label class="custom-control-label" for="customersRadio3">Selected: 24 customers</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="customersRadio4" name="customersRadio" class="custom-control-input" />
            <label class="custom-control-label" for="customersRadio4">Order by date</label>
          </div>
          <!-- End Custom Checkbox -->
        </div>
        <!-- End Form Group -->

        <label class="input-label">Export as</label>

        <!-- Custom Checkbox -->
        <div class="custom-control custom-radio mb-2">
          <input type="radio" id="orderAsRadio1" name="orderAsRadio" class="custom-control-input" checked="" />
          <label class="custom-control-label" for="orderAsRadio1">CSV for Excel, Numbers, or other spreadsheet programs</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" id="orderAsRadio2" name="orderAsRadio" class="custom-control-input" />
          <label class="custom-control-label" for="orderAsRadio2">Plain CSV file</label>
        </div>
        <!-- End Custom Checkbox -->
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">
          Cancel
        </button>
        <button type="button" class="btn btn-primary">
          Export customers
        </button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Export Customers Modal -->

<!-- Import Customers Modal -->
<div class="modal fade" id="importCustomersModal" tabindex="-1" role="dialog" aria-labelledby="importCustomersModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="importCustomersModalTitle" class="modal-title">
          Import customers by CSV
        </h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <p>
          <a href="#">Download a sample CSV template</a> to see an example
          of the format required.
        </p>

        <!-- Form Group -->
        <div class="form-group">
          <!-- Dropzone -->
          <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
            <div class="dz-message custom-file-boxed-label">
              <img class="avatar avatar-xl avatar-4by3 mb-3" src="views\admin\assets\svg\illustrations\browse.svg" alt="Image Description" />
              <h5 class="mb-1">Choose files to upload</h5>
              <p class="mb-2">or</p>
              <span class="btn btn-sm btn-primary">Browse files</span>
            </div>
          </div>
          <!-- End Dropzone -->
        </div>
        <!-- End Form Group -->

        <!-- Custom Checkbox -->
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="overwriteCurrentCustomersCheckbox" />
          <label class="custom-control-label" for="overwriteCurrentCustomersCheckbox">Overwrite existing customers that have the same email or
            phone</label>
        </div>
        <!-- End Custom Checkbox -->
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">
          Cancel
        </button>
        <button type="button" class="btn btn-primary">
          Import customers
        </button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Import Customers Modal -->

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

    // INITIALIZATION OF NAV SCROLLER
    // =======================================================
    $(".js-nav-scroller").each(function() {
      new HsNavScroller($(this)).init();
    });

    // INITIALIZATION OF TABS
    // =======================================================
    $(".js-tabs-to-dropdown").each(function() {
      var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
    });

    // INITIALIZATION OF SELECT2
    // =======================================================
    $(".js-select2-custom").each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });

    // INITIALIZATION OF DATATABLES
    // =======================================================
    var datatable = $.HSCore.components.HSDatatables.init($("#datatable"), {
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

    $("#toggleColumn_name").change(function(e) {
      datatable.columns(1).visible(e.target.checked);
    });

    $("#toggleColumn_email").change(function(e) {
      datatable.columns(2).visible(e.target.checked);
    });

    datatable.columns(3).visible(false);

    $("#toggleColumn_phone").change(function(e) {
      datatable.columns(3).visible(e.target.checked);
    });

    $("#toggleColumn_country").change(function(e) {
      datatable.columns(4).visible(e.target.checked);
    });

    datatable.columns(5).visible(false);

    $("#toggleColumn_account_status").change(function(e) {
      datatable.columns(5).visible(e.target.checked);
    });

    $("#toggleColumn_orders").change(function(e) {
      datatable.columns(6).visible(e.target.checked);
    });

    $("#toggleColumn_total_spent").change(function(e) {
      datatable.columns(7).visible(e.target.checked);
    });

    datatable.columns(8).visible(false);

    $("#toggleColumn_last_activity").change(function(e) {
      datatable.columns(8).visible(e.target.checked);
    });

    // INITIALIZATION OF MODAL ON PAGE LOAD
    // =======================================================
    $("#customersGuideModal").modal("show");
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