<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <!-- Add this in the head section -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>
        FlexiGadget manajemen-barang
    </title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="../assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100"
                    alt="main_logo">
                <span class="ms-1 font-weight-bold">FlexiGadget </span>
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
                    <a class="nav-link active   " href="/manajemen-barang">
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
                                <input type="text" class="form-control" placeholder="Type here...">
                            </div>
                        </div>
                        <div class="nav-wrapper position-relative end-0">
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

        <div class="tab-content">
            <div class="tab-pane active" id="app-content">
                <div class="container-fluid py-4">
                    <div class="row">
                        <!-- Manajemen Handphone -->
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <h6>Manajemen Handphone</h6>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                        data-bs-target="#tambahHandphoneModal">Tambah Handphone</a>
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nama</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Merek</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    OS</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Storage</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Kamera</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Baterai</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Chipset</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jaringan</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Layar</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Harga Sewa</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Status</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($handphone as $h)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex ">
                                                            <div class="avatar avatar-xl position-relative">
                                                                @if($h->gambar)
                                                                    <img src="{{ Storage::url($h->gambar) }}"
                                                                        alt="handphone image"
                                                                        class="w-100 border-radius-lg shadow-sm">
                                                                @else
                                                                    <img src="{{ asset('assets/img/default-handphone.jpg') }}"
                                                                        alt="default handphone image"
                                                                        class="w-100 border-radius-lg shadow-sm">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="d-flex px-3">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $h->nama }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm font-weight-bold">{{ $h->merek }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $h->os }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $h->ram }}/{{ $h->storage }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $h->kamera }}MP</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $h->baterai }}mAh</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <ion class="text-sm">{{ $h->jaringan }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $h->chipset }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $h->layar }}" Display</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">Rp
                                                            {{ number_format($h->harga_sewa, 0, ',', '.') }}/Bln</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span
                                                            class="badge badge-sm bg-{{ $h->status == 'Tersedia' ? 'success' : 'danger' }}">{{ $h->status }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <a href="javascript:;"
                                                            class="text-secondary font-weight-bold text-xs"
                                                            data-toggle="tooltip" data-original-title="Edit user"
                                                            onclick="showEditModal({{ $h->id }}, '{{ $h->nama }}', '{{ $h->gambar }}','{{ $h->chipset }}', '{{ $h->jaringan }}','{{ $h->baterai }}', '{{ $h->layar }}','{{ $h->kamera }}', '{{ $h->merek }}', '{{ $h->kategori }}', '{{ $h->os }}', '{{ $h->ram }}', '{{ $h->storage }}', '{{ $h->harga_sewa }}', '{{ $h->status }}')">
                                                            Edit
                                                        </a>/
                                                        <a href="javascript:;" class="text-danger font-weight-bold text-xs"
                                                            data-toggle="tooltip" data-original-title="Delete user"
                                                            onclick="confirmDelete('handphone', {{ $h->id }})">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Manajemen Laptop -->
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <h6>Manajemen Laptop</h6>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                        data-bs-target="#tambahLaptopModal">Tambah Laptop</a>
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nama</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Merek</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Prosesor</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Baterai</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Layar</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Kategori</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    OS</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Storage</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Harga Sewa</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Status</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($laptop as $l)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex ">
                                                            <div class="avatar avatar-xl position-relative">
                                                                @if($l->gambar)
                                                                    <img src="{{ Storage::url($l->gambar) }}" alt="laptop image"
                                                                        class="w-100 border-radius-lg shadow-sm">
                                                                @else
                                                                    <img src="{{ asset('assets/img/default-laptop.jpg') }}"
                                                                        alt="default laptop image"
                                                                        class="w-100 border-radius-lg shadow-sm">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="d-flex px-3">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $l->nama }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm font-weight-bold">{{ $l->merek }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm font-weight-bold">{{ $l->prosesor}}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm font-weight-bold">{{ $l->baterai }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm font-weight-bold">{{ $l->layar }}</span>
                                                    </td>

                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $l->kategori }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $l->os }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">{{ $l->ram }}/{{ $l->storage }}</span>
                                                    </td>

                                                    <td class="align-middle px-3">
                                                        <span class="text-sm">Rp
                                                            {{ number_format($l->harga_sewa, 0, ',', '.') }}/Bln</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <span
                                                            class="badge badge-sm bg-{{ $l->status == 'Tersedia' ? 'success' : 'danger' }}">{{ $l->status }}</span>
                                                    </td>
                                                    <td class="align-middle px-3">
                                                        <a href="javascript:;"
                                                            class="text-secondary font-weight-bold text-xs"
                                                            data-toggle="tooltip" data-original-title="Edit user"
                                                            onclick="showEditLaptopModal({{ $l->id }}, '{{ $l->nama }}', '{{ $l->gambar }}','{{ $l->layar }}','{{ $l->baterai }}','{{ $l->prosesor }}','{{ $l->merek }}', '{{ $l->kategori }}', '{{ $l->os }}', '{{ $l->ram }}', '{{ $l->storage }}', {{ $l->harga_sewa }}, '{{ $l->status }}')">
                                                            Edit
                                                        </a>
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="confirmDelete('laptop', {{ $l->id }})">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Handphone</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editForm">
                                        @csrf
                                        <input type="hidden" id="editId">
                                        <div class="mb-3">
                                            <label for="editGambar" class="form-label">Gambar</label>
                                            <input type="file" class="form-control" id="editGambar" accept="image/*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="editNama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="editNama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editMerek" class="form-label">Merek</label>
                                            <input type="text" class="form-control" id="editMerek" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editJaringan" class="form-label">Jaringan</label>
                                            <input type="text" class="form-control" id="editJaringan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editBaterai" class="form-label">Baterai</label>
                                            <input type="text" class="form-control" id="editBaterai" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editLayar" class="form-label">Layar</label>
                                            <input type="text" class="form-control" id="editLayar" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editChipset" class="form-label">Chipset</label>
                                            <input type="text" class="form-control" id="editChipset" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editKamera" class="form-label">Kamera</label>
                                            <input type="text" class="form-control" id="editKamera" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editOs" class="form-label">OS</label>
                                            <select id="editOs" class="form-control">
                                                <option value="Android">Android</option>
                                                <option value="IOS">IOS</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editRam" class="form-label">RAM</label>
                                            <select id="editRam" class="form-control">
                                                <option value="4GB">4GB</option>
                                                <option value="8GB">8GB</option>
                                                <option value="16GB">16GB</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editStorage" class="form-label">Storage</label>
                                            <select id="editStorage" class="form-control">
                                                <option value="128GB">128GB</option>
                                                <option value="256GB">256GB</option>
                                                <option value="512GB">512GB</option>
                                                <option value="1TB">1TB</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editHargaSewa" class="form-label">Harga Sewa</label>
                                            <input type="number" class="form-control" id="editHargaSewa">
                                        </div>
                                        <div class="mb-3">
                                            <label for="editStatus" class="form-label">Status</label>
                                            <select id="editStatus" class="form-control">
                                                <option value="Tersedia">Tersedia</option>
                                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-primary"
                                            onclick="updateData()">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Edit Laptop -->
                    <div class="modal fade" id="editLaptopModal" tabindex="-1" aria-labelledby="editLaptopModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editLaptopModalLabel">Edit Laptop</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editLaptopForm">
                                        @csrf
                                        <input type="hidden" id="editLaptopId">
                                        <div class="mb-3">
                                            <label for="editGambar" class="form-label">Gambar</label>
                                            <input type="file" class="form-control" id="editLaptopGambar"
                                                accept="image/*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="editNama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="editLaptopNama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editMerek" class="form-label">Merek</label>
                                            <input type="text" class="form-control" id="editLaptopMerek" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editLayar" class="form-label">Layar</label>
                                            <input type="text" class="form-control" id="editLaptopLayar" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editLaptopProsesor" class="form-label">Prosesor</label>
                                            <input type="text" class="form-control" id="editLaptopProsesor" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editBaterai" class="form-label">Baterai</label>
                                            <input type="text" class="form-control" id="editLaptopBaterai" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editKategori" class="form-label">Kategori</label>
                                            <input type="text" class="form-control" id="editLaptopKategori" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editOs" class="form-label">OS</label>
                                            <input type="text" class="form-control" id="editLaptopOs">
                                        </div>
                                        <div class="mb-3">
                                            <label for="editRam" class="form-label">RAM</label>
                                            <input type="text" class="form-control" id="editLaptopRam">
                                        </div>
                                        <div class="mb-3">
                                            <label for="editStorage" class="form-label">Storage</label>
                                            <input type="text" class="form-control" id="editLaptopStorage">
                                        </div>
                                        <div class="mb-3">
                                            <label for="editHargaSewa" class="form-label">Harga Sewa</label>
                                            <input type="number" class="form-control" id="editLaptopHargaSewa">
                                        </div>
                                        <div class="mb-3">
                                            <label for="editStatus" class="form-label">Status</label>
                                            <select id="editLaptopStatus" class="form-control">
                                                <option value="Tersedia">Tersedia</option>
                                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-primary"
                                            onclick="updateLaptopData()">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Tambah Laptop -->
                    <div class="modal fade" id="tambahLaptopModal" tabindex="-1"
                        aria-labelledby="tambahLaptopModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahLaptopModalLabel">Tambah Laptop</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="tambahLaptopForm">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="tambahGambar" class="form-label">Gambar</label>
                                            <input type="file" class="form-control" id="tambahGambar" accept="image/*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahNama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="tambahNama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahLayar" class="form-label">Layar</label>
                                            <input type="text" class="form-control" id="tambahLayar" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahBaterai" class="form-label">Baterai</label>
                                            <input type="text" class="form-control" id="tambahBaterai" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahProsesor" class="form-label">Prosesor</label>
                                            <input type="text" class="form-control" id="tambahProsesor" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahMerek" class="form-label">Merek</label>
                                            <input type="text" class="form-control" id="tambahMerek" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahKategori" class="form-label">Kategori</label>
                                            <select id="tambahKategori" class="form-control">
                                                <option value="Gaming">Gaming</option>
                                                <option value="Workstation">Workstation</option>
                                                <option value="Ultrabook">Ultrabook</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahOs" class="form-label">OS</label>
                                            <select id="tambahOs" class="form-control">
                                                <option value="Windows">Windows</option>
                                                <option value="MacOS">MacOS</option>
                                                <option value="Linux">Linux</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahRam" class="form-label">RAM</label>
                                            <select id="tambahRam" class="form-control">
                                                <option value="4GB">4GB</option>
                                                <option value="8GB">8GB</option>
                                                <option value="16GB">16GB</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahStorage" class="form-label">Storage</label>
                                            <select id="tambahStorage" class="form-control">
                                                <option value="256GB">256GB</option>
                                                <option value="512GB">512GB</option>
                                                <option value="1TB">1TB</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahHargaSewa" class="form-label">Harga Sewa</label>
                                            <input type="number" class="form-control" id="tambahHargaSewa">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahStatus" class="form-label">Status</label>
                                            <select id="tambahStatus" class="form-control">
                                                <option value="Tersedia">Tersedia</option>
                                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-primary"
                                            onclick="tambahLaptop()">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tambah Handphone modal -->
                    <div class="modal fade" id="tambahHandphoneModal" tabindex="-1"
                        aria-labelledby="tambahHandphoneModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahHandphoneModalLabel">Tambah Handphone</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="tambahHandphoneForm">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="tambahGambar" class="form-label">Gambar</label>
                                            <input type="file" class="form-control" id="tambahHandphoneGambar"
                                                accept="image/*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahNama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="tambahHandphoneNama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahMerek" class="form-label">Merek</label>
                                            <input type="text" class="form-control" id="tambahHandphoneMerek" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahJaringan" class="form-label">Jaringan</label>
                                            <input type="text" class="form-control" id="tambahHandphoneJaringan"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahBaterai" class="form-label">Baterai</label>
                                            <input type="text" class="form-control" id="tambahHandphoneBaterai"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahLayar" class="form-label">Layar</label>
                                            <input type="text" class="form-control" id="tambahHandphoneLayar" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahChipset" class="form-label">Chipset</label>
                                            <input type="text" class="form-control" id="tambahHandphoneChipset"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahKamera" class="form-label">Kamera</label>
                                            <input type="text" class="form-control" id="tambahHandphoneKamera" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahOs" class="form-label">OS</label>
                                            <select id="tambahHandphoneOs" class="form-control">
                                                <option value="Android">Android</option>
                                                <option value="IOS">IOS</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahRam" class="form-label">RAM</label>
                                            <select id="tambahHandphoneRam" class="form-control">
                                                <option value="4GB">4GB</option>
                                                <option value="8GB">8GB</option>
                                                <option value="16GB">16GB</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahStorage" class="form-label">Storage</label>
                                            <select id="tambahHandphoneStorage" class="form-control">
                                                <option value="128GB">128GB</option>
                                                <option value="256GB">256GB</option>
                                                <option value="512GB">512GB</option>
                                                <option value="1TB">1TB</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahHargaSewa" class="form-label">Harga Sewa</label>
                                            <input type="number" class="form-control" id="tambahHandphoneHargaSewa">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tambahStatus" class="form-label">Status</label>
                                            <select id="tambahHandphoneStatus" class="form-control">
                                                <option value="Tersedia">Tersedia</option>
                                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-primary"
                                            onclick="tambahHandphone()">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile settings -->
        <div class="tab-content">
            <div class="tab-pane" id="settings-content">
                <div class="container-fluid py-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Profile</p>
                                <button class="btn btn-primary btn-sm ms-auto">Update</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control" type="text" value="lucky.jesse">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email
                                            address</label>
                                        <input class="form-control" type="email" value="jesse@example.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">First
                                            name</label>
                                        <input class="form-control" type="text" value="Jesse">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Last name</label>
                                        <input class="form-control" type="text" value="Lucky">
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Contact Information</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <input class="form-control" type="text"
                                            value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <input class="form-control" type="text" value="New York">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Country</label>
                                        <input class="form-control" type="text" value="United States">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Postal
                                            code</label>
                                        <input class="form-control" type="text" value="437300">
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">About me</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">About me</label>
                                        <input class="form-control" type="text"
                                            value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end profile settings -->
        <!-- Add this inside the tab-content div, after app-content tab -->
        <div class="tab-content">
            <div class="tab-pane" id="messages-content">
                <div class="container-fluid py-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Messages</p>
                                <button class="btn btn-primary btn-sm ms-auto">Mark All as Read</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Message List -->
                            <div class="list-group">
                                <!-- Unread Message -->
                                <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/img/team-2.jpg"
                                            class="avatar avatar-sm rounded-circle me-3">
                                        <div>
                                            <h6 class="mb-0">New Rental Request</h6>
                                            <p class="text-sm text-muted mb-0">John requested to rent iPhone 13 Pro</p>
                                            <small class="text-muted">2 minutes ago</small>
                                        </div>
                                    </div>
                                    <span class="badge bg-gradient-primary">New</span>
                                </div>

                                <!-- Read Message -->
                                <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/img/team-3.jpg"
                                            class="avatar avatar-sm rounded-circle me-3">
                                        <div>
                                            <h6 class="mb-0">Payment Confirmation</h6>
                                            <p class="text-sm text-muted mb-0">Sarah has completed the payment</p>
                                            <small class="text-muted">1 hour ago</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- System Message -->
                                <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="icon icon-shape bg-gradient-info shadow text-center rounded-circle me-3">
                                            <i class="ni ni-bell-55 text-lg opacity-10"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">System Update</h6>
                                            <p class="text-sm text-muted mb-0">System maintenance scheduled for tonight
                                            </p>
                                            <small class="text-muted">5 hours ago</small>
                                        </div>
                                    </div>
                                    <span class="badge bg-gradient-info">System</span>
                                </div>
                            </div>

                            <!-- Load More Button -->
                            <div class="text-center mt-3">
                                <button class="btn btn-outline-primary btn-sm">Load More Messages</button>
                            </div>
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
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        function tambahLaptop() {
            const formData = new FormData();

            // Get file input
            const fileInput = document.getElementById('tambahGambar');
            if (fileInput.files[0]) {
                formData.append('gambar', fileInput.files[0]);
            }

            // Append other form fields
            formData.append('_token', document.querySelector('input[name="_token"]').value);
            formData.append('nama', document.getElementById('tambahNama').value);
            formData.append('merek', document.getElementById('tambahMerek').value);
            formData.append('os', document.getElementById('tambahOs').value);
            formData.append('ram', document.getElementById('tambahRam').value);
            formData.append('kategori', document.getElementById('tambahKategori').value);
            formData.append('prosesor', document.getElementById('tambahProsesor').value);
            formData.append('storage', document.getElementById('tambahStorage').value);
            formData.append('harga_sewa', document.getElementById('tambahHargaSewa').value);
            formData.append('status', document.getElementById('tambahStatus').value);
            formData.append('layar', document.getElementById('tambahLayar').value);
            formData.append('baterai', document.getElementById('tambahBaterai').value);

            // Remove Content-Type header to let browser set it with boundary
            fetch("{{ route('tambah-laptop') }}", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Laptop berhasil ditambahkan",
                            icon: "success",
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Terjadi kesalahan saat menambahkan laptop",
                            icon: "error",
                            confirmButtonText: "Coba Lagi"
                        });
                    }
                });
        }



        function tambahHandphone() {
            const formData = new FormData();
            formData.append('_token', document.querySelector('input[name="_token"]').value);
            formData.append('nama', document.getElementById('tambahHandphoneNama').value);
            formData.append('merek', document.getElementById('tambahHandphoneMerek').value);
            formData.append('os', document.getElementById('tambahHandphoneOs').value);
            formData.append('ram', document.getElementById('tambahHandphoneRam').value);

            formData.append('storage', document.getElementById('tambahHandphoneStorage').value);
            formData.append('harga_sewa', document.getElementById('tambahHandphoneHargaSewa').value);
            formData.append('status', document.getElementById('tambahHandphoneStatus').value);
            formData.append('jaringan', document.getElementById('tambahHandphoneJaringan').value);
            formData.append('layar', document.getElementById('tambahHandphoneLayar').value);
            formData.append('kamera', document.getElementById('tambahHandphoneKamera').value);
            formData.append('chipset', document.getElementById('tambahHandphoneChipset').value);
            formData.append('baterai', document.getElementById('tambahHandphoneBaterai').value);

            const fileInput = document.getElementById('tambahHandphoneGambar');
            if (fileInput.files[0]) {
                formData.append('gambar', fileInput.files[0]);
            }


            fetch("{{ route('tambah-handphone') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Handphone berhasil ditambahkan",
                            icon: "success",
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Terjadi kesalahan saat menambahkan handphone",
                            icon: "error",
                            confirmButtonText: "Coba Lagi"
                        });
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        title: "Error!",
                        text: "Gagal menghubungi server",
                        icon: "error",
                        confirmButtonText: "Tutup"
                    });
                });
        }

    </script>

    <script>

        function showEditModal(id, nama, gambar, chipset, jaringan, baterai, layar, kamera, merek, kategori, os, ram, storage, harga_sewa, status) {
            document.getElementById('editId').value = id;
            document.getElementById('editNama').value = nama;
            document.getElementById('editMerek').value = merek;
            document.getElementById('editJaringan').value = jaringan;
            document.getElementById('editBaterai').value = baterai;
            document.getElementById('editLayar').value = layar;
            document.getElementById('editChipset').value = chipset;
            document.getElementById('editKamera').value = kamera;
            document.getElementById('editOs').value = os;
            document.getElementById('editRam').value = ram;
            document.getElementById('editStorage').value = storage;
            document.getElementById('editHargaSewa').value = harga_sewa;
            document.getElementById('editStatus').value = status;

            var modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
        }
        function showEditLaptopModal(id, nama, gambar, layar, baterai, prosesor, merek, kategori, os, ram, storage, harga_sewa, status) {
            document.getElementById('editLaptopId').value = id;
            document.getElementById('editLaptopNama').value = nama;
            document.getElementById('editLaptopMerek').value = merek;
            document.getElementById('editLaptopProsesor').value = prosesor;
            document.getElementById('editLaptopBaterai').value = baterai;
            document.getElementById('editLaptopKategori').value = kategori;
            document.getElementById('editLaptopLayar').value = layar;
            document.getElementById('editLaptopOs').value = os;
            document.getElementById('editLaptopRam').value = ram;
            document.getElementById('editLaptopStorage').value = storage;
            document.getElementById('editLaptopHargaSewa').value = harga_sewa;
            document.getElementById('editLaptopStatus').value = status;
            var modal = new bootstrap.Modal(document.getElementById('editLaptopModal'));
            modal.show();
        }
        function updateLaptopData() {
            var id = document.getElementById('editLaptopId').value;
            var data = {
                _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                nama: document.getElementById('editLaptopNama').value,
                merek: document.getElementById('editLaptopMerek').value,
                gambar: document.getElementById('editLaptopGambar').value,
                layar: document.getElementById('editLaptopLayar').value,
                prosesor: document.getElementById('editLaptopProsesor').value,
                baterai: document.getElementById('editLaptopBaterai').value,
                kategori: document.getElementById('editLaptopKategori').value,
                os: document.getElementById('editLaptopOs').value,
                ram: document.getElementById('editLaptopRam').value,
                storage: document.getElementById('editLaptopStorage').value,
                harga_sewa: document.getElementById('editLaptopHargaSewa').value,
                status: document.getElementById('editLaptopStatus').value
            };

            fetch('/update-laptop/' + id, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(response => {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert('Gagal memperbarui data laptop!');
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        function updateData() {
            var id = document.getElementById('editId').value;
            var data = {
                _token: "{{ csrf_token() }}",
                nama: document.getElementById('editNama').value,
                merek: document.getElementById('editMerek').value,
                kamera: document.getElementById('editKamera').value,
                chipset: document.getElementById('editChipset').value,
                jaringan: document.getElementById('editJaringan').value,
                baterai: document.getElementById('editBaterai').value,
                layar: document.getElementById('editLayar').value,
                gambar: document.getElementById('editGambar').value,
                os: document.getElementById('editOs').value,
                ram: document.getElementById('editRam').value,
                storage: document.getElementById('editStorage').value,
                harga_sewa: document.getElementById('editHargaSewa').value,
                status: document.getElementById('editStatus').value
            };

            fetch('/update-handphone/' + id, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(response => {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert('Gagal memperbarui data!');
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
    <script>
        function confirmDelete(type, id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `/delete-${type}/${id}`;
                }
            });
        }

        
    </script>
</body>

</html>