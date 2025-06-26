<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    FlexiGadget
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

  <style>
   .slide-up {
    animation: slideUp 2s ease-out infinite;
    transform-origin: bottom;
}

@keyframes slideUp {
    0% {
        transform: translateY(100%);
        opacity: 0;
    }
    20% {
        transform: translateY(0);
        opacity: 1;
    }
    80% {
        transform: translateY(0);
        opacity: 1;
    }
    100% {
        transform: translateY(-100%);
        opacity: 0;
    }
}

.slide-up:nth-child(2) {
    animation-delay: 0.3s;
}
  </style>

</head>

<body class="g-sidenav-show bg-gray-100">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="position-absolute w-100 min-height-300 top-0"
    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
        target="_blank">
        <img src="../assets/img/logo-ct-dark.png" 
     width="26px" 
     height="26px" 
     class="navbar-brand-img h-100 slide-up"
     alt="main_logo">
<span class="ms-1 font-weight-bold slide-up">FLEXIGADGET</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/dashboard">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="/manajemen-barang">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Barang</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/pembayaran">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pembayaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/manajemen-penyewaan">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Penyewaan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/manajemen-pengguna">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Pengguna</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan & Analisis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="pengaturan">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pengaturan Sistem</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link border-0 bg-transparent">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Logout</span>
            </button>
          </form>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-3 card-profile-bottom">
      <div class="card-body p-3 bg-white border-radius-lg shadow-lg">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{ strtoupper(Auth::user()->name) }}
              </h5>
              <p class="mb-0 font-weight-bold text-sm text-muted">
                Administrator
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                  <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" placeholder="Type here...">
                </div>
              </div>
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center"
                    data-bs-toggle="tab" href="#app-content" role="tab" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
                    data-bs-toggle="tab" href="#messages-content" role="tab" aria-selected="false">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
                    data-bs-toggle="tab" href="#settings-content" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane active" id="app-content">
        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-xl-3 col-sm-6  mb-3">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Handphone Tersedia</p>
                        <h5 class="font-weight-bolder">
                          {{ $jumlahHandphone }}
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Laptop Tersedia</p>
                        <h5 class="font-weight-bolder">
                          {{ $jumlahLaptop }}
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Penyewaan</p>
                        <h5 class="font-weight-bolder">
                          {{ $jumlahPenyewaan }}
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Pelanggan Terdaftar</p>
                        <h5 class="font-weight-bolder">
                          {{ $jumlahCustomer }}
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="tab-pane" id="settings-content">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
                <button class="btn btn-primary btn-sm ms-auto" onclick="toggleEditMode()" id="editButton">Edit</button>
              </div>
            </div>
            <div class="card-body">
              @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
              @endif
              
              @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
              @endif

              @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <ul class="mb-0">
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
              @endif
              
              <form id="profileForm" action="{{ route('admin.profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                
                <p class="text-uppercase text-sm">User Information</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name" class="form-control-label">Full Name</label>
                      <input class="form-control" type="text" name="name" id="name" 
                             value="{{ Auth::user()->name }}" readonly required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email" class="form-control-label">Email Address</label>
                      <input class="form-control" type="email" name="email" id="email" 
                             value="{{ Auth::user()->email }}" readonly required>
                    </div>
                  </div>
                </div>
                
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">Account Information</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="role" class="form-control-label">Role</label>
                      <input class="form-control" type="text" id="role" 
                             value="{{ ucfirst(Auth::user()->role) }}" readonly disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="status" class="form-control-label">Status</label>
                      <input class="form-control" type="text" id="status" 
                             value="{{ ucfirst(Auth::user()->status) }}" readonly disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="created_at" class="form-control-label">Member Since</label>
                      <input class="form-control" type="text" id="created_at" 
                             value="{{ Auth::user()->created_at->format('d M Y') }}" readonly disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email_verified" class="form-control-label">Email Verified</label>
                      <input class="form-control" type="text" id="email_verified" 
                             value="{{ Auth::user()->email_verified_at ? 'Yes' : 'No' }}" readonly disabled>
                    </div>
                  </div>
                </div>
                
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">Change Password</p>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="current_password" class="form-control-label">Current Password</label>
                      <input class="form-control" type="password" name="current_password" id="current_password" 
                             placeholder="Enter current password" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="new_password" class="form-control-label">New Password</label>
                      <input class="form-control" type="password" name="new_password" id="new_password" 
                             placeholder="Enter new password (min 8 characters)" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="new_password_confirmation" class="form-control-label">Confirm New Password</label>
                      <input class="form-control" type="password" name="new_password_confirmation" id="new_password_confirmation" 
                             placeholder="Confirm new password" readonly>
                    </div>
                  </div>
                </div>
                
                @if(Auth::user()->google_id)
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">Google Account Integration</p>
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-info">
                      <i class="fab fa-google me-2"></i>
                      This account is linked with Google. Google ID: {{ Auth::user()->google_id }}
                    </div>
                  </div>
                </div>
                @endif
                
                <div class="row mt-3" id="formButtons" style="display: none;">
                  <div class="col-12">
                    <button type="submit" class="btn btn-success me-2">
                      <i class="fas fa-save me-1"></i>Save Changes
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="cancelEdit()">
                      <i class="fas fa-times me-1"></i>Cancel
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Grafik Penjualan</h6>
          </div>
          <div class="card-body p-3">
            <canvas id="chart-line" width="400" height="200"></canvas>
          </div>
        </div>
      </div>
    </div>
    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">FLEXIGADGET</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About
                  Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                  target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </main>

  <!-- tombol sisi -->
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">FLEXIGADGET</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
            onclick="sidebarType(this)">Dark</button>
        </div>
        <!-- Navbar Fixed -->
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>

      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>

<script>
// Inisialisasi Chart dengan variabel global untuk realtime update
var ctx1 = document.getElementById("chart-line").getContext("2d");
var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');

// Simpan chart dalam variabel global untuk update realtime
window.mainChart = new Chart(ctx1, {
  type: "line",
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Penyewaan Bulanan",
      tension: 0.4,
      borderWidth: 0,
      pointRadius: 0,
      borderColor: "#5e72e4",
      backgroundColor: gradientStroke1,
      borderWidth: 3,
      fill: true,
      data: [50, 40, 300, 220, 500, 250, 400, 230, 500, 300, 400, 350],
      maxBarThickness: 6
    }],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: true,
      }
    },
    interaction: {
      intersect: false,
      mode: 'index',
    },
    scales: {
      y: {
        grid: {
          drawBorder: false,
          display: true,
          drawOnChartArea: true,
          drawTicks: false,
          borderDash: [5, 5]
        },
        ticks: {
          display: true,
          padding: 10,
          color: '#fbfbfb',
          font: {
            size: 11,
            family: "Open Sans",
            style: 'normal',
            lineHeight: 2
          },
        }
      },
      x: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false,
          borderDash: [5, 5]
        },
        ticks: {
          display: true,
          color: '#ccc',
          padding: 20,
          font: {
            size: 11,
            family: "Open Sans",
            style: 'normal',
            lineHeight: 2
          },
        }
      },
    },
  },
});

// Fungsi untuk update data realtime
function updateDashboardData() {
    fetch('/dashboard/realtime-data')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update statistik cards
                const handphoneElement = document.getElementById('handphone-count');
                const laptopElement = document.getElementById('laptop-count');
                const penyewaanElement = document.getElementById('penyewaan-count');
                const customerElement = document.getElementById('customer-count');
                const lastUpdateElement = document.getElementById('last-update');
                
                if (handphoneElement) {
                    // Animasi counter
                    animateCounter(handphoneElement, parseInt(handphoneElement.textContent), data.stats.jumlahHandphone);
                }
                
                if (laptopElement) {
                    animateCounter(laptopElement, parseInt(laptopElement.textContent), data.stats.jumlahLaptop);
                }
                
                if (penyewaanElement) {
                    animateCounter(penyewaanElement, parseInt(penyewaanElement.textContent), data.stats.jumlahPenyewaan);
                }
                
                if (customerElement) {
                    animateCounter(customerElement, parseInt(customerElement.textContent), data.stats.jumlahCustomer);
                }
                
                // Update timestamp
                if (lastUpdateElement) {
                    lastUpdateElement.textContent = 'Terakhir update: ' + data.timestamp;
                }
                
                // Update grafik utama dengan data bulanan
                if (window.mainChart && data.monthlyChart) {
                    window.mainChart.data.datasets[0].data = data.monthlyChart;
                    window.mainChart.update('none'); // Update tanpa animasi untuk performa
                }
                
                // Update indikator realtime
                updateRealtimeIndicator(true);
                
                console.log('Dashboard data updated successfully at ' + data.timestamp);
            } else {
                console.error('Error in response:', data.message);
                updateRealtimeIndicator(false);
            }
        })
        .catch(error => {
            console.error('Error updating dashboard:', error);
            updateRealtimeIndicator(false);
        });
}

// Fungsi animasi counter
function animateCounter(element, start, end) {
    if (start === end) return;
    
    const duration = 1000; // 1 detik
    const startTime = performance.now();
    
    function updateCounter(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        const current = Math.floor(start + (end - start) * progress);
        element.textContent = current;
        
        if (progress < 1) {
            requestAnimationFrame(updateCounter);
        }
    }
    
    requestAnimationFrame(updateCounter);
}

// Fungsi untuk update indikator realtime
function updateRealtimeIndicator(isOnline) {
    const indicator = document.querySelector('.realtime-indicator');
    if (indicator) {
        if (isOnline) {
            indicator.style.backgroundColor = '#28a745'; // Hijau
            indicator.style.animation = 'pulse 2s infinite';
        } else {
            indicator.style.backgroundColor = '#dc3545'; // Merah
            indicator.style.animation = 'none';
        }
    }
}

// Fungsi untuk menambahkan efek loading
function showLoadingEffect() {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.style.opacity = '0.7';
        card.style.transition = 'opacity 0.3s';
    });
}

function hideLoadingEffect() {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.style.opacity = '1';
    });
}

// Event listener untuk update manual
document.addEventListener('DOMContentLoaded', function() {
    // Tambahkan tombol refresh manual (opsional)
    const refreshButton = document.createElement('button');
    refreshButton.innerHTML = '<i class="fas fa-sync-alt"></i>';
    refreshButton.className = 'btn btn-sm btn-outline-primary';
    refreshButton.style.position = 'fixed';
    refreshButton.style.bottom = '20px';
    refreshButton.style.right = '20px';
    refreshButton.style.zIndex = '9999';
    refreshButton.title = 'Refresh Data Manual';
    
    refreshButton.addEventListener('click', function() {
        this.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
        updateDashboardData();
        setTimeout(() => {
            this.innerHTML = '<i class="fas fa-sync-alt"></i>';
        }, 1000);
    });
    
    document.body.appendChild(refreshButton);
    
    // Update pertama kali setelah 3 detik
    setTimeout(() => {
        updateDashboardData();
    }, 3000);
    
    // Set interval untuk update otomatis setiap 15 detik
    setInterval(updateDashboardData, 15000);
    
    console.log('Dashboard realtime initialized');
});

// Fungsi untuk pause/resume realtime update
let realtimeInterval;
let isRealtimePaused = false;

function toggleRealtime() {
    if (isRealtimePaused) {
        realtimeInterval = setInterval(updateDashboardData, 15000);
        isRealtimePaused = false;
        console.log('Realtime updates resumed');
    } else {
        clearInterval(realtimeInterval);
        isRealtimePaused = true;
        console.log('Realtime updates paused');
    }
}

// Handle visibility change (pause ketika tab tidak aktif)
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        clearInterval(realtimeInterval);
        console.log('Tab hidden - pausing realtime updates');
    } else {
        if (!isRealtimePaused) {
            realtimeInterval = setInterval(updateDashboardData, 15000);
            updateDashboardData(); // Update langsung ketika tab aktif kembali
            console.log('Tab visible - resuming realtime updates');
        }
    }
});
</script>

<script>
// Script untuk scrollbar (tetap sama)
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
  var options = {
    damping: '0.5'
  }
  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>

<!-- Script tambahan untuk notifikasi update -->
<script>
// Fungsi untuk menampilkan notifikasi update
function showUpdateNotification(message) {
    // Buat elemen notifikasi
    const notification = document.createElement('div');
    notification.className = 'alert alert-success alert-dismissible fade show';
    notification.style.position = 'fixed';
    notification.style.top = '20px';
    notification.style.right = '20px';
    notification.style.zIndex = '9999';
    notification.style.minWidth = '300px';
    notification.innerHTML = `
        <i class="fas fa-check-circle me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove setelah 3 detik
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 3000);
}

// Fungsi untuk error notification
function showErrorNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'alert alert-danger alert-dismissible fade show';
    notification.style.position = 'fixed';
    notification.style.top = '20px';
    notification.style.right = '20px';
    notification.style.zIndex = '9999';
    notification.style.minWidth = '300px';
    notification.innerHTML = `
        <i class="fas fa-exclamation-triangle me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}
</script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>

</body>

</html>