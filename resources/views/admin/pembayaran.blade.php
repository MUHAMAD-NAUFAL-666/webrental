<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    FLEXIGADGET
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <meta name="csrf-token" content="{{ csrf_token() }}">

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
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
        target="_blank">
        <img src="../assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100"
          alt="main_logo">
        <span class="ms-1 font-weight-bold">FLEXIGADGET Tim</span>
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
          <a class="nav-link active" href="/pembayaran">
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
          <a class="nav-link " href="laporan">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-reports text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan & Analisis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pengaturan">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-settings text-dark text-sm opacity-10"></i>
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
                <i class="ni ni-log-out text-dark text-sm opacity-10"></i>
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
                <input type="text" class="form-control" placeholder="Type here...">
              </div>
            </div>
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center"
                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
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

    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
          <h6>Data Pembayaran Penyewaan</h6>
          <div class="col-md-2">
            <select class="form-select" id="statusFilter">
              <option value="all">Semua Status</option>
              <option value="sewa">Sewa</option>
              <option value="lunas">Lunas</option>
            </select>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Transaksi</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Penyewa</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Device</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Sewa</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Durasi</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Bayar</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Pembayaran</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($penyewaan as $sewa)
          <tr>
            <td class="align-middle px-3">
            <span class="text-sm font-weight-bold">TRX-{{ $sewa->id }}</span>
            </td>
            <td class="align-middle px-3">
            <div class="d-flex px-2">
              <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">{{ $sewa->nama }}</h6>
              <p class="text-xs text-secondary mb-0">{{ $sewa->email }}</p>
              </div>
            </div>
            </td>
            <td class="align-middle px-3">
            <span class="text-sm">{{ $sewa->merek }}</span>
            </td>
            <td class="align-middle px-3">
            <span class="text-sm">{{ $sewa->tanggal_sewa }}</span>
            </td>
            <td class="align-middle px-3">
            <span class="text-sm">{{ $sewa->durasi }} hari</span>
            </td>
            <td class="align-middle px-3">
            <span class="text-sm">Rp {{ number_format($sewa->harga_sewa, 0, ',', '.') }}</span>
            </td>
            <td class="align-middle px-3">
            <span class="badge badge-sm bg-{{ $sewa->status == 'sewa' ? 'warning' : 'success' }}">
              {{ $sewa->status }}
            </span>
            </td>
            <td class="align-middle px-3">
            <button class="btn btn-sm btn-info" onclick="showDetail({{ $sewa->id }})">Detail</button>
            <button class="btn btn-sm btn-success"
              onclick="konfirmasiPembayaran({{ $sewa->id}})">Konfirmasi</button>
            <div class="btn-group">
              <button class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fas fa-download"></i>
              </button>
              <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{ route('export.transaksi.pdf', ['id' => $sewa->id]) }}">
                <i class="fas fa-file-pdf me-2"></i>PDF
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('export.transaksi.excel', ['id' => $sewa->id]) }}">
                <i class="fas fa-file-excel me-2"></i>Excel
                </a>
              </li>
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

    <!-- Detail Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-gradient-primary">
            <h5 class="modal-title text-white" id="detailModalLabel">
              <i class="fas fa-info-circle me-2"></i>Detail Informasi Penyewaan
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <div class="row">
              <!-- Left Column -->
              <div class="col-md-6 border-end">
                <div class="d-flex align-items-center mb-4">
                  <div class="avatar avatar-xl position-relative me-3">
                    <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                  </div>
                  <div>
                    <h6 class="mb-0" id="detail-nama"></h6>
                    <p class="text-sm text-muted mb-0" id="detail-email"></p>
                  </div>
                </div>

                <div class="info-card bg-light p-3 rounded mb-3">
                  <h6 class="text-primary mb-3">Informasi Transaksi</h6>
                  <div class="d-flex justify-content-between mb-2">
                    <span class="text-dark">ID Transaksi:</span>
                    <strong id="detail-id" class="text-primary"></strong>
                  </div>
                  <div class="d-flex justify-content-between mb-2">
                    <span class="text-dark">Status:</span>
                    <span id="detail-status" class="badge bg-gradient-success"></span>
                  </div>
                </div>
              </div>

              <!-- Right Column -->
              <div class="col-md-6">
                <div class="info-card bg-light p-3 rounded mb-3">
                  <h6 class="text-primary mb-3">Detail Penyewaan</h6>
                  <div class="mb-3">
                    <label class="text-sm text-muted">Device</label>
                    <h6 id="detail-device" class="mb-2"></h6>
                  </div>
                  <div class="mb-3">
                    <label class="text-sm text-muted">Tanggal Sewa</label>
                    <h6 id="detail-tanggal" class="mb-2"></h6>
                  </div>
                  <div class="mb-3">
                    <label class="text-sm text-muted">Durasi Sewa</label>
                    <h6 id="detail-durasi" class="mb-2"></h6>
                  </div>
                  <div class="mb-3">
                    <label class="text-sm text-muted">Total Pembayaran</label>
                    <h6 id="detail-total" class="text-primary fw-bold mb-2"></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer bg-light">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn bg-gradient-primary">Cetak Invoice</button>
          </div>
        </div>
      </div>
    </div>

    <!-- End Navbar -->

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
  </script>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Add this in the head section -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>

  <script>
    function konfirmasiPembayaran(id) {
      Swal.fire({
        title: 'Konfirmasi Pembayaran',
        text: "Apakah anda yakin ingin mengkonfirmasi pembayaran ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Konfirmasi',
        cancelButtonText: 'Tidak'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: `/konfirmasi-pembayaran/${id}`,
            type: 'POST',
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
              Swal.fire(
                'Berhasil!',
                'Status pembayaran telah diubah menjadi lunas.',
                'success'
              ).then(() => {
                location.reload();
              });
            }
          });
        }
      });
    }
    function showDetail(id) {
      // Find the corresponding row data
      const row = Array.from(document.querySelectorAll('tbody tr')).find(tr => {
        return tr.querySelector('td:first-child').textContent.includes(id);
      });

      if (row) {
        // Get all data from the row
        const cells = row.querySelectorAll('td');

        // Populate modal with data
        document.getElementById('detail-id').textContent = cells[0].textContent.trim();
        document.getElementById('detail-nama').textContent = cells[1].querySelector('h6').textContent.trim();
        document.getElementById('detail-email').textContent = cells[1].querySelector('p').textContent.trim();
        document.getElementById('detail-device').textContent = cells[2].textContent.trim();
        document.getElementById('detail-tanggal').textContent = cells[3].textContent.trim();
        document.getElementById('detail-durasi').textContent = cells[4].textContent.trim();
        document.getElementById('detail-total').textContent = cells[5].textContent.trim();
        document.getElementById('detail-status').textContent = cells[6].textContent.trim();

        // Show the modal
        const modal = new bootstrap.Modal(document.getElementById('detailModal'));
        modal.show();
      }
    }

    // Add this to your existing script section
    document.querySelector('.btn.bg-gradient-primary').addEventListener('click', function () {
      const id = document.getElementById('detail-id').textContent.replace('TRX-', '');
      window.open(`/cetak-invoice/${id}`, '_blank');
    });

    document.getElementById('statusFilter').addEventListener('change', function () {
      const status = this.value;
      const rows = document.querySelectorAll('tbody tr');

      rows.forEach(row => {
        const statusCell = row.querySelector('td:nth-child(7)');
        const statusText = statusCell.textContent.trim().toLowerCase();

        if (status === 'all' || statusText === status) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });

  </script>
</body>

</html>