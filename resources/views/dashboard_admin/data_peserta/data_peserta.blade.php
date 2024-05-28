<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kapella Bootstrap Admin Dashboard Template</title>
  <!-- base:css -->
  <<link rel="stylesheet" href="{{ asset('vendor/dashboard/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/dashboard/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('vendor/dashboard/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ms-0 me-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <span class="count bg-success">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                          <i class="mdi mdi-account-box mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          2 days ago
                        </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-email mx-0"></i>
                  <span class="count bg-primary">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../images/faces/face10.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          Upcoming board meeting
                        </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
              </li>
              <li class="nav-item nav-search d-none d-lg-block ms-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li>	
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="../../images/logo.svg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <!-- <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-bs-toggle="dropdown">
                  Reports
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-pdf text-primary"></i>
                        Pdf
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-excel text-primary"></i>
                        Exel
                      </a>
                  </div>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                </li> -->
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">Johnson</span>
                    <span class="online-status"></span>
                    <img src="../../images/faces/face28.png" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      {{-- navbar --}}
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/data_peserta') }}" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Data Peserta</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/program_unggulan') }}" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Program Unggulan</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/profile_guru') }}" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Profile Guru & Staff</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/fasilitas') }}" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Fasilitas Sekolah</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/prestasi') }}" class="nav-link">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Prestasi Sekolah</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Event Sekolah</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">2020</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">2021</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">2022</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">2023</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">2024</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="pages/berita_acara/berita_acara.html" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Berita Acara</span></a>
              </li>
			  <li class="nav-item">
					<a href="{{ url('/pembayaran') }}" class="nav-link">
				 	 <i class="mdi mdi-bank"></i>
				  	<span class="menu-title">Pembayaran</span></a>
			  </li>
			  <li class="nav-item">
				<a href="{{ url('/kata_alumni') }}" class="nav-link">
				  <i class="mdi mdi-account-multiple "></i>
				  <span class="menu-title">Kata Para Alumni</span></a>
		  	  </li>
				<li class="nav-item">
					<a href="{{ url('/hasil_ujian') }}" class="nav-link">
					  <i class="mdi mdi-book-open-page-variant "></i>
					  <span class="menu-title">Hasil Ujian</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ url('/soal_ujian') }}" class="nav-link">
					  <i class="mdi mdi-book-open "></i>
					  <span class="menu-title">Soal Ujian</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ url('/data_akun') }}" class="nav-link">
					  <i class="mdi mdi-account-box-outline  "></i>
					  <span class="menu-title">Data Akun Peserta</span></a>
				</li>
            </ul>
        </div>
      </nav>
    </div>
	{{-- navbar end --}}

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hoverable Table</h4>
                  <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nama lengkap</th>
                          <th>Email</th>
                          <th>No HP aktif</th>
                          <th>Alamat sekarang</th>
                          <th>Tempat lahir</th>
                          <th>Tanggal lahir</th>
                          <th>Asal sekolah</th>
                          <th>Jenis kelamin</th>
                          <th>Jalur pendaftaran</th>
                          <th>Berkas</th>
                          <th>Nama ayah</th>
                          <th>No HP ayah</th>
                          <th>Alamat</th>
                          <th>Pekerjaan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                          <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>After effects</td>
                          <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                          <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Single color buttons</h4>
                      <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        <button type="button" class="btn btn-link">Link</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Rounded buttons</h4>
                      <p class="card-description">Add class <code>.btn-rounded</code></p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                        <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                        <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                        <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                        <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                        <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                        <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                        <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Outlined buttons</h4>
                      <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                        <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                        <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                        <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                        <button type="button" class="btn btn-outline-light btn-fw">Light</button>
                        <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-fw">Link</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Inverse buttons</h4>
                      <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                        <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                        <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                        <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                        <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                        <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                        <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                        <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-fw">Link</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-7">
                    <div class="card-body">
                    <h4 class="card-title">Icon Buttons</h4>
                    <p class="card-description">Add class <code>.btn-icon</code> for buttons with only icons</p>
                    <div class="template-demo d-flex justify-content-between flex-nowrap">
                      <button type="button" class="btn btn-primary btn-rounded btn-icon">
                        <i class="mdi mdi-home-outline"></i>
                      </button>
                      <button type="button" class="btn btn-dark btn-rounded btn-icon">
                        <i class="mdi mdi-internet-explorer"></i>
                      </button>
                      <button type="button" class="btn btn-danger btn-rounded btn-icon">
                        <i class="mdi mdi-email-open"></i>
                      </button>
                      <button type="button" class="btn btn-info btn-rounded btn-icon">
                        <i class="mdi mdi-star"></i>
                      </button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon">
                        <i class="mdi mdi-map-marker"></i>
                      </button>
                    </div>
                    <div class="template-demo d-flex justify-content-between flex-nowrap">
                      <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="mdi mdi-home-outline"></i>
                      </button>
                      <button type="button" class="btn btn-inverse-dark btn-icon">
                        <i class="mdi mdi-internet-explorer"></i>
                      </button>
                      <button type="button" class="btn btn-inverse-danger btn-icon">
                        <i class="mdi mdi-email-open"></i>
                      </button>
                      <button type="button" class="btn btn-inverse-info btn-icon">
                        <i class="mdi mdi-star"></i>
                      </button>
                      <button type="button" class="btn btn-inverse-success btn-icon">
                        <i class="mdi mdi-map-marker"></i>
                      </button>
                    </div>
                    <div class="template-demo d-flex justify-content-between flex-nowrap mt-4">
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-heart-outline text-danger"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-music text-dark"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-star text-primary"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-signal text-info"></i>                          
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-trending-up text-success"></i>                          
                      </button>
                    </div>
                    <div class="template-demo d-flex justify-content-between flex-nowrap">
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-heart-outline"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-music"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-star"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-signal"></i>                          
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="mdi mdi-trending-up"></i>                          
                      </button>
                    </div>
                  </div>
                  </div> 
                  <div class="col-md-5">
                    <div class="card-body">
                      <h4 class="card-title">Button Size</h4>
                      <p class="card-description">Use class <code>.btn-{size}</code></p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-outline-secondary btn-lg">btn-lg</button>
                        <button type="button" class="btn btn-outline-secondary btn-md">btn-md</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">btn-sm</button>
                      </div>
                      <div class="template-demo mt-4">
                        <button type="button" class="btn btn-danger btn-lg">btn-lg</button>
                        <button type="button" class="btn btn-success btn-md">btn-md</button>
                        <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Block buttons</h4>
                  <p class="card-description">Add class <code>.btn-block</code></p>
                  <div class="template-demo">
                    <button type="button" class="btn btn-info btn-lg btn-block">Block buttons
                      <i class="mdi mdi-menu float-right"></i>
                    </button>
                    <button type="button" class="btn btn-dark btn-lg btn-block">Block buttons</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block">
                      <i class="mdi mdi-account"></i>                      
                      Block buttons
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block buttons</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Button groups</h4>
                      <p class="card-description">Wrap a series of buttons with <code>.btn</code> 
                        in <code>.btn-group</code></p>
                      <div class="template-demo">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">1</button>
                          <button type="button" class="btn btn-outline-secondary">2</button>
                          <button type="button" class="btn btn-outline-secondary">3</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-heart-outline"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-calendar"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-clock"></i>
                          </button>
                        </div>
                      </div>
                      <div class="template-demo">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-primary">1</button>
                          <button type="button" class="btn btn-primary">2</button>
                          <button type="button" class="btn btn-primary">3</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-primary">
                            <i class="mdi mdi-heart-outline"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="mdi mdi-calendar"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="mdi mdi-clock"></i>
                          </button>
                        </div>
                      </div>
                      <div class="template-demo mt-4">
                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-format-vertical-align-top"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-format-vertical-align-center"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-format-vertical-align-bottom"></i>
                          </button>
                        </div>
                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">Default</button>
                          <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item">Go back</a>
                              <a class="dropdown-item">Delete</a>
                              <a class="dropdown-item">Swap</a>
                            </div>                          
                          </div>
                          <button type="button" class="btn btn-outline-secondary">Default</button>
                        </div>
                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">Top</button>
                          <button type="button" class="btn btn-outline-secondary">Middle</button>                          
                          <button type="button" class="btn btn-outline-secondary">Bottom</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="card-body">
                      <h4 class="card-title">Button with text and icon</h4>
                      <p class="card-description">Wrap icon and text inside <code>.btn-icon-text</code> and use <code>.btn-icon-prepend</code> 
                        or <code>.btn-icon-append</code> for icon tags</p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-primary btn-icon-text">
                          <i class="mdi mdi-file-check btn-icon-prepend"></i>
                          Submit
                        </button>
                        <button type="button" class="btn btn-dark btn-icon-text">
                          Edit
                          <i class="mdi mdi-file-check btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="btn btn-success btn-icon-text">
                          <i class="mdi mdi-alert btn-icon-prepend"></i>                                                    
                          Warning
                        </button>
                      </div>
                      <div class="template-demo">
                        <button type="button" class="btn btn-danger btn-icon-text">
                          <i class="mdi mdi-upload btn-icon-prepend"></i>                                                    
                          Upload
                        </button>
                        <button type="button" class="btn btn-info btn-icon-text">
                          Print
                          <i class="mdi mdi-printer btn-icon-append"></i>                                                                              
                        </button>
                        <button type="button" class="btn btn-warning btn-icon-text">
                          <i class="mdi mdi-reload btn-icon-prepend"></i>                                                    
                          Reset
                        </button>
                      </div>
                      <div class="template-demo mt-2">
                        <button type="button" class="btn btn-outline-primary btn-icon-text">
                          <i class="mdi mdi-file-check btn-icon-prepend"></i>
                          Submit
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="mdi mdi-file-check btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="btn btn-outline-success btn-icon-text">
                          <i class="mdi mdi-alert btn-icon-prepend"></i>                                                    
                          Warning
                        </button>
                      </div>
                      <div class="template-demo">
                        <button type="button" class="btn btn-outline-danger btn-icon-text">
                          <i class="mdi mdi-upload btn-icon-prepend"></i>                                                    
                          Upload
                        </button>
                        <button type="button" class="btn btn-outline-info btn-icon-text">
                          Print
                          <i class="mdi mdi-printer btn-icon-append"></i>                                                                              
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-icon-text">
                          <i class="mdi mdi-reload btn-icon-prepend"></i>                                                    
                          Reset
                        </button>
                      </div>
                      <div class="template-demo mt-2">
                        <button class="btn btn-outline-dark btn-icon-text">
                          <i class="mdi mdi-apple btn-icon-prepend mdi-36px"></i>
                          <span class="d-inline-block text-left">
                            <small class="font-weight-light d-block">Available on the</small>
                            App Store
                          </span>
                        </button>
                        <button class="btn btn-outline-dark btn-icon-text">
                          <i class="mdi mdi-android-debug-bridge btn-icon-prepend mdi-36px"></i>
                          <span class="d-inline-block text-left">
                            <small class="font-weight-light d-block">Get it on the</small>
                            Google Play
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Social Icon Buttons</h4>
                  <p class="card-description">Add class <code>.btn-social-icon</code></p>
                  <div class="template-demo">
                    <button type="button" class="btn btn-social-icon btn-outline-facebook"><i class="mdi mdi-facebook"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-youtube"><i class="mdi mdi-youtube"></i></button>                                        
                    <button type="button" class="btn btn-social-icon btn-outline-twitter"><i class="mdi mdi-twitter"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-dribbble"><i class="mdi mdi-dribbble"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-linkedin"><i class="mdi mdi-linkedin"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-google"><i class="mdi mdi-google-plus"></i></button>
                  </div>
                  <div class="template-demo">
                    <button type="button" class="btn btn-social-icon btn-facebook"><i class="mdi mdi-facebook"></i></button>
                    <button type="button" class="btn btn-social-icon btn-youtube"><i class="mdi mdi-youtube"></i></button>                                        
                    <button type="button" class="btn btn-social-icon btn-twitter"><i class="mdi mdi-twitter"></i></button>
                    <button type="button" class="btn btn-social-icon btn-dribbble"><i class="mdi mdi-dribbble"></i></button>
                    <button type="button" class="btn btn-social-icon btn-linkedin"><i class="mdi mdi-linkedin"></i></button>
                    <button type="button" class="btn btn-social-icon btn-google"><i class="mdi mdi-google-plus"></i></button>
                  </div>
                  <div class="template-demo">
                    <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="mdi mdi-facebook"></i></button>
                    <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="mdi mdi-youtube"></i></button>                                        
                    <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="mdi mdi-twitter"></i></button>
                    <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i class="mdi mdi-dribbble"></i></button>
                    <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i class="mdi mdi-linkedin"></i></button>
                    <button type="button" class="btn btn-social-icon btn-google btn-rounded"><i class="mdi mdi-google-plus"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Social button with text</h4>
                  <p class="card-description">Add class <code>.btn-social-icon-text</code></p>
                  <div class="template-demo">
                    <button type="button" class="btn btn-social-icon-text btn-facebook"><i class="mdi mdi-facebook"></i>Facebook</button>
                    <button type="button" class="btn btn-social-icon-text btn-youtube"><i class="mdi mdi-youtube"></i>Youtube</button>                                        
                    <button type="button" class="btn btn-social-icon-text btn-twitter"><i class="mdi mdi-twitter"></i>Twitter</button>
                    <button type="button" class="btn btn-social-icon-text btn-dribbble"><i class="mdi mdi-dribbble"></i>Dribbble</button>
                    <button type="button" class="btn btn-social-icon-text btn-linkedin"><i class="mdi mdi-linkedin"></i>Linkedin</button>
                    <button type="button" class="btn btn-social-icon-text btn-google"><i class="mdi mdi-google-plus"></i>Google</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{ asset('vendor/dashboard/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('vendor/dashboard/js/template.js') }}"></script>
  <!-- endinject -->
</body>

</html>
