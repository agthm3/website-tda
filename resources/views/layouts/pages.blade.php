<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Dashboard - TDA Kampus Makassar</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./images/favicon.png"
    />
    <link
      rel="stylesheet"
      href="./vendor/owl-carousel/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="./vendor/owl-carousel/css/owl.theme.default.min.css"
    />
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <link
      href="./vendor/fullcalendar/css/fullcalendar.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
      <!--**********************************
            Nav header start
        ***********************************-->
      <div class="nav-header">
        <a href="index.html" class="brand-logo">
          <!-- <img class="logo-abbr" src="./images/logo.png" alt="" />
          <img class="logo-compact" src="./images/logo-text.png" alt="" />
          <img class="brand-title" src="./images/logo-text.png" alt="" /> -->
          TDA Kampus Makassar
        </a>

        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span
            ><span class="line"></span>
          </div>
        </div>
      </div>
      <!--**********************************
            Nav header end
        ***********************************-->

      <!--**********************************
            Header start
        ***********************************-->
      <div class="header">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                <div class="search_bar dropdown">
                  <span
                    class="search_icon p-3 c-pointer"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-magnify"></i>
                  </span>
                  <div class="dropdown-menu p-0 m-0">
                    <form>
                      <input
                        class="form-control"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                      />
                    </form>
                  </div>
                </div>
              </div>

              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown notification_dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-bell"></i>
                    <div class="pulse-css"></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <ul class="list-unstyled">
                      <li class="media dropdown-item">
                        <span class="success"><i class="ti-user"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Martin</strong> has added a
                              <strong>customer</strong> Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="primary"
                          ><i class="ti-shopping-cart"></i
                        ></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Jennifer</strong> purchased Light
                              Dashboard 2.0.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="danger"><i class="ti-bookmark"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>Robin</strong> marked a
                              <strong>ticket</strong> as unsolved.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="primary"><i class="ti-heart"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong>David</strong> purchased Light Dashboard
                              1.0.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="media dropdown-item">
                        <span class="success"><i class="ti-image"></i></span>
                        <div class="media-body">
                          <a href="#">
                            <p>
                              <strong> James.</strong> has added a<strong
                                >customer</strong
                              >
                              Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                    </ul>
                    <a class="all-notification" href="#"
                      >See all notifications <i class="ti-arrow-right"></i
                    ></a>
                  </div>
                </li>
                <li class="nav-item dropdown header-profile">
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <i class="mdi mdi-account"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="./app-profile.html" class="dropdown-item">
                      <i class="icon-user"></i>
                      <span class="ml-2">Profile </span>
                    </a>
                    <a href="./email-inbox.html" class="dropdown-item">
                      <i class="icon-envelope-open"></i>
                      <span class="ml-2">Inbox </span>
                    </a>
                    <a href="./page-login.html" class="dropdown-item">
                      <i class="icon-key"></i>
                      <span class="ml-2">Logout </span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      <!--**********************************
            Sidebar start
        ***********************************-->
      <div class="quixnav">
        <div class="quixnav-scroll">
          <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-single-04"></i
                ><span class="nav-text">Dashboard</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./index.html">Dashboard</a></li>
                <li><a href="kalender.html">Kalender</a></li>
              </ul>
            </li>
            <li class="nav-label">Manajemen Profil</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-app-store"></i
                ><span class="nav-text">Pengaturan Profil</span></a
              >
              <ul aria-expanded="false">
                <li><a href="profil.html">Profil</a></li>

                <li>
                  <a href="pelayan-section-index.html">Pelayan Section</a>
                </li>
              </ul>
            </li>
            <li class="nav-label">Manajemen Konten</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-app-store"></i
                ><span class="nav-text">Konten & Event</span></a
              >
              <ul aria-expanded="false">
                <li><a href="konten-index.html">Konten</a></li>

                <li><a href="event-index.html">Event</a></li>
              </ul>
            </li>
            <li class="nav-label">Manajemen Toko</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-app-store"></i
                ><span class="nav-text">Pengaturan Toko</span></a
              >
              <ul aria-expanded="false">
                <li><a href="barang-index.html">Daftar Barang</a></li>

                <li><a href="event-index.html">Pesanan</a></li>
              </ul>
            </li>
            <li class="nav-label">Manajemen Anggota</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-app-store"></i
                ><span class="nav-text">Pengaturan Anggota</span></a
              >
              <ul aria-expanded="false">
                <li><a href="anggota-index.html">Daftar Anggota</a></li>

                <li><a href="event-index.html">Pesanan</a></li>
              </ul>
            </li>
            <!-- <li class="nav-label">Apps</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-app-store"></i
                ><span class="nav-text">Apps</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./app-profile.html">Profile</a></li>
                <li>
                  <a
                    class="has-arrow"
                    href="javascript:void()"
                    aria-expanded="false"
                    >Email</a
                  >
                  <ul aria-expanded="false">
                    <li><a href="./email-compose.html">Compose</a></li>
                    <li><a href="./email-inbox.html">Inbox</a></li>
                    <li><a href="./email-read.html">Read</a></li>
                  </ul>
                </li>
                <li><a href="./app-calender.html">Calendar</a></li>
              </ul>
            </li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-chart-bar-33"></i
                ><span class="nav-text">Charts</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./chart-flot.html">Flot</a></li>
                <li><a href="./chart-morris.html">Morris</a></li>
                <li><a href="./chart-chartjs.html">Chartjs</a></li>
                <li><a href="./chart-chartist.html">Chartist</a></li>
                <li><a href="./chart-sparkline.html">Sparkline</a></li>
                <li><a href="./chart-peity.html">Peity</a></li>
              </ul>
            </li>
            <li class="nav-label">Components</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-world-2"></i
                ><span class="nav-text">Bootstrap</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./ui-accordion.html">Accordion</a></li>
                <li><a href="./ui-alert.html">Alert</a></li>
                <li><a href="./ui-badge.html">Badge</a></li>
                <li><a href="./ui-button.html">Button</a></li>
                <li><a href="./ui-modal.html">Modal</a></li>
                <li><a href="./ui-button-group.html">Button Group</a></li>
                <li><a href="./ui-list-group.html">List Group</a></li>
                <li><a href="./ui-media-object.html">Media Object</a></li>
                <li><a href="./ui-card.html">Cards</a></li>
                <li><a href="./ui-carousel.html">Carousel</a></li>
                <li><a href="./ui-dropdown.html">Dropdown</a></li>
                <li><a href="./ui-popover.html">Popover</a></li>
                <li><a href="./ui-progressbar.html">Progressbar</a></li>
                <li><a href="./ui-tab.html">Tab</a></li>
                <li><a href="./ui-typography.html">Typography</a></li>
                <li><a href="./ui-pagination.html">Pagination</a></li>
                <li><a href="./ui-grid.html">Grid</a></li>
              </ul>
            </li>

            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-plug"></i
                ><span class="nav-text">Plugins</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./uc-select2.html">Select 2</a></li>
                <li><a href="./uc-nestable.html">Nestedable</a></li>
                <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                <li><a href="./uc-toastr.html">Toastr</a></li>
                <li><a href="./map-jqvmap.html">Jqv Map</a></li>
              </ul>
            </li>
            <li>
              <a href="widget-basic.html" aria-expanded="false"
                ><i class="icon icon-globe-2"></i
                ><span class="nav-text">Widget</span></a
              >
            </li>
            <li class="nav-label">Forms</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-form"></i
                ><span class="nav-text">Forms</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./form-element.html">Form Elements</a></li>
                <li><a href="./form-wizard.html">Wizard</a></li>
                <li><a href="./form-editor-summernote.html">Summernote</a></li>
                <li><a href="form-pickers.html">Pickers</a></li>
                <li>
                  <a href="form-validation-jquery.html">Jquery Validate</a>
                </li>
              </ul>
            </li>
            <li class="nav-label">Table</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-layout-25"></i
                ><span class="nav-text">Table</span></a
              >
              <ul aria-expanded="false">
                <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                <li><a href="table-datatable-basic.html">Datatable</a></li>
              </ul>
            </li>

            <li class="nav-label">Extra</li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false"
                ><i class="icon icon-single-copy-06"></i
                ><span class="nav-text">Pages</span></a
              >
              <ul aria-expanded="false">
                <li><a href="./page-register.html">Register</a></li>
                <li><a href="./page-login.html">Login</a></li>
                <li>
                  <a
                    class="has-arrow"
                    href="javascript:void()"
                    aria-expanded="false"
                    >Error</a
                  >
                  <ul aria-expanded="false">
                    <li><a href="./page-error-400.html">Error 400</a></li>
                    <li><a href="./page-error-403.html">Error 403</a></li>
                    <li><a href="./page-error-404.html">Error 404</a></li>
                    <li><a href="./page-error-500.html">Error 500</a></li>
                    <li><a href="./page-error-503.html">Error 503</a></li>
                  </ul>
                </li>
                <li><a href="./page-lock-screen.html">Lock Screen</a></li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
      <!--**********************************
            Sidebar end
        ***********************************-->

      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="card">
                <div class="stat-widget-two card-body">
                  <div class="stat-content">
                    <div class="stat-text">Total Anggota</div>
                    <div class="stat-digit">8500</div>
                  </div>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-success w-85"
                      role="progressbar"
                      aria-valuenow="85"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card">
                <div class="stat-widget-two card-body">
                  <div class="stat-content">
                    <div class="stat-text">Total Pelayan</div>
                    <div class="stat-digit">7800</div>
                  </div>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-primary w-75"
                      role="progressbar"
                      aria-valuenow="78"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card">
                <div class="stat-widget-two card-body">
                  <div class="stat-content">
                    <div class="stat-text">Pendapatan Kotor Event</div>
                    <div class="stat-digit">500</div>
                  </div>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-warning w-50"
                      role="progressbar"
                      aria-valuenow="50"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card">
                <div class="stat-widget-two card-body">
                  <div class="stat-content">
                    <div class="stat-text">Total Anggota Tidak aktif</div>
                    <div class="stat-digit">650</div>
                  </div>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-danger w-65"
                      role="progressbar"
                      aria-valuenow="65"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h2>Pengumuman</h2>
                  <p class="text-primary">
                    Teman-teman, semua jangan lupa isi berkasnya yaa
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Anggota Paling Aktif</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Product</th>
                          <th>quantity</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>Lew Shawon</td>
                          <td><span>Dell-985</span></td>
                          <td><span>456 pcs</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>Lew Shawon</td>
                          <td><span>Asus-565</span></td>
                          <td><span>456 pcs</span></td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>lew Shawon</td>
                          <td><span>Dell-985</span></td>
                          <td><span>456 pcs</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr>

                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>Lew Shawon</td>
                          <td><span>Asus-565</span></td>
                          <td><span>456 pcs</span></td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>lew Shawon</td>
                          <td><span>Dell-985</span></td>
                          <td><span>456 pcs</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr>

                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>Lew Shawon</td>
                          <td><span>Asus-565</span></td>
                          <td><span>456 pcs</span></td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Anggota Paling Tidak Aktif</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Product</th>
                          <th>quantity</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>Lew Shawon</td>
                          <td><span>Dell-985</span></td>
                          <td><span>456 pcs</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>Lew Shawon</td>
                          <td><span>Asus-565</span></td>
                          <td><span>456 pcs</span></td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>lew Shawon</td>
                          <td><span>Dell-985</span></td>
                          <td><span>456 pcs</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr>

                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>Lew Shawon</td>
                          <td><span>Asus-565</span></td>
                          <td><span>456 pcs</span></td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>lew Shawon</td>
                          <td><span>Dell-985</span></td>
                          <td><span>456 pcs</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr>

                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""
                                ><img
                                  width="35"
                                  src="./images/avatar/1.png"
                                  alt=""
                              /></a>
                            </div>
                          </td>
                          <td>Lew Shawon</td>
                          <td><span>Asus-565</span></td>
                          <td><span>456 pcs</span></td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-xl-4 col-xxl-6 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Timeline Event</h4>
                </div>
                <div class="card-body">
                  <div class="widget-timeline">
                    <ul class="timeline">
                      <li>
                        <div class="timeline-badge primary"></div>
                        <a class="timeline-panel text-muted" href="#">
                          <span>10 Hari lagi</span>
                          <h6 class="m-t-5">Cara pintar menjadi pintar</h6>
                        </a>
                      </li>

                      <li>
                        <div class="timeline-badge warning"></div>
                        <a class="timeline-panel text-muted" href="#">
                          <span>12 Hari lagi</span>
                          <h6 class="m-t-5">Rapat Kerja bulanan</h6>
                        </a>
                      </li>

                      <li>
                        <div class="timeline-badge danger"></div>
                        <a class="timeline-panel text-muted" href="#">
                          <span>15 Hari lagi </span>
                          <h6 class="m-t-5">Mubes.</h6>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Todo</h4>
                </div>
                <div class="card-body px-0">
                  <div class="todo-list">
                    <div class="tdl-holder">
                      <div class="tdl-content widget-todo mr-4">
                        <ul id="todo_list">
                          <li>
                            <label
                              ><input type="checkbox" /><i></i
                              ><span>Get up</span
                              ><a href="#" class="ti-trash"></a
                            ></label>
                          </li>
                          <li>
                            <label
                              ><input type="checkbox" checked /><i></i
                              ><span>Stand up</span
                              ><a href="#" class="ti-trash"></a
                            ></label>
                          </li>
                          <li>
                            <label
                              ><input type="checkbox" /><i></i
                              ><span>Don't give up the fight.</span
                              ><a href="#" class="ti-trash"></a
                            ></label>
                          </li>
                          <li>
                            <label
                              ><input type="checkbox" checked /><i></i
                              ><span>Do something else</span
                              ><a href="#" class="ti-trash"></a
                            ></label>
                          </li>
                          <li>
                            <label
                              ><input type="checkbox" checked /><i></i
                              ><span>Stand up</span
                              ><a href="#" class="ti-trash"></a
                            ></label>
                          </li>
                          <li>
                            <label
                              ><input type="checkbox" /><i></i
                              ><span>Don't give up the fight.</span
                              ><a href="#" class="ti-trash"></a
                            ></label>
                          </li>
                        </ul>
                      </div>
                      <div class="px-4">
                        <input
                          type="text"
                          class="tdl-new form-control"
                          placeholder="Write new item and hit 'Enter'..."
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Produk Terjual</h4>
                  <div class="card-action">
                    <div class="dropdown custom-dropdown">
                      <div data-toggle="dropdown">
                        <i class="ti-more-alt"></i>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Option 1</a>
                        <a class="dropdown-item" href="#">Option 2</a>
                        <a class="dropdown-item" href="#">Option 3</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart py-4">
                    <canvas id="sold-product"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-intro-title">
                    Kalender Program Kerja (Event)
                  </h4>

                  <div class="">
                    <div id="external-events" class="my-3">
                      <p>Drag and drop your event or click in the calendar</p>
                      <div class="external-event" data-class="bg-primary">
                        <i class="fa fa-move"></i>New Theme Release
                      </div>
                      <div class="external-event" data-class="bg-success">
                        <i class="fa fa-move"></i>My Event
                      </div>
                      <div class="external-event" data-class="bg-warning">
                        <i class="fa fa-move"></i>Meet manager
                      </div>
                      <div class="external-event" data-class="bg-dark">
                        <i class="fa fa-move"></i>Create New theme
                      </div>
                    </div>
                    <!-- checkbox -->
                    <div class="checkbox checkbox-event pt-3 pb-5">
                      <input
                        id="drop-remove"
                        class="styled-checkbox"
                        type="checkbox"
                      />
                      <label class="ml-2 mb-0" for="drop-remove"
                        >Remove After Drop</label
                      >
                    </div>
                    <a
                      href="javascript:void()"
                      data-toggle="modal"
                      data-target="#add-category"
                      class="btn btn-primary btn-event w-100"
                    >
                      <span class="align-middle"><i class="ti-plus"></i></span>
                      Buat Event Baru
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="card">
                <div class="card-body">
                  <div id="calendar" class="app-fullcalendar"></div>
                </div>
              </div>
            </div>
            <!-- BEGIN MODAL -->
            <div class="modal fade none-border" id="event-modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><strong>Add New Event</strong></h4>
                  </div>
                  <div class="modal-body"></div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-default waves-effect"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button
                      type="button"
                      class="btn btn-success save-event waves-effect waves-light"
                    >
                      Create event
                    </button>

                    <button
                      type="button"
                      class="btn btn-danger delete-event waves-effect waves-light"
                      data-dismiss="modal"
                    >
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-category">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><strong>Add a category</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">Category Name</label>
                          <input
                            class="form-control form-white"
                            placeholder="Enter name"
                            type="text"
                            name="category-name"
                          />
                        </div>
                        <div class="col-md-6">
                          <label class="control-label"
                            >Choose Category Color</label
                          >
                          <select
                            class="form-control form-white"
                            data-placeholder="Choose a color..."
                            name="category-color"
                          >
                            <option value="success">Success</option>
                            <option value="danger">Danger</option>
                            <option value="info">Info</option>
                            <option value="pink">Pink</option>
                            <option value="primary">Primary</option>
                            <option value="warning">Warning</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-default waves-effect"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button
                      type="button"
                      class="btn btn-danger waves-effect waves-light save-category"
                      data-dismiss="modal"
                    >
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--**********************************
            Content body end
        ***********************************-->

      <!--**********************************
            Footer start
        ***********************************-->
      <div class="footer">
        <div class="copyright">
          <p>
            Copyright © Designed &amp; Developed by
            <a href="#" target="_blank">Quixkit</a> 2019
          </p>
          <p>
            Distributed by
            <a href="https://themewagon.com/" target="_blank">Themewagon</a>
          </p>
        </div>
      </div>
      <!--**********************************
            Footer end
        ***********************************-->

      <!--**********************************
           Support ticket button start
        ***********************************-->

      <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>

    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>

    <script src="./js/dashboard/dashboard-1.js"></script>
    <!-- Summernote -->
    <script src="./vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="./js/plugins-init/summernote-init.js"></script>
    <script src="./vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="./vendor/moment/moment.min.js"></script>

    <script src="./vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="./js/plugins-init/fullcalendar-init.js"></script>
  </body>
</html>
