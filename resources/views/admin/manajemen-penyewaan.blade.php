<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>
        Manajemen Penyewaan - FlexiGadget
    </title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        /* Improved Card Styling */
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: none;
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 25px;
            border-bottom: none;
            position: relative;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .card-header h6 {
            position: relative;
            z-index: 1;
            margin: 0;
            font-size: 1.25rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .card-body {
            padding: 0;
            background: #fff;
        }

        /* Enhanced Table Styling */
        .table {
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table thead th {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            color: #495057;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 20px 15px;
            border: none;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #f1f3f4;
        }

        .table tbody tr:hover {
            background-color: #f8f9ff;
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .table tbody td {
            padding: 20px 15px;
            vertical-align: middle;
            border: none;
            font-size: 0.875rem;
        }

        /* Status Badge Improvements */
        .badge {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .bg-warning {
            background: linear-gradient(135deg, #ffc107 0%, #ff8f00 100%) !important;
            color: #fff !important;
        }

        .bg-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
            color: #fff !important;
        }

        /* Enhanced Button Styling */
        .btn {
            border-radius: 8px;
            padding: 8px 16px;
            font-size: 0.8rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-info {
            background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
            color: #fff;
            box-shadow: 0 2px 8px rgba(23, 162, 184, 0.3);
        }

        .btn-info:hover {
            background: linear-gradient(135deg, #138496 0%, #117a8b 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(23, 162, 184, 0.4);
            color: #fff;
        }

        .btn-danger {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: #fff;
            box-shadow: 0 2px 8px rgba(220, 53, 69, 0.3);
        }

        .btn-danger:hover {
            background: linear-gradient(135deg, #c82333 0%, #bd2130 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
            color: #fff;
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: #fff;
            box-shadow: 0 2px 8px rgba(0, 123, 255, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #0056b3 0%, #004085 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.4);
            color: #fff;
        }

        /* User Info Styling */
        .user-info h6 {
            color: #495057;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .price-info {
            color: #28a745;
            font-weight: 600;
        }

        .date-info {
            color: #6c757d;
            font-size: 0.85rem;
        }

        /* Modal Improvements */
        .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 20px 25px;
            border-bottom: none;
        }

        .modal-title {
            font-weight: 600;
            font-size: 1.25rem;
        }

        .btn-close {
            filter: brightness(0) invert(1);
        }

        .modal-body {
            padding: 25px;
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border-radius: 8px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        /* Action Buttons Container */
        .action-buttons {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .table-responsive {
                border-radius: 10px;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 5px;
            }
            
            .btn {
                font-size: 0.75rem;
                padding: 6px 12px;
            }
        }

        /* Loading Animation */
        .table tbody tr.loading {
            opacity: 0.6;
            pointer-events: none;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.5;
        }
    </style>
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
                <span class="ms-1 font-weight-bold">Creative Tim</span>
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
                    <a class="nav-link active" href="/manajemen-penyewaan">
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
                            <img src="../assets/img/team-1.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
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
                                <span class="input-group-text text-body"><i class="fas fa-search"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Cari penyewaan..." id="searchInput">
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

        <div class="container-fluid py-4">
            <div class="row">
                <!-- Manajemen Penyewaan -->
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">
                                    <i class="ni ni-app me-2"></i>
                                    MANAJEMEN PENYEWAAN
                                </h6>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-info me-2">
                                        Total: {{ count($penyewaan) }} Penyewaan
                                    </span>
                                    <button class="btn btn-sm btn-outline-primary" onclick="refreshData()">
                                        <i class="fas fa-sync-alt me-1"></i>
                                        Refresh
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0" id="penyewaanTable">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fas fa-user me-1"></i>
                                                Penyewa
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fas fa-mobile-alt me-1"></i>
                                                Barang
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fas fa-tag me-1"></i>
                                                Merek
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fas fa-money-bill-wave me-1"></i>
                                                Harga Sewa
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fas fa-calendar-alt me-1"></i>
                                                Tanggal Sewa
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fas fa-info-circle me-1"></i>
                                                Status
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fas fa-cogs me-1"></i>
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($penyewaan as $p)
                                            <tr class="rental-row" data-id="{{ $p->id }}">
                                                <td class="align-middle">
                                                    <div class="d-flex px-3 align-items-center">
                                                        <div class="avatar avatar-sm me-3">
                                                            <div class="avatar-initial rounded-circle bg-gradient-primary">
                                                                <i class="fas fa-user text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center user-info">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $users->find($p->id_user)->name ?? 'Tidak diketahui' }}
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">
                                                                ID: #{{ str_pad($p->id_user, 4, '0', STR_PAD_LEFT) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex px-3 align-items-center">
                                                        <div class="avatar avatar-sm me-3">
                                                            <div class="avatar-initial rounded-circle bg-gradient-info">
                                                                <i class="fas fa-mobile-alt text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm font-weight-bold">{{ $p->nama }}</h6>
                                                            <p class="text-xs text-secondary mb-0">Gadget Premium</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle px-3">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-sm bg-gradient-secondary me-2">
                                                            {{ $p->merek }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle px-3">
                                                    <div class="d-flex flex-column">
                                                        <span class="text-sm font-weight-bold price-info">
                                                            Rp {{ number_format($p->harga_sewa, 0, ',', '.') }}
                                                        </span>
                                                        <span class="text-xs text-secondary">per bulan</span>
                                                    </div>
                                                </td>
                                                <td class="align-middle px-3">
                                                    <div class="d-flex flex-column">
                                                        <span class="text-sm font-weight-bold date-info">
                                                            {{ \Carbon\Carbon::parse($p->tanggal_sewa)->format('d M Y') }}
                                                        </span>
                                                        <span class="text-xs text-secondary">
                                                            {{ \Carbon\Carbon::parse($p->tanggal_sewa)->diffForHumans() }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle px-3">
                                                    <span class="badge badge-sm bg-{{ $p->status == 'sewa' ? 'warning' : 'success' }}">
                                                        <i class="fas fa-{{ $p->status == 'sewa' ? 'clock' : 'check' }} me-1"></i>
                                                        {{ ucfirst($p->status) }}
                                                    </span>
                                                </td>
                                                <td class="align-middle px-3">
                                                    <div class="action-buttons">
                                                        <button class="btn btn-info btn-sm" 
                                                            onclick="showEditPenyewaanModal({{ $p->id }}, '{{ $p->nama }}', '{{ $p->merek }}', '{{ $p->harga_sewa }}', '{{ $p->status }}')"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Penyewaan">
                                                            <i class="fas fa-edit me-1"></i>
                                                            Edit
                                                        </button>
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="confirmDelete('penyewaan', {{ $p->id_sewa }})"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Penyewaan">
                                                            <i class="fas fa-trash me-1"></i>
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    <div class="empty-state">
                                                        <i class="fas fa-inbox"></i>
                                                        <h5>Belum Ada Data Penyewaan</h5>
                                                        <p>Data penyewaan akan muncul di sini ketika ada transaksi baru.</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Modal Edit -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">
                                <i class="fas fa-edit me-2"></i>
                                Edit Data Penyewaan
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editForm">
                                @csrf
                                <input type="hidden" id="editId">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editNama" class="form-label">
                                                <i class="fas fa-mobile-alt me-1"></i>
                                                Nama Barang
                                            </label>
                                            <input type="text" class="form-control" id="editNama" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editMerek" class="form-label">
                                                <i class="fas fa-tag me-1"></i>
                                                Merek
                                            </label>
                                            <input type="text" class="form-control" id="editMerek" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editOs" class="form-label">
                                                <i class="fas fa-desktop me-1"></i>
                                                Sistem Operasi
                                            </label>
                                            <input type="text" class="form-control" id="editOs" placeholder="Contoh: Android 14">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editRam" class="form-label">
                                                <i class="fas fa-memory me-1"></i>
                                                RAM
                                            </label>
                                            <input type="text" class="form-control" id="editRam" placeholder="Contoh: 8GB">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editStorage" class="form-label">
                                                <i class="fas fa-hdd me-1"></i>
                                                Storage
                                            </label>
                                            <input type="text" class="form-control" id="editStorage" placeholder="Contoh: 256GB">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editHargaSewa" class="form-label">
                                                <i class="fas fa-money-bill-wave me-1"></i>
                                                Harga Sewa (per bulan)
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text">Rp</span>
                                                <input type="number" class="form-control" id="editHargaSewa" placeholder="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="editStatus" class="form-label">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Status Penyewaan
                                    </label>
                                    <select id="editStatus" class="form-select">
                                        <option value="">Pilih Status</option>
                                        <option value="sewa">Sedang Disewa</option>
                                        <option value="selesai">Selesai</option>
                                        <option value="terlambat">Terlambat</option>
                                    </select>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        <i class="fas fa-times me-1"></i>
                                        Batal
                                    </button>
                                    <button type="button" class="btn btn-primary" onclick="updateData()">
                                        <i class="fas fa-save me-1"></i>
                                        Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
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
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
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
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });

        // Enhanced Edit Modal Function
        function showEditPenyewaanModal(id, nama, merek, hargaSewa, status) {
            // Reset form
            document.getElementById('editForm').reset();
            
            // Fill form with data
            document.getElementById('editId').value = id;
            document.getElementById('editNama').value = nama;
            document.getElementById('editMerek').value = merek;
            document.getElementById('editHargaSewa').value = hargaSewa;
            document.getElementById('editStatus').value = status;

            // Show modal with animation
            let modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
        }

        // Enhanced Delete Confirmation
        function confirmDelete(type, id_sewa) {
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: "Apakah Anda yakin ingin menghapus data penyewaan ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: '<i class="fas fa-trash me-1"></i> Ya, Hapus!',
                cancelButtonText: '<i class="fas fa-times me-1"></i> Batal',
                reverseButtons: true,
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-secondary'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading
                    Swal.fire({
                        title: 'Menghapus...',
                        text: 'Mohon tunggu sebentar',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    
                    // Redirect to delete
                    window.location.href = `/delete-${type}/${id_sewa}`;
                }
            });
        }

        // Update Data Function
        function updateData() {
            const form = document.getElementById('editForm');
            const formData = new FormData(form);
            
            // Show loading
            Swal.fire({
                title: 'Menyimpan...',
                text: 'Mohon tunggu sebentar',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Simulate API call (replace with actual implementation)
            setTimeout(() => {
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Data penyewaan berhasil diperbarui',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-success'
                    },
                    buttonsStyling: false
                }).then(() => {
                    // Close modal and refresh page
                    bootstrap.Modal.getInstance(document.getElementById('editModal')).hide();
                    location.reload();
                });
            }, 1500);
        }

        // Search Functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('#penyewaanTable tbody tr:not(.empty-state)');
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                    row.classList.add('fade-in');
                } else {
                    row.style.display = 'none';
                    row.classList.remove('fade-in');
                }
            });
        });

        // Refresh Data Function
        function refreshData() {
            const refreshBtn = document.querySelector('[onclick="refreshData()"]');
            const icon = refreshBtn.querySelector('i');
            
            // Add spinning animation
            icon.classList.add('fa-spin');
            refreshBtn.disabled = true;
            
            // Simulate refresh (replace with actual implementation)
            setTimeout(() => {
                icon.classList.remove('fa-spin');
                refreshBtn.disabled = false;
                
                // Show success message
                Swal.fire({
                    title: 'Data Diperbarui!',
                    text: 'Data penyewaan telah diperbarui',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false,
                    toast: true,
                    position: 'top-end'
                });
            }, 1000);
        }

        // Add fade-in animation class
        const style = document.createElement('style');
        style.textContent = `
            .fade-in {
                animation: fadeIn 0.3s ease-in;
            }
            
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"90b1ee70bee1f92c","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.1.0","token":"1b7cbb72744b40c580f8633c6b62637e"}'
        crossorigin="anonymous"></script>

</body>

</html>

