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
                    <a class="breadcrumb-link" href="ecommerce-customers.html"
                      >Customers</a
                    >
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Customer details
                  </li>
                </ol>
              </nav>

              <h1 class="page-header-title">Anne Richard</h1>
            </div>

            <div class="col-sm-auto">
              <a
                class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1"
                href="#"
                data-toggle="tooltip"
                data-placement="top"
                title="Previous customer"
              >
                <i class="tio-arrow-backward"></i>
              </a>
              <a
                class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle"
                href="#"
                data-toggle="tooltip"
                data-placement="top"
                title="Next customer"
              >
                <i class="tio-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- End Page Header -->

        <div class="row">
          <div class="col-lg-8">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Body -->
              <div class="card-body">
                <!-- Media -->
                <div class="d-flex align-items-center mb-5">
                  <div class="avatar avatar-lg avatar-circle">
                    <img
                      class="avatar-img"
                      src="views\admin\assets\img\160x160\img9.jpg"
                      alt="Image Description"
                    />
                  </div>

                  <div class="mx-3">
                    <div class="d-flex mb-1">
                      <h3 class="mb-0 mr-3">Anne Richard</h3>

                      <!-- Unfold -->
                      <div class="hs-unfold">
                        <a
                          class="js-hs-unfold-invoker btn btn-icon btn-xs btn-white rounded-circle"
                          href="javascript:;"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Edit"
                          data-hs-unfold-options='{
                             "target": "#editDropdown",
                             "type": "css-animation"
                           }'
                        >
                          <i class="tio-edit"></i>
                        </a>

                        <div
                          id="editDropdown"
                          class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-card mt-1"
                          style="min-width: 20rem"
                        >
                          <!-- Card -->
                          <div class="card">
                            <div class="card-body">
                              <div class="form-row">
                                <div class="col-sm-6">
                                  <label
                                    for="firstNameLabel"
                                    class="input-label"
                                    >First name</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    name="firstName"
                                    id="firstNameLabel"
                                    placeholder="Clarice"
                                    aria-label="Clarice"
                                    value="Anna"
                                  />
                                </div>

                                <div class="col-sm-6">
                                  <label for="lastNameLabel" class="input-label"
                                    >Last name</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    name="lastName"
                                    id="lastNameLabel"
                                    placeholder="Boone"
                                    aria-label="Boone"
                                    value="Richard"
                                  />
                                </div>
                              </div>
                              <!-- End Row -->

                              <div class="d-flex justify-content-end mt-3">
                                <button
                                  type="button"
                                  class="btn btn-sm btn-white mr-2"
                                >
                                  Cancel
                                </button>
                                <button
                                  type="button"
                                  class="btn btn-sm btn-primary"
                                >
                                  Save
                                </button>
                              </div>
                            </div>
                          </div>
                          <!-- End Body -->
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>

                    <span class="font-size-sm">Customer for 3 months</span>
                  </div>

                  <div class="d-none d-sm-inline-block ml-auto text-right">
                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a
                        class="js-hs-unfold-invoker btn btn-sm btn-white"
                        href="javascript:;"
                        data-hs-unfold-options='{
                           "target": "#actionsDropdown",
                           "type": "css-animation"
                         }'
                      >
                        Actions <i class="tio-chevron-down"></i>
                      </a>

                      <div
                        id="actionsDropdown"
                        class="hs-unfold-content dropdown-unfold dropdown-menu mt-1"
                      >
                        <a class="dropdown-item" href="#">
                          <i class="tio-email-outlined dropdown-item-icon"></i>
                          Email
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-call dropdown-item-icon"></i> Call
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-sync dropdown-item-icon"></i> Merge
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">
                          <i
                            class="tio-delete-outlined dropdown-item-icon text-danger"
                          ></i>
                          Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </div>
                <!-- End Media -->

                <label class="input-label">Customer note</label>

                <!-- Quill -->
                <div class="quill-custom">
                  <div id="toolbar-container">
                    <ul class="list-inline ql-toolbar-list">
                      <li class="list-inline-item">
                        <button class="ql-bold"></button>
                      </li>
                      <li class="list-inline-item">
                        <button class="ql-italic"></button>
                      </li>
                      <li class="list-inline-item">
                        <button class="ql-underline"></button>
                      </li>
                      <li class="list-inline-item">
                        <button class="ql-strike"></button>
                      </li>
                      <li class="list-inline-item">
                        <button class="ql-link"></button>
                      </li>
                      <li class="list-inline-item">
                        <button class="ql-image"></button>
                      </li>
                      <li class="list-inline-item">
                        <button class="ql-blockquote"></button>
                      </li>
                      <li class="list-inline-item">
                        <button class="ql-code"></button>
                      </li>
                      <li class="list-inline-item">
                        <button class="ql-list" value="bullet"></button>
                      </li>
                    </ul>
                  </div>

                  <div
                    class="js-quill"
                    style="min-height: 10rem"
                    data-hs-quill-options='{
                          "placeholder": "Start typing to leave a note...",
                          "toolbarBottom": true,
                          "modules": {
                            "toolbar": "#toolbar-container"
                          }
                         }'
                  ></div>
                </div>
                <!-- End Quill -->
              </div>
              <!-- Body -->

              <!-- Footer -->
              <div class="card-footer">
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-white mr-2">
                    Discard
                  </button>
                  <button type="submit" class="btn btn-primary">
                    Save changes
                  </button>
                </div>
              </div>
              <!-- End Footer -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <div
                  class="row justify-content-between align-items-center flex-grow-1"
                >
                  <div class="col-sm mb-3 mb-sm-0">
                    <h4 class="card-header-title">Orders placed</h4>
                  </div>

                  <div class="col-sm-auto">
                    <!-- Nav -->
                    <ul
                      class="js-tabs-to-dropdown nav nav-segment nav-fill nav-sm-down-break"
                      data-hs-transform-tabs-to-btn-options='{
                          "transformResolution": "sm",
                          "btnClassNames": "btn btn-block btn-white dropdown-toggle justify-content-center"
                        }'
                    >
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

                    <!-- Datatable Info -->
                    <div id="datatableCounterInfo" style="display: none">
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
                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Input Group -->
                <div class="input-group input-group-merge">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="tio-search"></i>
                    </span>
                  </div>

                  <input
                    id="datatableSearch"
                    type="search"
                    class="form-control"
                    placeholder="Search orders"
                    aria-label="Search orders"
                  />
                </div>
                <!-- End Input Group -->
              </div>
              <!-- End Body -->

              <!-- Table -->
              <div class="table-responsive datatable-custom">
                <table
                  id="datatable"
                  class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                  data-hs-datatables-options='{
                         "columnDefs": [{
                            "targets": [0, 5],
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
                      <th>Payment status</th>
                      <th>Total</th>
                      <th>Invoice</th>
                    </tr>
                  </thead>

                  <tbody>
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
                        <a href="ecommerce-order-details.html">#35463</a>
                      </td>
                      <td>Aug 17, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$256.39</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck2"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck2"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#23513</a>
                      </td>
                      <td>Aug 17, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$2,125.00</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck3"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck3"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#62311</a>
                      </td>
                      <td>Aug 03, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$532.99</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck4"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck4"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#12453</a>
                      </td>
                      <td>July 29, 2020</td>
                      <td>
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span
                          >Pending
                        </span>
                      </td>
                      <td>$1,035.02</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck5"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck5"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#84223</a>
                      </td>
                      <td>July 11, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$68.53</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck6"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck6"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#46542</a>
                      </td>
                      <td>July 04, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$100.00</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck7"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck7"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a
                          class="text-danger"
                          href="ecommerce-order-details.html"
                          >#35378</a
                        >
                        <i class="tio-warning text-warning"></i>
                      </td>
                      <td>June 27, 2020</td>
                      <td>
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span
                          >Pending
                        </span>
                      </td>
                      <td class="text-danger">$89.46</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck8"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck8"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a
                          class="text-danger"
                          href="ecommerce-order-details.html"
                          >#24562</a
                        >
                        <i class="tio-warning text-warning"></i>
                      </td>
                      <td>June 15, 2020</td>
                      <td>
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span
                          >Pending
                        </span>
                      </td>
                      <td class="text-danger">$3,535.46</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck9"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck9"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#78531</a>
                      </td>
                      <td>June 12, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$23.89</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck10"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck10"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#34634</a>
                      </td>
                      <td>June 02, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$77.00</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck11"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck11"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a
                          class="text-danger"
                          href="ecommerce-order-details.html"
                          >#93817</a
                        >
                        <i class="tio-warning text-warning"></i>
                      </td>
                      <td>May 30, 2020</td>
                      <td>
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span
                          >Pending
                        </span>
                      </td>
                      <td class="text-danger">$77.00</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck12"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck12"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#43113</a>
                      </td>
                      <td>May 25, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$1,421.47</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td class="table-column-pr-0">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="ordersCheck13"
                          />
                          <label
                            class="custom-control-label"
                            for="ordersCheck13"
                          ></label>
                        </div>
                      </td>
                      <td class="table-column-pl-0">
                        <a href="ecommerce-order-details.html">#12412</a>
                      </td>
                      <td>May 16, 2020</td>
                      <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                      </td>
                      <td>$45.00</td>
                      <td>
                        <a
                          class="btn btn-sm btn-white"
                          href="javascript:;"
                          data-toggle="modal"
                          data-target="#invoiceReceiptModal"
                        >
                          <i class="tio-receipt-outlined mr-1"></i> Invoice
                        </a>
                      </td>
                    </tr>
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

          <div class="col-lg-4">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Body -->
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <h5>Contact info</h5>
                  <a class="link" href="javascript:;">Edit</a>
                </div>

                <ul class="list-unstyled list-unstyled-py-2">
                  <li>
                    <i class="tio-online mr-2"></i>
                    anne@example.com
                  </li>
                  <li>
                    <i class="tio-android-phone-vs mr-2"></i>
                    +1 (609) 972-22-22
                  </li>
                </ul>

                <hr />

                <div class="d-flex justify-content-between align-items-center">
                  <h5>Shipping address</h5>
                  <a class="link" href="javascript:;">Edit</a>
                </div>

                <!-- Leaflet (Map) -->
                <div
                  id="map"
                  class="leaflet-custom rounded mt-1 mb-3"
                  style="min-height: 10rem"
                  data-hs-leaflet-options='{
                       "map": {
                         "scrollWheelZoom": false,
                         "coords": [37.4040344, -122.0289704]
                       },
                       "marker": [
                         {
                           "coords": [37.4040344, -122.0289704],
                           "icon": {
                             "iconUrl": "./assets/svg/components/map-pin.svg",
                             "iconSize": [50, 45]
                           },
                           "popup": {
                             "text": "153 Williamson Plaza, Maggieberg"
                           }
                         }
                       ]
                      }'
                ></div>
                <!-- End Leaflet (Map) -->

                <span class="d-block">
                  45 Roker Terrace<br />
                  Latheronwheel<br />
                  KW5 8NW, London<br />
                  Việt Nam
                  <img
                    class="avatar avatar-xss avatar-circle ml-1"
                    src="views\admin\assets\vendor\flag-icon-css\flags\1x1\vn.svg"
                    alt="Viet Nam Flag"
                  />
                </span>

                <hr />
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Row -->

        <div class="d-lg-none">
          <button type="button" class="btn btn-danger">Delete customer</button>
        </div>
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

    <!-- Invoice Modal -->
    <div
      class="modal fade"
      id="invoiceReceiptModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-top-cover bg-dark text-center">
            <figure
              class="position-absolute right-0 bottom-0 left-0 ie-modal-curved-shape"
            >
              <svg
                preserveaspectratio="none"
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                viewbox="0 0 1920 100.1"
                style="margin-bottom: -2px"
              >
                <path
                  fill="#fff"
                  d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"
                ></path>
              </svg>
            </figure>

            <div class="modal-close">
              <button
                type="button"
                class="btn btn-icon btn-sm btn-ghost-light"
                data-dismiss="modal"
                aria-label="Close"
              >
                <i class="tio-clear tio-lg"></i>
              </button>
            </div>
          </div>
          <!-- End Header -->

          <div class="modal-top-cover-icon">
            <span
              class="icon icon-lg icon-light icon-circle icon-centered shadow-soft"
            >
              <i class="tio-receipt-outlined"></i>
            </span>
          </div>

          <!-- Body -->
          <div class="modal-body pt-3 pb-sm-5 px-sm-5">
            <div class="text-center mb-5">
              <h2 class="mb-1">Invoice from Front</h2>
              <span class="d-block">Invoice #3682303</span>
            </div>

            <div class="row mb-6">
              <div class="col-md-4 mb-3">
                <small class="text-cap">Amount paid:</small>
                <span class="text-dark">$316.8</span>
              </div>

              <div class="col-md-4 mb-3">
                <small class="text-cap">Date paid:</small>
                <span class="text-dark">April 22, 2020</span>
              </div>

              <div class="col-md-4 mb-3">
                <small class="text-cap">Payment method:</small>
                <div class="d-flex align-items-center">
                  <img
                    class="avatar avatar-xss avatar-4by3 mr-2"
                    src="views\admin\assets\svg\brands\mastercard.svg"
                    alt="Image Description"
                  />
                  <span class="text-dark">&bull;&bull;&bull;&bull; 4242</span>
                </div>
              </div>
            </div>

            <small class="text-cap mb-2">Summary</small>

            <ul class="list-group mb-4">
              <li class="list-group-item text-dark">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Payment to Front</span>
                  <span>$264.00</span>
                </div>
              </li>

              <li class="list-group-item text-dark">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Tax fee</span>
                  <span>$52.8</span>
                </div>
              </li>

              <li class="list-group-item list-group-item-light text-dark">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="font-weight-bold">Amount paid</span>
                  <span class="font-weight-bold">$316.8</span>
                </div>
              </li>
            </ul>

            <div class="d-flex justify-content-end">
              <a class="btn btn-sm btn-white mr-2" href="#"
                ><i class="tio-download-to mr-1"></i> PDF</a
              >
              <a class="btn btn-sm btn-white" href="#"
                ><i class="tio-print mr-1"></i> Print Details</a
              >
            </div>

            <hr class="my-5" />

            <p class="modal-footer-text">
              If you have any questions, contact us at
              <a href="mailto:example@gmail.com">example@gmail.com</a> or call
              at <a href="#">+1 898 34-5492</a>
            </p>
          </div>
          <!-- End Body -->
        </div>
      </div>
    </div>
    <!-- End Invoice Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Implementing Plugins -->
    <script src="views\admin\assets\js\vendor.min.js"></script>
    <script src="views\admin\assets\vendor\chart.js\dist\Chart.min.js"></script>
    <script src="views\admin\assets\vendor\chartjs-chart-matrix\dist\chartjs-chart-matrix.min.js"></script>

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

        // INITIALIZATION OF TABS
        // =======================================================
        $(".js-tabs-to-dropdown").each(function () {
          var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
        });

        // INITIALIZATION OF SELECT2
        // =======================================================
        $(".js-select2-custom").each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        var quill = $.HSCore.components.HSQuill.init(".js-quill");
        var quill = $.HSCore.components.HSQuill.init(".js-quill-step");

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
            zeroRecords:
              '<div class="text-center p-4">' +
              '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
              '<p class="mb-0">No data to show</p>' +
              "</div>",
          },
        });

        $(".js-datatable-filter").on("change", function () {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data("target-column-index");

          datatable.column(targetColumnIndex).search(elVal).draw();
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

        // INITIALIZATION OF CHARTJS
        // =======================================================
        $(".js-chart").each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });

        // INITIALIZATION OF LEAFLET
        // =======================================================
        $("#map").each(function () {
          var leaflet = $.HSCore.components.HSLeaflet.init($(this)[0]);

          L.tileLayer(
            "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
            {
              id: "mapbox/light-v9",
            }
          ).addTo(leaflet);
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent))
        document.write(
          '<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>'
        );
    </script>
  </body>
</html>
