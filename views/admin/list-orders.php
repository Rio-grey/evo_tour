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
            <div class="col-sm">
              <h1 class="page-header-title">
                Orders <span class="badge badge-soft-dark ml-2"><?= count($all_orders) ?></span>
              </h1>

              <div class="mt-2">
                <a
                  class="text-body mr-3"
                  href="javascript:;"
                  data-toggle="modal"
                  data-target="#exportOrdersModal"
                >
                  <i class="tio-download-to mr-1"></i> Export
                </a>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a
                    class="js-hs-unfold-invoker text-body"
                    href="javascript:;"
                    data-hs-unfold-options='{
                      "target": "#moreOptionsDropdown",
                      "type": "css-animation"
                    }'
                  >
                    More options <i class="tio-chevron-down"></i>
                  </a>

                  <div
                    id="moreOptionsDropdown"
                    class="hs-unfold-content dropdown-unfold dropdown-menu mt-1"
                  >
                    <a class="dropdown-item" href="#">
                      <i class="tio-folder-add dropdown-item-icon"></i> New
                      order
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-folder dropdown-item-icon"></i> New order -
                      Development
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-folder dropdown-item-icon"></i> New order -
                      Staging
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
            </div>
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
                <a class="nav-link active" href="#">All orders</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link disabled"
                  href="#"
                  tabindex="-1"
                  aria-disabled="true"
                  >Open</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link disabled"
                  href="#"
                  tabindex="-1"
                  aria-disabled="true"
                  >Unfulfilled</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link disabled"
                  href="#"
                  tabindex="-1"
                  aria-disabled="true"
                  >Unpaid</a
                >
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
          <!-- Header -->
          <div class="card-header">
            <div
              class="row justify-content-between align-items-center flex-grow-1"
            >
              <div class="col-lg-6 mb-3 mb-lg-0">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input
                      id="datatableSearch"
                      type="search"
                      class="form-control"
                      placeholder="Search orders"
                      aria-label="Search orders"
                    />
                  </div>
                  <!-- End Search -->
                </form>
              </div>

              <div class="col-lg-6">
                <div
                  class="d-sm-flex justify-content-sm-end align-items-sm-center"
                >
                  <!-- Datatable Info -->
                  <div
                    id="datatableCounterInfo"
                    class="mr-2 mb-2 mb-sm-0"
                    style="display: none"
                  >
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a
                        class="btn btn-sm btn-outline-danger"
                        href="javascript:;"
                      >
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->

                  <!-- Unfold -->
                  <div class="hs-unfold mr-2">
                    <a
                      class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle"
                      href="javascript:;"
                      data-hs-unfold-options='{
                        "target": "#usersExportDropdown",
                        "type": "css-animation"
                      }'
                    >
                      <i class="tio-download-to mr-1"></i> Export
                    </a>

                    <div
                      id="usersExportDropdown"
                      class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right"
                    >
                      <span class="dropdown-header">Options</span>
                      <a
                        id="export-copy"
                        class="dropdown-item"
                        href="javascript:;"
                      >
                        <img
                          class="avatar avatar-xss avatar-4by3 mr-2"
                          src="views\admin\assets\svg\illustrations\copy.svg"
                          alt="Image Description"
                        />
                        Copy
                      </a>
                      <a
                        id="export-print"
                        class="dropdown-item"
                        href="javascript:;"
                      >
                        <img
                          class="avatar avatar-xss avatar-4by3 mr-2"
                          src="views\admin\assets\svg\illustrations\print.svg"
                          alt="Image Description"
                        />
                        Print
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Download options</span>
                      <a
                        id="export-excel"
                        class="dropdown-item"
                        href="javascript:;"
                      >
                        <img
                          class="avatar avatar-xss avatar-4by3 mr-2"
                          src="views\admin\assets\svg\brands\excel.svg"
                          alt="Image Description"
                        />
                        Excel
                      </a>
                      <a
                        id="export-csv"
                        class="dropdown-item"
                        href="javascript:;"
                      >
                        <img
                          class="avatar avatar-xss avatar-4by3 mr-2"
                          src="views\admin\assets\svg\components\placeholder-csv-format.svg"
                          alt="Image Description"
                        />
                        .CSV
                      </a>
                      <a
                        id="export-pdf"
                        class="dropdown-item"
                        href="javascript:;"
                      >
                        <img
                          class="avatar avatar-xss avatar-4by3 mr-2"
                          src="views\admin\assets\svg\brands\pdf.svg"
                          alt="Image Description"
                        />
                        PDF
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a
                      class="js-hs-unfold-invoker btn btn-sm btn-white"
                      href="javascript:;"
                      data-hs-unfold-options='{
                         "target": "#showHideDropdown",
                         "type": "css-animation"
                       }'
                    >
                      <i class="tio-table mr-1"></i> Columns
                      <span class="badge badge-soft-dark rounded-circle ml-1"
                        >7</span
                      >
                    </a>

                    <div
                      id="showHideDropdown"
                      class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card"
                      style="width: 15rem"
                    >
                      <div class="card card-sm">
                        <div class="card-body">
                          <div
                            class="d-flex justify-content-between align-items-center mb-3"
                          >
                            <span class="mr-2">Order</span>

                            <!-- Checkbox Switch -->
                            <label
                              class="toggle-switch toggle-switch-sm"
                              for="toggleColumn_order"
                            >
                              <input
                                type="checkbox"
                                class="toggle-switch-input"
                                id="toggleColumn_order"
                                checked=""
                              />
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div
                            class="d-flex justify-content-between align-items-center mb-3"
                          >
                            <span class="mr-2">Date</span>

                            <!-- Checkbox Switch -->
                            <label
                              class="toggle-switch toggle-switch-sm"
                              for="toggleColumn_date"
                            >
                              <input
                                type="checkbox"
                                class="toggle-switch-input"
                                id="toggleColumn_date"
                                checked=""
                              />
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div
                            class="d-flex justify-content-between align-items-center mb-3"
                          >
                            <span class="mr-2">Customer</span>

                            <!-- Checkbox Switch -->
                            <label
                              class="toggle-switch toggle-switch-sm"
                              for="toggleColumn_customer"
                            >
                              <input
                                type="checkbox"
                                class="toggle-switch-input"
                                id="toggleColumn_customer"
                                checked=""
                              />
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div
                            class="d-flex justify-content-between align-items-center mb-3"
                          >
                            <span class="mr-2">Payment status</span>

                            <!-- Checkbox Switch -->
                            <label
                              class="toggle-switch toggle-switch-sm"
                              for="toggleColumn_payment_status"
                            >
                              <input
                                type="checkbox"
                                class="toggle-switch-input"
                                id="toggleColumn_payment_status"
                                checked=""
                              />
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div
                            class="d-flex justify-content-between align-items-center mb-3"
                          >
                            <span class="mr-2">Fulfillment status</span>

                            <!-- Checkbox Switch -->
                            <label
                              class="toggle-switch toggle-switch-sm"
                              for="toggleColumn_fulfillment_status"
                            >
                              <input
                                type="checkbox"
                                class="toggle-switch-input"
                                id="toggleColumn_fulfillment_status"
                              />
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div
                            class="d-flex justify-content-between align-items-center mb-3"
                          >
                            <span class="mr-2">Payment method</span>

                            <!-- Checkbox Switch -->
                            <label
                              class="toggle-switch toggle-switch-sm"
                              for="toggleColumn_payment_method"
                            >
                              <input
                                type="checkbox"
                                class="toggle-switch-input"
                                id="toggleColumn_payment_method"
                                checked=""
                              />
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div
                            class="d-flex justify-content-between align-items-center mb-3"
                          >
                            <span class="mr-2">Total</span>

                            <!-- Checkbox Switch -->
                            <label
                              class="toggle-switch toggle-switch-sm"
                              for="toggleColumn_total"
                            >
                              <input
                                type="checkbox"
                                class="toggle-switch-input"
                                id="toggleColumn_total"
                                checked=""
                              />
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <span class="mr-2">Actions</span>

                            <!-- Checkbox Switch -->
                            <label
                              class="toggle-switch toggle-switch-sm"
                              for="toggleColumn_actions"
                            >
                              <input
                                type="checkbox"
                                class="toggle-switch-input"
                                id="toggleColumn_actions"
                                checked=""
                              />
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
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table
              id="datatable"
              class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
              style="width: 100%"
              data-hs-datatables-options='{
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
                    "pageLength": 12,
                    "isResponsive": false,
                    "isShowPaging": false,
                    "pagination": "datatablePagination"
                  }'
            >
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input
                        id="datatableCheckAll"
                        type="checkbox"
                        class="custom-control-input"
                      />
                      <label
                        class="custom-control-label"
                        for="datatableCheckAll"
                      ></label>
                    </div>
                  </th>
                  <th class="table-column-pl-0">Order</th>
                  <th>Date</th>
                  <th>Customer</th>
                  <th>Payment status</th>
                  <th>Fulfillment status</th>
                  <th>Payment method</th>
                  <th>Total</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach($all_orders as $order) : ?>
                  <tr>
                    <td class="table-column-pr-0">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="ordersCheck1"
                        />
                        <label
                          class="custom-control-label"
                          for="ordersCheck1"
                        ></label>
                      </div>
                    </td>
                    <td class="table-column-pl-0">
                      <a href="ecommerce-order-details.html">#<?= $order['ma_dh'] ?></a>
                    </td>
                    <td><?= $order['ngay_dat_hang'] ?></td>
                    <td>
                      <a class="text-body" href="ecommerce-customer-details.html"
                        ><?= $order['name'] ?></a
                      >
                    </td>
                    <td>
                      <?php if($order['status'] == 3) : ?>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span><?= check_trang_thai_don_hang($order['status']) ?>
                        </span>
                      <?php elseif($order['status'] == 2) : ?>    
                        <span class="badge badge-soft-info">
                          <span class="legend-indicator bg-info"></span><?= check_trang_thai_don_hang($order['status']) ?>
                        </span>
                      <?php elseif($order['status'] == 1) : ?>    
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span><?= check_trang_thai_don_hang($order['status']) ?>
                        </span>
                      <?php elseif($order['status'] == 0) : ?>
                        <span class="badge badge-soft-danger">
                          <span class="legend-indicator bg-danger"></span><?= check_trang_thai_don_hang($order['status']) ?>
                        </span>
                      <?php endif ?>    
                    </td>
                    <td>
                      <span class="badge badge-soft-info">
                        <span class="legend-indicator bg-info"></span>Fulfilled
                      </span>
                      <!-- <span class="badge badge-soft-dark">
                        <span class="legend-indicator bg-dark"></span>Unfulfilled
                      </span> -->
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <img
                          class="avatar avatar-xss avatar-4by3 mr-2"
                          src="views\admin\assets\svg\brands\mastercard.svg"
                          alt="Image Description"
                        />
                        <span class="text-dark"
                          ><?= $order['pttt'] ?></span
                        >
                      </div>
                    </td>
                    <td><?= number_format($order['tong_tien_tour']) ?>₫</td>
                    <td>
                      <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-outline-primary" href="?ctr=update-orders&id_booking_detail=<?= $order['id_booking_detail'] ?>">
                          <i class="tio-edit"></i> Edit
                        </a>
                      </div>
                      <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" href="?ctr=delete-orders&id_booking_detail=<?= $order['id_booking_detail'] ?>">
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
            <div
              class="row justify-content-center justify-content-sm-between align-items-sm-center"
            >
              <div class="col-sm mb-2 mb-sm-0">
                <div
                  class="d-flex justify-content-center justify-content-sm-start align-items-center"
                >
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select
                    id="datatableEntries"
                    class="js-select2-custom"
                    data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'
                  >
                    <option value="12" selected="">12</option>
                    <option value="14">14</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div
                  class="d-flex justify-content-center justify-content-sm-end"
                >
                  <!-- Pagination -->
                  <nav
                    id="datatablePagination"
                    aria-label="Activity pagination"
                  ></nav>
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
                    <a
                      class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                      href="javascript:;"
                      data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'
                    >
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
    <div
      id="keyboardShortcutsSidebar"
      class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow"
    >
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Keyboard shortcuts</h4>

          <!-- Toggle Button -->
          <a
            class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2"
            href="javascript:;"
            data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'
          >
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <div
            class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5"
          >
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

          <div
            class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5"
          >
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

          <div
            class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5"
          >
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
                  <kbd class="d-inline-block mb-1"
                    ><i class="tio-arrow-large-upward-outlined"></i
                  ></kbd>
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
                  <kbd class="d-inline-block mb-1"
                    ><i
                      class="tio-arrow-large-downward-outlined font-size-sm"
                    ></i
                  ></kbd>
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

          <div
            class="list-group list-group-sm list-group-flush list-group-no-gutters"
          >
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
    <div
      id="activitySidebar"
      class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow"
    >
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Activity stream</h4>

          <!-- Toggle Button -->
          <a
            class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2"
            href="javascript:;"
            data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'
          >
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
                  <img
                    class="step-avatar-img"
                    src="views\admin\assets\img\160x160\img9.jpg"
                    alt="Image Description"
                  />
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Iana Robinson</h5>

                  <p class="font-size-sm mb-1">
                    Added 2 files to task
                    <a class="text-uppercase" href="#"
                      ><i class="tio-folder-bookmarked"></i> Fd-7</a
                    >
                  </p>

                  <ul class="list-group list-group-sm">
                    <!-- List Item -->
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col-6">
                          <div class="media">
                            <span class="mt-1 mr-2">
                              <img
                                class="avatar avatar-xs"
                                src="views\admin\assets\svg\brands\excel.svg"
                                alt="Image Description"
                              />
                            </span>
                            <div class="media-body text-truncate">
                              <span
                                class="d-block font-size-sm text-dark text-truncate"
                                title="weekly-reports.xls"
                                >weekly-reports.xls</span
                              >
                              <small class="d-block text-muted">12kb</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="media">
                            <span class="mt-1 mr-2">
                              <img
                                class="avatar avatar-xs"
                                src="views\admin\assets\svg\brands\word.svg"
                                alt="Image Description"
                              />
                            </span>
                            <div class="media-body text-truncate">
                              <span
                                class="d-block font-size-sm text-dark text-truncate"
                                title="weekly-reports.xls"
                                >weekly-reports.xls</span
                              >
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
                    <a class="text-uppercase" href="#"
                      ><i class="tio-folder-bookmarked"></i> Fr-6</a
                    >
                    as
                    <span class="badge badge-soft-success badge-pill"
                      ><span class="legend-indicator bg-success"></span
                      >"Completed"</span
                    >
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
                  <img
                    class="step-avatar-img"
                    src="views\admin\assets\img\160x160\img3.jpg"
                    alt="Image Description"
                  />
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
                          <img
                            class="img-fluid rounded ie-sidebar-activity-img"
                            src="views\admin\assets\svg\illustrations\card-1.svg"
                            alt="Image Description"
                          />
                        </div>
                        <div class="col">
                          <img
                            class="img-fluid rounded ie-sidebar-activity-img"
                            src="views\admin\assets\svg\illustrations\card-2.svg"
                            alt="Image Description"
                          />
                        </div>
                        <div class="col">
                          <img
                            class="img-fluid rounded ie-sidebar-activity-img"
                            src="views\admin\assets\svg\illustrations\card-3.svg"
                            alt="Image Description"
                          />
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
                  <img
                    class="step-avatar-img"
                    src="views\admin\assets\img\160x160\img7.jpg"
                    alt="Image Description"
                  />
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Rachel King</h5>

                  <p class="font-size-sm mb-1">
                    Marked
                    <a class="text-uppercase" href="#"
                      ><i class="tio-folder-bookmarked"></i> Fr-3</a
                    >
                    as
                    <span class="badge badge-soft-success badge-pill"
                      ><span class="legend-indicator bg-success"></span
                      >"Completed"</span
                    >
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
                  <img
                    class="step-avatar-img"
                    src="views\admin\assets\img\160x160\img5.jpg"
                    alt="Image Description"
                  />
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
                    <a class="text-uppercase" href="#"
                      ><i class="tio-folder-bookmarked"></i> Fr-3</a
                    >
                    as
                    <span class="badge badge-soft-primary badge-pill"
                      ><span class="legend-indicator bg-primary"></span>"In
                      progress"</span
                    >
                  </p>

                  <small class="text-muted text-uppercase">Feb 10</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->
          </ul>
          <!-- End Step -->

          <a class="btn btn-block btn-white" href="javascript:;"
            >View all <i class="tio-chevron-right"></i
          ></a>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <div
      class="modal fade"
      id="welcomeMessageModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-close">
            <button
              type="button"
              class="btn btn-icon btn-sm btn-ghost-secondary"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body p-sm-5">
            <div class="text-center">
              <div class="w-75 w-sm-50 mx-auto mb-4">
                <img
                  class="img-fluid"
                  src="views\admin\assets\svg\illustrations\graphs.svg"
                  alt="Image Description"
                />
              </div>

              <h4 class="h1">Welcome to Front</h4>

              <p>We're happy to see you in our community.</p>
            </div>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer d-block text-center py-sm-5">
            <small class="text-cap mb-4"
              >Trusted by the world's best teams</small
            >

            <div class="w-85 mx-auto">
              <div class="row justify-content-between">
                <div class="col">
                  <img
                    class="img-fluid ie-welcome-brands"
                    src="views\admin\assets\svg\brands\gitlab-gray.svg"
                    alt="Image Description"
                  />
                </div>
                <div class="col">
                  <img
                    class="img-fluid ie-welcome-brands"
                    src="views\admin\assets\svg\brands\fitbit-gray.svg"
                    alt="Image Description"
                  />
                </div>
                <div class="col">
                  <img
                    class="img-fluid ie-welcome-brands"
                    src="views\admin\assets\svg\brands\flow-xo-gray.svg"
                    alt="Image Description"
                  />
                </div>
                <div class="col">
                  <img
                    class="img-fluid ie-welcome-brands"
                    src="views\admin\assets\svg\brands\layar-gray.svg"
                    alt="Image Description"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->

    <!-- Export Orders Modal -->
    <div
      class="modal fade"
      id="exportOrdersModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exportOrdersModalTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="exportOrdersModalTitle" class="modal-title">
              Export orders
            </h4>

            <button
              type="button"
              class="btn btn-icon btn-sm btn-ghost-secondary"
              data-dismiss="modal"
              aria-label="Close"
            >
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
                <input
                  type="radio"
                  id="ordersRadio1"
                  name="ordersRadio"
                  class="custom-control-input"
                  checked=""
                />
                <label class="custom-control-label" for="ordersRadio1"
                  >Current page</label
                >
              </div>
              <div class="custom-control custom-radio mb-2">
                <input
                  type="radio"
                  id="ordersRadio2"
                  name="ordersRadio"
                  class="custom-control-input"
                />
                <label class="custom-control-label" for="ordersRadio2"
                  >All orders</label
                >
              </div>
              <div class="custom-control custom-radio mb-2">
                <input
                  type="radio"
                  id="ordersRadio3"
                  name="ordersRadio"
                  class="custom-control-input"
                  disabled=""
                />
                <label class="custom-control-label" for="ordersRadio3"
                  >Selected: 20 orders</label
                >
              </div>
              <div class="custom-control custom-radio">
                <input
                  type="radio"
                  id="ordersRadio4"
                  name="ordersRadio"
                  class="custom-control-input"
                />
                <label class="custom-control-label" for="ordersRadio4"
                  >Order by date</label
                >
              </div>
              <!-- End Custom Checkbox -->
            </div>
            <!-- End Form Group -->

            <label class="input-label">Export as</label>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-radio mb-2">
              <input
                type="radio"
                id="orderAsRadio1"
                name="orderAsRadio"
                class="custom-control-input"
                checked=""
              />
              <label class="custom-control-label" for="orderAsRadio1"
                >CSV for Excel, Numbers, or other spreadsheet programs</label
              >
            </div>
            <div class="custom-control custom-radio">
              <input
                type="radio"
                id="orderAsRadio2"
                name="orderAsRadio"
                class="custom-control-input"
              />
              <label class="custom-control-label" for="orderAsRadio2"
                >Plain CSV file</label
              >
            </div>
            <!-- End Custom Checkbox -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-white mr-2"
              data-dismiss="modal"
              aria-label="Close"
            >
              Cancel
            </button>
            <button type="button" class="btn btn-primary">Export orders</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Export Orders Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Implementing Plugins -->
    <script src="views\admin\assets\js\vendor.min.js"></script>

    <!-- JS Front -->
    <script src="views\admin\assets\js\theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on("ready", function () {
        // ONLY DEV
        // =======================================================

        if (window.localStorage.getItem("hs-builder-popover") === null) {
          $("#builderPopover")
            .popover("show")
            .on("shown.bs.popover", function () {
              $(".popover").last().addClass("popover-dark");
            });

          $(document).on("click", "#closeBuilderPopover", function () {
            window.localStorage.setItem("hs-builder-popover", true);
            $("#builderPopover").popover("dispose");
          });
        } else {
          $("#builderPopover").on("show.bs.popover", function () {
            return false;
          });
        }

        // END ONLY DEV
        // =======================================================

        // BUILDER TOGGLE INVOKER
        // =======================================================
        $(".js-navbar-vertical-aside-toggle-invoker").click(function () {
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
        $(".js-nav-tooltip-link").tooltip({ boundary: "window" });

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function (e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        // INITIALIZATION OF UNFOLD
        // =======================================================
        $(".js-hs-unfold-invoker").each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $(".js-form-search").each(function () {
          new HSFormSearch($(this)).init();
        });

        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        $(".js-nav-scroller").each(function () {
          new HsNavScroller($(this)).init();
        });

        // INITIALIZATION OF SELECT2
        // =======================================================
        $(".js-select2-custom").each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        // INITIALIZATION OF DATATABLES
        // =======================================================
        var datatable = $.HSCore.components.HSDatatables.init($("#datatable"), {
          dom: "Bfrtip",
          buttons: [
            {
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
            zeroRecords:
              '<div class="text-center p-4">' +
              '<img class="mb-3" src="views/admin/assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
              '<p class="mb-0">No data to show</p>' +
              "</div>",
          },
        });

        $("#export-copy").click(function () {
          datatable.button(".buttons-copy").trigger();
        });

        $("#export-excel").click(function () {
          datatable.button(".buttons-excel").trigger();
        });

        $("#export-csv").click(function () {
          datatable.button(".buttons-csv").trigger();
        });

        $("#export-pdf").click(function () {
          datatable.button(".buttons-pdf").trigger();
        });

        $("#export-print").click(function () {
          datatable.button(".buttons-print").trigger();
        });

        $("#datatableSearch").on("mouseup", function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function () {
            var newValue = $input.val();

            if (newValue == "") {
              // Gotcha
              datatable.search("").draw();
            }
          }, 1);
        });

        $("#toggleColumn_order").change(function (e) {
          datatable.columns(1).visible(e.target.checked);
        });

        $("#toggleColumn_date").change(function (e) {
          datatable.columns(2).visible(e.target.checked);
        });

        $("#toggleColumn_customer").change(function (e) {
          datatable.columns(3).visible(e.target.checked);
        });

        $("#toggleColumn_payment_status").change(function (e) {
          datatable.columns(4).visible(e.target.checked);
        });

        datatable.columns(5).visible(false);

        $("#toggleColumn_fulfillment_status").change(function (e) {
          datatable.columns(5).visible(e.target.checked);
        });

        $("#toggleColumn_payment_method").change(function (e) {
          datatable.columns(6).visible(e.target.checked);
        });

        $("#toggleColumn_total").change(function (e) {
          datatable.columns(7).visible(e.target.checked);
        });

        $("#toggleColumn_actions").change(function (e) {
          datatable.columns(8).visible(e.target.checked);
        });

        // INITIALIZATION OF TAGIFY
        // =======================================================
        $(".js-tagify").each(function () {
          var tagify = $.HSCore.components.HSTagify.init($(this));
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
