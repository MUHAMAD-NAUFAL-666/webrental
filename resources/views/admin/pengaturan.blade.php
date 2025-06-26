<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Pengaturan Sistem - FLEXIGADGET
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
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <a class="navbar-brand m-0" href="/dashboard">
        <img src="../assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100"
          alt="main_logo">
        <span class="ms-1 font-weight-bold">FLEXIGADGET</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/dashboard">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/manajemen-barang">
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
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Pengguna</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/laporan">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-bar-32 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan & Analisis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/pengaturan">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-settings-gear-65 text-dark text-sm opacity-10"></i>
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
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Cari pengaturan...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-4">
      <!-- Alert Messages -->
      <div id="alertContainer"></div>

      <!-- Pengaturan Umum -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <div class="icon icon-shape icon-sm border-radius-md bg-gradient-primary text-center me-2">
                  <i class="ni ni-settings-gear-65 text-white opacity-10"></i>
                </div>
                <h6 class="mb-0">Pengaturan Umum Sistem</h6>
              </div>
            </div>
            <div class="card-body">
              <form id="generalSettingsForm">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="app_name" class="form-control-label">Nama Aplikasi</label>
                      <input class="form-control" type="text" id="app_name" name="app_name" value="FLEXIGADGET">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="app_version" class="form-control-label">Versi Aplikasi</label>
                      <input class="form-control" type="text" id="app_version" name="app_version" value="1.0.0">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="app_description" class="form-control-label">Deskripsi Aplikasi</label>
                      <textarea class="form-control" id="app_description" name="app_description" rows="3">Sistem Manajemen Penyewaan Gadget - FLEXIGADGET</textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="contact_email" class="form-control-label">Email Kontak</label>
                      <input class="form-control" type="email" id="contact_email" name="contact_email" value="admin@flexigadget.com">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="contact_phone" class="form-control-label">Nomor Telepon</label>
                      <input class="form-control" type="text" id="contact_phone" name="contact_phone" value="+62 812-3456-7890">
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn bg-gradient-primary">
                    <i class="ni ni-check-bold"></i> Simpan Pengaturan Umum
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Pengaturan Penyewaan -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <div class="icon icon-shape icon-sm border-radius-md bg-gradient-info text-center me-2">
                  <i class="ni ni-app text-white opacity-10"></i>
                </div>
                <h6 class="mb-0">Pengaturan Penyewaan</h6>
              </div>
            </div>
            <div class="card-body">
              <form id="rentalSettingsForm">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="min_rental_days" class="form-control-label">Minimum Hari Sewa</label>
                      <input class="form-control" type="number" id="min_rental_days" name="min_rental_days" value="1" min="1">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="max_rental_days" class="form-control-label">Maximum Hari Sewa</label>
                      <input class="form-control" type="number" id="max_rental_days" name="max_rental_days" value="30" min="1">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="late_fee_per_day" class="form-control-label">Denda Keterlambatan per Hari (Rp)</label>
                      <input class="form-control" type="number" id="late_fee_per_day" name="late_fee_per_day" value="50000" min="0">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="security_deposit_percentage" class="form-control-label">Persentase Deposit (%)</label>
                      <input class="form-control" type="number" id="security_deposit_percentage" name="security_deposit_percentage" value="20" min="0" max="100">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="auto_confirm_payment" name="auto_confirm_payment" checked>
                        <label class="form-check-label" for="auto_confirm_payment">
                          Konfirmasi Pembayaran Otomatis
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn bg-gradient-info">
                    <i class="ni ni-check-bold"></i> Simpan Pengaturan Penyewaan
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Pengaturan Notifikasi -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <div class="icon icon-shape icon-sm border-radius-md bg-gradient-warning text-center me-2">
                  <i class="ni ni-email-83 text-white opacity-10"></i>
                </div>
                <h6 class="mb-0">Pengaturan Notifikasi</h6>
              </div>
            </div>
            <div class="card-body">
              <form id="notificationSettingsForm">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="smtp_host" class="form-control-label">SMTP Host</label>
                      <input class="form-control" type="text" id="smtp_host" name="smtp_host" value="smtp.gmail.com">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="smtp_port" class="form-control-label">SMTP Port</label>
                      <input class="form-control" type="number" id="smtp_port" name="smtp_port" value="587">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="smtp_username" class="form-control-label">SMTP Username</label>
                      <input class="form-control" type="email" id="smtp_username" name="smtp_username" placeholder="email@gmail.com">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="smtp_password" class="form-control-label">SMTP Password</label>
                      <input class="form-control" type="password" id="smtp_password" name="smtp_password" placeholder="••••••••">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="email_new_rental" name="email_new_rental" checked>
                          <label class="form-check-label" for="email_new_rental">
                            Email Penyewaan Baru
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="email_payment_received" name="email_payment_received" checked>
                          <label class="form-check-label" for="email_payment_received">
                            Email Pembayaran Diterima
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="email_return_reminder" name="email_return_reminder" checked>
                          <label class="form-check-label" for="email_return_reminder">
                            Email Pengingat Pengembalian
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <button type="button" class="btn bg-gradient-secondary me-2" onclick="testEmailConnection()">
                    <i class="ni ni-send"></i> Test Koneksi Email
                  </button>
                  <button type="submit" class="btn bg-gradient-warning">
                    <i class="ni ni-check-bold"></i> Simpan Pengaturan Notifikasi
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Pengaturan Keamanan -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <div class="icon icon-shape icon-sm border-radius-md bg-gradient-danger text-center me-2">
                  <i class="ni ni-lock-circle-open text-white opacity-10"></i>
                </div>
                <h6 class="mb-0">Pengaturan Keamanan</h6>
              </div>
            </div>
            <div class="card-body">
              <form id="securitySettingsForm">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="session_timeout" class="form-control-label">Session Timeout (menit)</label>
                      <input class="form-control" type="number" id="session_timeout" name="session_timeout" value="120" min="5">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="max_login_attempts" class="form-control-label">Maksimal Percobaan Login</label>
                      <input class="form-control" type="number" id="max_login_attempts" name="max_login_attempts" value="5" min="1">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="require_email_verification" name="require_email_verification" checked>
                          <label class="form-check-label" for="require_email_verification">
                            Wajib Verifikasi Email
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="enable_2fa" name="enable_2fa">
                          <label class="form-check-label" for="enable_2fa">
                            Aktifkan 2FA
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="log_user_activities" name="log_user_activities" checked>
                          <label class="form-check-label" for="log_user_activities">
                            Log Aktivitas User
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn bg-gradient-danger">
                    <i class="ni ni-check-bold"></i> Simpan Pengaturan Keamanan
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Pengaturan Backup & Maintenance -->
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <div class="icon icon-shape icon-sm border-radius-md bg-gradient-success text-center me-2">
                  <i class="ni ni-archive-2 text-white opacity-10"></i>
                </div>
                <h6 class="mb-0">Backup Database</h6>
              </div>
            </div>
            <div class="card-body">
              <p class="text-sm">Backup terakhir: <span class="font-weight-bold">25 Desember 2024, 10:30 WIB</span></p>
              <div class="d-flex flex-column gap-2">
                <button type="button" class="btn bg-gradient-success" onclick="createBackup()">
                  <i class="ni ni-archive-2"></i> Buat Backup Sekarang
                </button>
                <button type="button" class="btn bg-gradient-info" onclick="downloadBackup()">
                  <i class="ni ni-cloud-download-95"></i> Download Backup Terakhir
                </button>
                <button type="button" class="btn bg-gradient-warning" onclick="scheduleBackup()">
                  <i class="ni ni-time-alarm"></i> Jadwalkan Backup Otomatis
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <div class="icon icon-shape icon-sm border-radius-md bg-gradient-dark text-center me-2">
                  <i class="ni ni-settings text-white opacity-10"></i>
                </div>
                <h6 class="mb-0">Maintenance Mode</h6>
              </div>
            </div>
            <div class="card-body">
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="maintenance_mode" name="maintenance_mode">
                <label class="form-check-label" for="maintenance_mode">
                  Aktifkan Mode Maintenance
                </label>
              </div>
              <div class="form-group">
                <label for="maintenance_message" class="form-control-label">Pesan Maintenance</label>
                <textarea class="form-control" id="maintenance_message" name="maintenance_message" rows="3" placeholder="Sistem sedang dalam pemeliharaan...">Sistem sedang dalam pemeliharaan. Silakan coba lagi nanti.</textarea>
              </div>
              <button type="button" class="btn bg-gradient-dark" onclick="toggleMaintenanceMode()">
                <i class="ni ni-settings"></i> Update Mode Maintenance
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- System Information -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <div class="icon icon-shape icon-sm border-radius-md bg-gradient-secondary text-center me-2">
                  <i class="ni ni-chart-pie-35 text-white opacity-10"></i>
                </div>
                <h6 class="mb-0">Informasi Sistem</h6>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="text-center">
                    <h4 class="font-weight-bolder text-info">{{ PHP_VERSION }}</h4>
                    <p class="mb-0 text-sm">PHP Version</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="text-center">
                    <h4 class="font-weight-bolder text-success">{{ app()->version() }}</h4>
                    <p class="mb-0 text-sm">Laravel Version</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="text-center">
                    <h4 class="font-weight-bolder text-warning" id="diskUsage">Loading...</h4>
                    <p class="mb-0 text-sm">Disk Usage</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="text-center">
                    <h4 class="font-weight-bolder text-danger" id="memoryUsage">Loading...</h4>
                    <p class="mb-0 text-sm">Memory Usage</p>
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="text-sm font-weight-bolder">Cache Status</h6>
                  <div class="d-flex gap-2">
                    <button type="button" class="btn btn-sm bg-gradient-info" onclick="clearCache('config')">
                      <i class="ni ni-settings"></i> Clear Config
                    </button>
                    <button type="button" class="btn btn-sm bg-gradient-warning" onclick="clearCache('route')">
                      <i class="ni ni-compass-04"></i> Clear Route
                    </button>
                    <button type="button" class="btn btn-sm bg-gradient-success" onclick="clearCache('view')">
                      <i class="ni ni-tv-2"></i> Clear View
                    </button>
                    <button type="button" class="btn btn-sm bg-gradient-danger" onclick="clearCache('all')">
                      <i class="ni ni-fat-remove"></i> Clear All
                    </button>
                  </div>
                </div>
                <div class="col-md-6">
                  <h6 class="text-sm font-weight-bolder">System Actions</h6>
                  <div class="d-flex gap-2">
                    <button type="button" class="btn btn-sm bg-gradient-primary" onclick="optimizeSystem()">
                      <i class="ni ni-spaceship"></i> Optimize
                    </button>
                    <button type="button" class="btn btn-sm bg-gradient-secondary" onclick="viewLogs()">
                      <i class="ni ni-collection"></i> View Logs
                    </button>
                    <button type="button" class="btn btn-sm bg-gradient-dark" onclick="systemHealth()">
                      <i class="ni ni-check-bold"></i> Health Check
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="#" class="font-weight-bold">FLEXIGADGET Team</a>
                for a better rental system.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted">FLEXIGADGET</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted">Support</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!-- Fixed Plugin -->
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

  <!-- Loading Modal -->
  <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <p class="mt-3 mb-0">Memproses permintaan...</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Core JS Files -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

  <!-- Custom JavaScript -->
  <script>
    // CSRF Token Setup
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    // Show Alert Function
    function showAlert(type, message) {
      const alertHtml = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert">
          <span class="alert-icon"><i class="ni ni-${type === 'success' ? 'check-bold' : 'fat-remove'}"></i></span>
          <span class="alert-text">${message}</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      `;
      $('#alertContainer').html(alertHtml);
      
      // Auto hide after 5 seconds
      setTimeout(() => {
        $('.alert').fadeOut();
      }, 5000);
    }

    // General Settings Form
    $('#generalSettingsForm').on('submit', function(e) {
      e.preventDefault();
      
      const formData = new FormData(this);
      
      $.ajax({
        url: '/admin/settings/general',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          showAlert('success', 'Pengaturan umum berhasil disimpan!');
        },
        error: function(xhr) {
          showAlert('danger', 'Gagal menyimpan pengaturan umum!');
        }
      });
    });

    // Rental Settings Form
    $('#rentalSettingsForm').on('submit', function(e) {
      e.preventDefault();
      
      const formData = new FormData(this);
      
      $.ajax({
        url: '/admin/settings/rental',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          showAlert('success', 'Pengaturan penyewaan berhasil disimpan!');
        },
        error: function(xhr) {
          showAlert('danger', 'Gagal menyimpan pengaturan penyewaan!');
        }
      });
    });

    // Notification Settings Form
    $('#notificationSettingsForm').on('submit', function(e) {
      e.preventDefault();
      
      const formData = new FormData(this);
      
      $.ajax({
        url: '/admin/settings/notification',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          showAlert('success', 'Pengaturan notifikasi berhasil disimpan!');
        },
        error: function(xhr) {
          showAlert('danger', 'Gagal menyimpan pengaturan notifikasi!');
        }
      });
    });

    // Security Settings Form
    $('#securitySettingsForm').on('submit', function(e) {
      e.preventDefault();
      
      const formData = new FormData(this);
      
      $.ajax({
        url: '/admin/settings/security',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          showAlert('success', 'Pengaturan keamanan berhasil disimpan!');
        },
        error: function(xhr) {
          showAlert('danger', 'Gagal menyimpan pengaturan keamanan!');
        }
      });
    });

    // Test Email Connection
    function testEmailConnection() {
      $('#loadingModal').modal('show');
      
      $.ajax({
        url: '/admin/settings/test-email',
        method: 'POST',
        success: function(response) {
          $('#loadingModal').modal('hide');
          showAlert('success', 'Koneksi email berhasil! Email test telah dikirim.');
        },
        error: function(xhr) {
          $('#loadingModal').modal('hide');
          showAlert('danger', 'Gagal menghubungkan ke server email!');
        }
      });
    }

    // Backup Functions
    function createBackup() {
      $('#loadingModal').modal('show');
      
      $.ajax({
        url: '/admin/backup/create',
        method: 'POST',
        success: function(response) {
          $('#loadingModal').modal('hide');
          showAlert('success', 'Backup database berhasil dibuat!');
        },
        error: function(xhr) {
          $('#loadingModal').modal('hide');
          showAlert('danger', 'Gagal membuat backup database!');
        }
      });
    }

    function downloadBackup() {
      window.open('/admin/backup/download', '_blank');
    }

    function scheduleBackup() {
      // Implementation for scheduling backup
      showAlert('info', 'Fitur jadwal backup otomatis akan segera tersedia!');
    }

    // Maintenance Mode
    function toggleMaintenanceMode() {
      const isEnabled = $('#maintenance_mode').is(':checked');
      const message = $('#maintenance_message').val();
      
      $.ajax({
        url: '/admin/maintenance/toggle',
        method: 'POST',
        data: {
          enabled: isEnabled,
          message: message
        },
        success: function(response) {
          showAlert('success', `Mode maintenance ${isEnabled ? 'diaktifkan' : 'dinonaktifkan'}!`);
        },
        error: function(xhr) {
          showAlert('danger', 'Gagal mengubah mode maintenance!');
        }
      });
    }

    // Cache Functions
    function clearCache(type) {
      $('#loadingModal').modal('show');
      
      $.ajax({
        url: '/admin/cache/clear',
        method: 'POST',
        data: { type: type },
        success: function(response) {
          $('#loadingModal').modal('hide');
          showAlert('success', `Cache ${type} berhasil dibersihkan!`);
        },
        error: function(xhr) {
          $('#loadingModal').modal('hide');
          showAlert('danger', `Gagal membersihkan cache ${type}!`);
        }
      });
    }

    // System Functions
    function optimizeSystem() {
      $('#loadingModal').modal('show');
      
      $.ajax({
        url: '/admin/system/optimize',
        method: 'POST',
        success: function(response) {
          $('#loadingModal').modal('hide');
          showAlert('success', 'Sistem berhasil dioptimalkan!');
        },
        error: function(xhr) {
          $('#loadingModal').modal('hide');
          showAlert('danger', 'Gagal mengoptimalkan sistem!');
        }
      });
    }

    function viewLogs() {
      window.open('/admin/logs', '_blank');
    }

    function systemHealth() {
      $('#loadingModal').modal('show');
      
      $.ajax({
        url: '/admin/system/health',
        method: 'GET',
        success: function(response) {
          $('#loadingModal').modal('hide');
          showAlert('success', 'Sistem dalam kondisi sehat!');
        },
        error: function(xhr) {
          $('#loadingModal').modal('hide');
          showAlert('warning', 'Ditemukan beberapa masalah pada sistem!');
        }
      });
    }

    // Load System Information
    function loadSystemInfo() {
      $.ajax({
        url: '/admin/system/info',
        method: 'GET',
        success: function(response) {
          $('#diskUsage').text(response.disk_usage + '%');
          $('#memoryUsage').text(response.memory_usage + 'MB');
        },
        error: function(xhr) {
          $('#diskUsage').text('N/A');
          $('#memoryUsage').text('N/A');
        }
      });
    }

    // Initialize
    $(document).ready(function() {
      loadSystemInfo();
      
      // Refresh system info every 30 seconds
      setInterval(loadSystemInfo, 30000);
    });

    // Sidebar scroll
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Control Center for Soft Dashboard -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>

