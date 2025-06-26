<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Manajemen Pengguna - FLEXIGADGET
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
</head>

<body class="g-sidenav-show   bg-gray-100">
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
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
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
          <a class="nav-link active" href="/manajemen-pengguna">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Pengguna</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/laporan">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-bar-32 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan & Analisis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/pengaturan">
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
                <input type="text" class="form-control" placeholder="Cari pengguna..." id="searchUser">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-4">
      <!-- Statistics Cards -->
      <div class="row mb-4">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Pengguna</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $users->count() }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Customer</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $users->where('role', 'customer')->count() }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Admin</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $users->where('role', 'admin')->count() }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                    <i class="ni ni-badge text-lg opacity-10" aria-hidden="true"></i>
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
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Aktif</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $users->where('status', 'active')->count() }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                    <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- table pengguna -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h6>Daftar Pengguna</h6>
              <div class="dropdown">
                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  Filter Role
                </button>
                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                  <li><a class="dropdown-item" href="#" onclick="filterByRole('all')">Semua</a></li>
                  <li><a class="dropdown-item" href="#" onclick="filterByRole('admin')">Admin</a></li>
                  <li><a class="dropdown-item" href="#" onclick="filterByRole('customer')">Customer</a></li>
                </ul>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="usersTable">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengguna</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Daftar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email Verified</th>
                      <th class="text-secondary opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr class="user-row" data-role="{{ $user->role }}">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                            @if($user->google_id)
                              <p class="text-xs text-secondary mb-0">
                                <i class="fab fa-google text-danger"></i> Google Account
                              </p>
                            @endif
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-{{ $user->role == 'admin' ? 'primary' : 'info' }}">
                          {{ ucfirst($user->role) }}
                        </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-{{ $user->status == 'active' ? 'success' : 'danger' }}">
                          {{ $user->status == 'active' ? 'Aktif' : 'Tidak Aktif' }}
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">
                          {{ $user->created_at->format('d/m/Y H:i') }}
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        @if($user->email_verified_at)
                          <span class="badge badge-sm bg-gradient-success">
                            <i class="ni ni-check-bold"></i> Verified
                          </span>
                        @else
                          <span class="badge badge-sm bg-gradient-warning">
                            <i class="ni ni-fat-remove"></i> Unverified
                          </span>
                        @endif
                      </td>
                      <td class="align-middle">
                        <div class="dropdown">
                          <button class="btn btn-link text-secondary font-weight-bold text-xs dropdown-toggle" type="button" id="dropdownMenuButton{{ $user->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                            Aksi
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $user->id }}">
                            <li>
                              <a class="dropdown-item" href="#" onclick="viewUser({{ $user->id }})">
                                <i class="ni ni-single-02"></i> Lihat Detail
                              </a>
                            </li>
                            @if($user->id !== Auth::id())
                            <li>
                              <a class="dropdown-item" href="#" onclick="editUser({{ $user->id }})">
                                <i class="ni ni-ruler-pencil"></i> Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#" onclick="toggleStatus({{ $user->id }}, '{{ $user->status }}')">
                                <i class="ni ni-button-power"></i> 
                                {{ $user->status == 'active' ? 'Nonaktifkan' : 'Aktifkan' }}
                              </a>
                            </li>
                            @if($user->role !== 'admin')
                            <li><hr class="dropdown-divider"></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#" onclick="deleteUser({{ $user->id }})">
                                <i class="ni ni-fat-remove"></i> Hapus
                              </a>
                            </li>
                            @endif
                            @endif
                          </ul>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end pengguna -->

      <!-- Modal View User Detail -->
      <div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewUserModalLabel">Detail Pengguna</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Nama Lengkap</label>
                    <p class="form-control-static" id="viewUserName"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Email</label>
                    <p class="form-control-static" id="viewUserEmail"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Role</label>
                    <p class="form-control-static" id="viewUserRole"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Status</label>
                    <p class="form-control-static" id="viewUserStatus"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Tanggal Daftar</label>
                    <p class="form-control-static" id="viewUserCreated"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Email Verified</label>
                    <p class="form-control-static" id="viewUserVerified"></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label">Google Account</label>
                    <p class="form-control-static" id="viewUserGoogle"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Edit User -->
      <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel">Edit Pengguna</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editUserForm">
              @csrf
              @method('PUT')
              <div class="modal-body">
                <input type="hidden" id="editUserId">
                <div class="form-group">
                  <label for="editUserNameInput" class="form-control-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="editUserNameInput" required>
                </div>
                <div class="form-group">
                  <label for="editUserEmailInput" class="form-control-label">Email</label>
                  <input type="email" class="form-control" id="editUserEmailInput" required>
                </div>
                <div class="form-group">
                  <label for="editUserRoleInput" class="form-control-label">Role</label>
                  <select class="form-control" id="editUserRoleInput" required>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="editUserStatusInput" class="form-control-label">Status</label>
                  <select class="form-control" id="editUserStatusInput" required>
                    <option value="active">Aktif</option>
                    <option value="inactive">Tidak Aktif</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
              </div>
            </form>
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
                <a href="#" class="font-weight-bold" target="_blank">FLEXIGADGET</a>
                for a better rental experience.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">FLEXIGADGET</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

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

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    // Search functionality
    document.getElementById('searchUser').addEventListener('keyup', function() {
    // Search functionality
    document.getElementById('searchUser').addEventListener('keyup', function() {
      const searchTerm = this.value.toLowerCase();
      const rows = document.querySelectorAll('#usersTable tbody tr');
      
      rows.forEach(row => {
        const name = row.querySelector('h6').textContent.toLowerCase();
        const email = row.querySelector('p.text-xs').textContent.toLowerCase();
        
        if (name.includes(searchTerm) || email.includes(searchTerm)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });

    // Filter by role
    function filterByRole(role) {
      const rows = document.querySelectorAll('.user-row');
      
      rows.forEach(row => {
        if (role === 'all' || row.getAttribute('data-role') === role) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    }

    // View user details
    function viewUser(userId) {
      fetch(`/admin/users/${userId}`)
        .then(response => response.json())
        .then(data => {
          document.getElementById('viewUserName').textContent = data.name;
          document.getElementById('viewUserEmail').textContent = data.email;
          document.getElementById('viewUserRole').innerHTML = `<span class="badge bg-${data.role === 'admin' ? 'primary' : 'info'}">${data.role.charAt(0).toUpperCase() + data.role.slice(1)}</span>`;
          document.getElementById('viewUserStatus').innerHTML = `<span class="badge bg-${data.status === 'active' ? 'success' : 'danger'}">${data.status === 'active' ? 'Aktif' : 'Tidak Aktif'}</span>`;
          document.getElementById('viewUserCreated').textContent = new Date(data.created_at).toLocaleString('id-ID');
          document.getElementById('viewUserVerified').innerHTML = data.email_verified_at ? 
            '<span class="badge bg-success"><i class="ni ni-check-bold"></i> Verified</span>' : 
            '<span class="badge bg-warning"><i class="ni ni-fat-remove"></i> Unverified</span>';
          document.getElementById('viewUserGoogle').textContent = data.google_id ? 
            'Ya, terhubung dengan Google' : 'Tidak terhubung dengan Google';
          
          new bootstrap.Modal(document.getElementById('viewUserModal')).show();
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat mengambil data pengguna');
        });
    }

    // Edit user
    function editUser(userId) {
      fetch(`/admin/users/${userId}`)
        .then(response => response.json())
        .then(data => {
          document.getElementById('editUserId').value = data.id;
          document.getElementById('editUserNameInput').value = data.name;
          document.getElementById('editUserEmailInput').value = data.email;
          document.getElementById('editUserRoleInput').value = data.role;
          document.getElementById('editUserStatusInput').value = data.status;
          
          new bootstrap.Modal(document.getElementById('editUserModal')).show();
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat mengambil data pengguna');
        });
    }

    // Handle edit form submission
    document.getElementById('editUserForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const userId = document.getElementById('editUserId').value;
      const formData = new FormData();
      formData.append('_token', document.querySelector('input[name="_token"]').value);
      formData.append('_method', 'PUT');
      formData.append('name', document.getElementById('editUserNameInput').value);
      formData.append('email', document.getElementById('editUserEmailInput').value);
      formData.append('role', document.getElementById('editUserRoleInput').value);
      formData.append('status', document.getElementById('editUserStatusInput').value);

      fetch(`/admin/users/${userId}`, {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Data pengguna berhasil diperbarui');
          location.reload();
        } else {
          alert('Terjadi kesalahan: ' + data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat memperbarui data pengguna');
      });
    });

    // Toggle user status
    function toggleStatus(userId, currentStatus) {
      const newStatus = currentStatus === 'active' ? 'inactive' : 'active';
      const action = newStatus === 'active' ? 'mengaktifkan' : 'menonaktifkan';
      
      if (confirm(`Apakah Anda yakin ingin ${action} pengguna ini?`)) {
        const formData = new FormData();
        formData.append('_token', document.querySelector('input[name="_token"]').value);
        formData.append('_method', 'PATCH');
        formData.append('status', newStatus);

        fetch(`/admin/users/${userId}/toggle-status`, {
          method: 'POST',
          body: formData,
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert(`Status pengguna berhasil ${newStatus === 'active' ? 'diaktifkan' : 'dinonaktifkan'}`);
            location.reload();
          } else {
            alert('Terjadi kesalahan: ' + data.message);
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat mengubah status pengguna');
        });
      }
    }

    // Delete user
    function deleteUser(userId) {
      if (confirm('Apakah Anda yakin ingin menghapus pengguna ini? Tindakan ini tidak dapat dibatalkan.')) {
        const formData = new FormData();
        formData.append('_token', document.querySelector('input[name="_token"]').value);
        formData.append('_method', 'DELETE');

        fetch(`/admin/users/${userId}`, {
          method: 'POST',
          body: formData,
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert('Pengguna berhasil dihapus');
            location.reload();
          } else {
            alert('Terjadi kesalahan: ' + data.message);
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat menghapus pengguna');
        });
      }
    }

    // Add CSRF token to head if not exists
    if (!document.querySelector('meta[name="csrf-token"]')) {
      const meta = document.createElement('meta');
      meta.name = 'csrf-token';
      meta.content = '{{ csrf_token() }}';
      document.getElementsByTagName('head')[0].appendChild(meta);
    }
  </script>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>
