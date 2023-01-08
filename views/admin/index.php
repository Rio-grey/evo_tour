<?php include_once "views/admin/header_admin.php" ?>

<!-- ========== HEADER ========== -->

<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<!-- Navbar Vertical -->

<!-- End Navbar Vertical -->

<main id="content" role="main" class="main pointer-event">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-sm mb-2 mb-sm-0">
          <h1 class="page-header-title">Dashboard</h1>
        </div>

        <div class="col-sm-auto">
          <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal">
            <i class="tio-user-add mr-1"></i> Invite users
          </a>
        </div>
      </div>
    </div>
    <!-- End Page Header -->

    <!-- Stats -->
    <div class="row gx-2 gx-lg-3">
      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <!-- Card -->
        <a class="card card-hover-shadow h-100" href="#">
          <div class="card-body">
            <h6 class="card-subtitle">Total Users</h6>

            <div class="row align-items-center gx-2 mb-1">
              <div class="col-6">
                <span class="card-title h2">
                  <?php   
                    foreach ($demuser as $a) {
                      extract($a);
                    // var_dump($a);
                      echo $a; 
                    }
                  ?>
                </span>
              </div>

              <div class="col-6">
                <!-- Chart -->
                <div class="chartjs-custom" style="height: 3rem">
                  <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                  </canvas>
                </div>
                <!-- End Chart -->
              </div>
            </div>
            <!-- End Row -->

            <span class="badge badge-soft-success">
              <i class="tio-trending-up"></i> 12.5%
            </span>
            <span class="text-body font-size-sm ml-1">from 70,104</span>
          </div>
        </a>
        <!-- End Card -->
      </div>

      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <!-- Card -->
        <a class="card card-hover-shadow h-100" href="#">
          <div class="card-body">
            <h6 class="card-subtitle">Total tours</h6>

            <div class="row align-items-center gx-2 mb-1">
              <div class="col-6">
                <span class="card-title h2">
                  <?php 
                    foreach($demtour as $tour) {
                    extract($tour);
                      echo $tour;
                    }
                  ?>
                </span>
              </div>

              <div class="col-6">
                <!-- Chart -->
                <div class="chartjs-custom" style="height: 3rem">
                  <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                  </canvas>
                </div>
                <!-- End Chart -->
              </div>
            </div>
            <!-- End Row -->

            <span class="badge badge-soft-success">
              <i class="tio-trending-up"></i> 1.7%
            </span>
            <span class="text-body font-size-sm ml-1">from 29.1%</span>
          </div>
        </a>
        <!-- End Card -->
      </div>

      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <!-- Card -->
        <a class="card card-hover-shadow h-100" href="#">
          <div class="card-body">
            <h6 class="card-subtitle">Total Oders</h6>

            <div class="row align-items-center gx-2 mb-1">
              <div class="col-6">
                <span class="card-title h2">
                  <?php 
                    foreach($demorder as $orders) {
                    extract($orders);
                      echo $orders;
                    }
                  ?>
                </span>
              </div>

              <div class="col-6">
                <!-- Chart -->
                <div class="chartjs-custom" style="height: 3rem">
                  <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                  </canvas>
                </div>
                <!-- End Chart -->
              </div>
            </div>
            <!-- End Row -->

            <span class="badge badge-soft-danger">
              <i class="tio-trending-down"></i> 4.4%
            </span>
            <span class="text-body font-size-sm ml-1">from 61.2%</span>
          </div>
        </a>
        <!-- End Card -->
      </div>

      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <!-- Card -->
        <a class="card card-hover-shadow h-100" href="#">
          <div class="card-body">
            <h6 class="card-subtitle">Total Comment</h6>

            <div class="row align-items-center gx-2 mb-1">
              <div class="col-6">
                <span class="card-title h2">
                <?php 
                    foreach($demcomment as $comment) {
                    extract($comment);
                      echo $comment;
                    }
                  ?>
                </span>
              </div>

              <div class="col-6">
                <!-- Chart -->
                <div class="chartjs-custom" style="height: 3rem">
                  <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                  </canvas>
                </div>
                <!-- End Chart -->
              </div>
            </div>
            <!-- End Row -->

            <span class="badge badge-soft-secondary">0.0%</span>
            <span class="text-body font-size-sm ml-1">from 2,913</span>
          </div>
        </a>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Stats -->

    <div class="row gx-2 gx-lg-3">
      <div class="col-lg-5 mb-3 mb-lg-5">
        <!-- Card -->
        <div class="card h-100">
          <!-- Header -->
          <div class="card-header">
            <h5 class="card-header-title">
              Import data into Front Dashboard
            </h5>

            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                       "target": "#reportsOverviewDropdown2",
                       "type": "css-animation"
                     }'>
                <i class="tio-more-vertical"></i>
              </a>

              <div id="reportsOverviewDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                <span class="dropdown-header">Settings</span>

                <a class="dropdown-item" href="#">
                  <i class="tio-share dropdown-item-icon"></i> Share chart
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-download-to dropdown-item-icon"></i>
                  Download
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-alt dropdown-item-icon"></i> Connect other
                  apps
                </a>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header">Feedback</span>

                <a class="dropdown-item" href="#">
                  <i class="tio-chat-outlined dropdown-item-icon"></i>
                  Report
                </a>
              </div>
            </div>
            <!-- End Unfold -->
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <p>
              See and talk to your users and leads immediately by importing
              your data into the Front Dashboard platform.
            </p>

            <ul class="list-group list-group-flush list-group-no-gutters">
              <li class="list-group-item py-3">
                <h5 class="modal-title">Import users from:</h5>
              </li>

              <!-- List Group Item -->
              <li class="list-group-item py-3">
                <div class="media">
                  <div class="mt-1 mr-3">
                    <img class="avatar avatar-xs avatar-4by3" src="views\admin\assets\svg\brands\capsule.svg" alt="Image Description" />
                  </div>
                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <h5 class="mb-0">Capsule</h5>
                        <span class="d-block font-size-sm">Users</span>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                          Launch
                          <span class="d-none d-sm-inline-block">importer</span>
                          <i class="tio-open-in-new ml-1"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <!-- List Group Item -->
              <li class="list-group-item py-3">
                <div class="media">
                  <div class="mt-1 mr-3">
                    <img class="avatar avatar-xs avatar-4by3" src="views\admin\assets\svg\brands\mailchimp.svg" alt="Image Description" />
                  </div>
                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <h5 class="mb-0">Mailchimp</h5>
                        <span class="d-block font-size-sm">Users</span>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                          Launch
                          <span class="d-none d-sm-inline-block">importer</span>
                          <i class="tio-open-in-new ml-1"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <!-- List Group Item -->
              <li class="list-group-item py-3">
                <div class="media">
                  <div class="mt-1 mr-3">
                    <img class="avatar avatar-xs avatar-4by3" src="views\admin\assets\svg\brands\google-webdev.svg" alt="Image Description" />
                  </div>
                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <h5 class="mb-0">Webdev</h5>
                        <span class="d-block font-size-sm">Users</span>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                          Launch
                          <span class="d-none d-sm-inline-block">importer</span>
                          <i class="tio-open-in-new ml-1"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <li class="list-group-item">
                <small>Or you can
                  <a href="#">sync data to Front Dashboard</a> to ensure
                  your data is always up-to-date.</small>
              </li>
            </ul>
          </div>
          <!-- End Body -->
        </div>
        <!-- End Card -->
      </div>

      <div class="col-lg-7 mb-3 mb-lg-5">
        <!-- Card -->
        <div class="card h-100">
          <!-- Header -->
          <div class="card-header">
            <h5 class="card-header-title">The most traveled tour of the day</h5>


          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <?php
          

            foreach ($ngaydi as $data) {
              $month[] = $data['ngay_di']; // ngày đi 
              $amount[] = $data['ngaydi']; // trong ngày đó có bn tour đi 
            }

            ?>


            <div style="width: 500px;">
              <canvas id="myChart"></canvas>
            </div>

            <script>
              // === include 'setup' then 'config' above ===
              const labels = <?php echo json_encode($month) ?>; // ngày đi 
              const data = {
                labels: labels,
                datasets: [{
                  label: '',
                  data: <?php echo json_encode($amount) ?>, // trong ngày đó có bn tour đi 
                  backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                  ],
                  borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                  ],
                  borderWidth: 1
                }]
              };

              const config = {
                type: 'bar',
                data: data,
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                },
              };

              var myChart = new Chart(
                document.getElementById('myChart'),
                config
              );
            </script>


          </div>
          <!-- End Body -->
        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Row -->

    <!-- Card -->
    <div class="card mb-3 mb-lg-5">
      <!-- Header -->
      <div class="card-header">
        <div class="row justify-content-between align-items-center flex-grow-1">
          <div class="col-12 col-md">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-header-title">Users</h5>

              <!-- Datatable Info -->
              <div id="datatableCounterInfo" style="display: none">
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
            </div>
          </div>

          <div class="col-auto">
            <!-- Filter -->
            <div class="row align-items-sm-center">
              <div class="col-sm-auto">
                <div class="d-flex align-items-center mr-2">
                  <span class="text-secondary mr-2">Status:</span>

                  <!-- Select -->
                  <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0" data-target-column-index="2" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm custom-select-borderless",
                                "dropdownAutoWidth": true,
                                "width": true
                              }'>
                    <option value="">All</option>
                    <option value="successful">Successful</option>
                    <option value="overdue">Overdue</option>
                    <option value="pending">Pending</option>
                  </select>
                  <!-- End Select -->
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex align-items-center mr-2">
                  <span class="text-secondary mr-2">Signed up:</span>

                  <!-- Select -->
                  <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0" data-target-column-index="5" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm custom-select-borderless",
                                "dropdownAutoWidth": true,
                                "width": true
                              }'>
                    <option value="">All</option>
                    <option value="1 year ago">1 year ago</option>
                    <option value="6 months ago">6 months ago</option>
                  </select>
                  <!-- End Select -->
                </div>
              </div>

              <div class="col-md">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users" />
                  </div>
                  <!-- End Search -->
                </form>
              </div>
            </div>
            <!-- End Filter -->
          </div>
        </div>
      </div>
      <!-- End Header -->

      <!-- Table -->
      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1, 4],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
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
              <th class="table-column-pl-0">Full name</th>
              <th>Status</th>
              <th>Giới Tính</th>
              <th>Email</th>

              <th>User ID</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($show_user as $item) : ?>
              <?php if ($item['vaitro'] == 1) : ?>
                <?php $item['vaitro'] = "Registered"; ?>
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck2" />
                      <label class="custom-control-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="views\admin\assets\img\160x160\<?= $item['image'] ?>" alt="Image Description" />
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0"><?= $item['hoten'] ?>
                          <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span> <?= $item['vaitro'] ?>
                  </td>
                  <td><?= $item['gioitinh'] ?></td>
                  <td><?= $item['email'] ?></td>
                  <td><?= $item['id_users'] ?></td>
                </tr>
              <?php endif ?>
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
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8" selected="">8</option>
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

    <div class="row gx-2 gx-lg-3">
      <div class="col-lg-6 mb-3 mb-lg-0">
        <!-- Card -->
        <div class="card h-100">
          <!-- Header -->
          <div class="card-header">
            <h5 class="card-header-title">ALL TOUR</h5>

            <!-- Daterangepicker -->
            <button id="js-daterangepicker-predefined" class="btn btn-sm btn-ghost-secondary dropdown-toggle">
              <i class="tio-date-range"></i>
              <span class="js-daterangepicker-predefined-preview ml-1"></span>
            </button>
            <!-- End Daterangepicker -->
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Chart -->
            <div class="chartjs-custom mx-auto" style="height: 20rem">
              <div class="row">
                <div id="piechart"></div>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script type="text/javascript">
                  // Load google charts
                  google.charts.load('current', {
                    'packages': ['corechart']
                  });
                  google.charts.setOnLoadCallback(drawChart);

                  // Draw the chart and set the chart values
                  function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['Danh mục', 'Số lượng sản phẩm'],
                      <?php
                      $tongdm = count($show_all_tour);
                      $i = 1;
                      foreach ($show_all_tour as $th) {
                        extract($th);
                        if ($i == $tongdm) $dauphay = "";
                        else $dauphay = ",";
                        echo "['" . $th['loaitour'] . "', " . $th['count_tour'] . "]" . $dauphay;
                        $i += 1;
                      }
                      ?>
                      // ['Work', 8],
                      // ['Eat', 2],
                      // ['TV', 4],
                      // ['Gym', 2],
                      // ['Sleep', 8]
                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = {
                      'title': 'Thống kê các tour của từng miền',
                      'width': 600,
                      'height': 300
                    };

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                  }
                </script>
              </div>
            </div>
            <!-- End Chart -->


          </div>
          <!-- End Body -->
        </div>
        <!-- End Card -->
      </div>

      <div class="col-lg-6">
        <!-- Card -->
        <div class="card h-100">
          <!-- Header -->
          <div class="card-header">
            <h5 class="card-header-title">Tổng Tiền </h5>

            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                       "target": "#reportsOverviewDropdown1",
                       "type": "css-animation"
                     }'>
                <i class="tio-more-vertical"></i>
              </a>

              <div id="reportsOverviewDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                <span class="dropdown-header">Settings</span>

                <a class="dropdown-item" href="#">
                  <i class="tio-share dropdown-item-icon"></i> Share reports
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-download-to dropdown-item-icon"></i>
                  Download
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-alt dropdown-item-icon"></i> Connect other
                  apps
                </a>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header">Feedback</span>

                <a class="dropdown-item" href="#">
                  <i class="tio-chat-outlined dropdown-item-icon"></i>
                  Report
                </a>
              </div>
            </div>
            <!-- End Unfold -->
          </div>
          <!-- End Header -->

          <!-- Body -->
          <?php

          ?>
          <?php foreach ($thongke as $item) : ?>
            <div class="card-body">
              <span class="h1 d-block mb-4"><?= number_format($item['tongtien']) ?> VND</span>

              <!-- Progress -->
              <div class="progress rounded-pill mb-2">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Gross value"></div>
                <div class="progress-bar opacity" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Net volume from sales"></div>
                <div class="progress-bar opacity-xs" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="New volume from sales"></div>
              </div>

              <div class="d-flex justify-content-between mb-4">
                <span>0%</span>
                <span>100%</span>
              </div>
              <!-- End Progress -->

              <!-- Table -->

              <div class="table-responsive">
                <table class="table table-lg table-nowrap card-table mb-0">
                  <tr>
                    <th scope="row">
                      <span class="legend-indicator bg-primary"></span>Giá Cao Nhất
                    </th>
                    <td><?= number_format($item['LN']) ?> VND</td>
                    <td>
                      <span class="badge badge-soft-success">+12.1%</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <span class="legend-indicator bg-primary opacity"></span>Giá Thấp Nhất
                    </th>
                    <td><?= number_format($item['NN']) ?> VND</td>
                    <td>
                      <span class="badge badge-soft-warning">+6.9%</span>
                    </td>
                  </tr>




                </table>
              </div>

              <!-- End Table -->
            </div>
          <?php endforeach ?>
          <!-- End Body -->
        </div>
        <!-- End Card -->
      </div>
    </div>
  </div>
  <!-- End Content -->

  <!-- Footer -->

  <div class="footer">
    <div class="row justify-content-between align-items-center">
      <div class="col">
        <p class="font-size-sm mb-0">
          &copy; Rio.
          <span class="d-none d-sm-inline-block">2020 Evo Tour.</span>
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

<!-- Create a new user Modal -->
<div class="modal fade" id="inviteUserModal" tabindex="-1" role="dialog" aria-labelledby="inviteUserModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="inviteUserModalTitle" class="modal-title">Invite users</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <!-- Form Group -->
        <div class="form-group">
          <div class="input-group input-group-merge mb-2 mb-sm-0">
            <div class="input-group-prepend" id="fullName">
              <span class="input-group-text">
                <i class="tio-search"></i>
              </span>
            </div>

            <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails" aria-describedby="fullName" />

            <div class="input-group-append input-group-append-last-sm-down-none">
              <!-- Select -->
              <div id="permissionSelect" class="select2-custom select2-custom-right">
                <select class="js-select2-custom custom-select" size="1" style="opacity: 0" data-hs-select2-options='{
                              "dropdownParent": "#permissionSelect",
                              "minimumResultsForSearch": "Infinity",
                              "dropdownAutoWidth": true,
                              "dropdownWidth": "11rem"
                            }'>
                  <option value="guest" selected="">Guest</option>
                  <option value="can edit">Can edit</option>
                  <option value="can comment">Can comment</option>
                  <option value="full access">Full access</option>
                </select>
              </div>
              <!-- End Select -->

              <a class="btn btn-primary d-none d-sm-block" href="javascript:;">Invite</a>
            </div>
          </div>

          <a class="btn btn-block btn-primary d-sm-none" href="javascript:;">Invite</a>
        </div>
        <!-- End Form Group -->

        <div class="form-row">
          <h5 class="col modal-title">Invite users</h5>

          <div class="col-auto">
            <a class="d-flex align-items-center font-size-sm text-body" href="#">
              <img class="avatar avatar-xss mr-2" src="views\admin\assets\svg\brands\gmail.svg" alt="Image Description" />
              Import contacts
            </a>
          </div>
        </div>

        <hr class="mt-2" />

        <ul class="list-unstyled list-unstyled-py-4">
          <!-- List Group Item -->
          <li>
            <div class="media">
              <div class="avatar avatar-sm avatar-circle mr-3">
                <img class="avatar-img" src="views\admin\assets\img\160x160\img10.jpg" alt="Image Description" />
              </div>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-sm">
                    <h5 class="text-body mb-0">
                      Amanda Harvey
                      <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i>
                    </h5>
                    <span class="d-block font-size-sm">amanda@example.com</span>
                  </div>

                  <div class="col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect1" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect1",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest" selected="">Guest</option>
                        <option value="can edit">Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>
                          Remove
                        </option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->

          <!-- List Group Item -->
          <li>
            <div class="media">
              <div class="avatar avatar-sm avatar-circle mr-3">
                <img class="avatar-img" src="views\admin\assets\img\160x160\img3.jpg" alt="Image Description" />
              </div>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-sm">
                    <h5 class="text-body mb-0">David Harrison</h5>
                    <span class="d-block font-size-sm">david@example.com</span>
                  </div>

                  <div class="col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect2" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect2",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest" selected="">Guest</option>
                        <option value="can edit">Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>
                          Remove
                        </option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->

          <!-- List Group Item -->
          <li>
            <div class="media">
              <div class="avatar avatar-sm avatar-circle mr-3">
                <img class="avatar-img" src="views\admin\assets\img\160x160\img9.jpg" alt="Image Description" />
              </div>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-sm">
                    <h5 class="text-body mb-0">
                      Ella Lauda
                      <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i>
                    </h5>
                    <span class="d-block font-size-sm">Markvt@example.com</span>
                  </div>

                  <div class="col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect4" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect4",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest" selected="">Guest</option>
                        <option value="can edit">Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>
                          Remove
                        </option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->

          <!-- List Group Item -->
          <li>
            <div class="media">
              <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-3">
                <span class="avatar-initials">B</span>
              </div>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-sm">
                    <h5 class="text-body mb-0">Bob Dean</h5>
                    <span class="d-block font-size-sm">bob@example.com</span>
                  </div>

                  <div class="col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect3" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect3",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest" selected="">Guest</option>
                        <option value="can edit">Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>
                          Remove
                        </option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->
        </ul>
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer justify-content-start">
        <div class="row align-items-center flex-grow-1 mx-n2">
          <div class="col-sm-9 mb-2 mb-sm-0">
            <input type="hidden" id="inviteUserPublicClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" />

            <p class="modal-footer-text">
              The public share <a href="#">link settings</a>
              <i class="tio-help-outlined" data-toggle="tooltip" data-placement="top" title="The public share link allows people to view the project without giving access to full collaboration features."></i>
            </p>
          </div>

          <div class="col-sm-3 text-sm-right">
            <a class="js-clipboard btn btn-sm btn-white text-nowrap" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Copy to clipboard!" data-hs-clipboard-options='{
                    "type": "tooltip",
                    "successText": "Copied!",
                    "contentTarget": "#inviteUserPublicClipboard",
                    "container": "#inviteUserModal"
                   }'>
              <i class="tio-link mr-1"></i> Copy link</a>
          </div>
        </div>
      </div>
      <!-- End Footer -->
    </form>
  </div>
</div>
<!-- End Create a new user Modal -->

<?php include_once "views/admin/footer_admin.php" ?>