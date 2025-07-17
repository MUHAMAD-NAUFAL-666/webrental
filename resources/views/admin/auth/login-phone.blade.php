<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../" />
    <title>Login dengan No. HP - FlexiGadget</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <style>
            body {
                background-image: url('assets/media/auth/bg9-dark.jpg');
            }
            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg4-dark.jpg');
            }
        </style>
        
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!-- Aside -->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <a href="/" class="mb-7">
                        <img alt="Logo" src="assets/media/logos/flexigadget.png" />
                    </a>
                    <h2 class="text-white fw-normal m-0">Login dengan Nomor HP</h2>
                </div>
            </div>
            
            <!-- Body -->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
                <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                        
                        <!-- Alert Messages -->
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

                        <!-- Form -->
                        @if(!session('otp'))
                            <!-- Form Input Nomor HP -->
                            <form method="POST" action="{{ route('phone.send.otp') }}">
                                @csrf
                                <div class="text-center mb-11">
                                    <h1 class="text-dark fw-bolder mb-3">Masukkan Nomor HP</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">Kami akan mengirim kode OTP ke WhatsApp Anda</div>
                                </div>

                                <div class="fv-row mb-8">
                                    <input type="tel" placeholder="Contoh: 08123456789" name="phone" 
                                           class="form-control bg-transparent @error('phone') is-invalid @enderror" 
                                           value="{{ old('phone') }}" required />
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $pesan }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid mb-10">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Kirim Kode OTP</span>
                                    </button>
                                </div>
                            </form>
                        @else
                            <!-- Form Input OTP -->
                            <form method="POST" action="{{ route('phone.verify.otp') }}">
                                @csrf
                                <div class="text-center mb-11">
                                    <h1 class="text-dark fw-bolder mb-3">Masukkan Kode OTP</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">
                                        Kode OTP telah dikirim ke WhatsApp<br>
                                        <strong>{{ session('phone') }}</strong>
                                    </div>
                                </div>

                                <div class="fv-row mb-8">
                                    <input type="text" placeholder="Masukkan 6 digit kode OTP" name="otp" 
                                           class="form-control bg-transparent text-center @error('otp') is-invalid @enderror" 
                                           maxlength="6" required />
                                    @error('otp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid mb-5">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Verifikasi OTP</span>
                                    </button>
                                </div>

                                <div class="text-center">
                                    <a href="{{ route('phone.login.form') }}" class="btn btn-light">
                                        Kirim Ulang Kode
                                    </a>
                                </div>
                            </form>
                        @endif

                        <!-- Back to Sign In -->
                        <div class="text-gray-500 text-center fw-semibold fs-6 mt-5">
                            <a href="{{ route('sign-in') }}" class="link-primary">Kembali ke Login Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
</body>
</html>
