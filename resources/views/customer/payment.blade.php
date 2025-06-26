@extends('layouts.guest')

@section('content')
<div class="container py-5 d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-lg rounded-4 border-0">
            <div class="card-body text-center">
                <h4 class="fw-bold mb-4 text-primary">Instruksi Pembayaran</h4>

                <!-- Icon Perangkat -->
                <p class="mb-3 fs-5">
                    <i class="fas fa-mobile-alt me-2"></i>
                    <strong>Jenis Perangkat:</strong> {{ $device ?? 'Tidak Diketahui' }}
                </p>
                
                <!-- Metode Pembayaran -->
                <p class="mb-4 fs-5">
                    <i class="{{ $paymentMethod == 'bankTransfer' ? 'fas fa-university' : 'fas fa-money-bill-wave' }} me-2"></i>
                    <strong>Metode Pembayaran:</strong> 
                    {{ $paymentMethod == 'bankTransfer' ? 'Transfer Bank' : 'Cash on Delivery' }}
                </p>

                @if ($paymentMethod == 'bankTransfer')
                <div class="card border-0 bg-light p-4 mt-3 rounded-4 shadow-sm">
                    <h5 class="fw-bold text-primary mb-3">Transfer Bank</h5>
                    <p><strong>Nama Bank:</strong> Bank BCA</p>
                    <p><strong>Nomor Rekening:</strong> 1234567890</p>
                    <p><strong>Nama Pemilik Rekening:</strong> Muhamad Naufal Almuhyidin</p>

                    <!-- QR Code -->
                    <div class="text-center my-4">
                        @if (isset($base64QrCode))
                            <img src="data:image/png;base64,{{ $base64QrCode }}" alt="QR Code" class="img-fluid rounded-3 shadow-lg" style="max-width: 220px; transition: transform 0.3s ease-in-out;">
                            <p class="mt-2 text-muted">Scan QR Code untuk pembayaran</p>
                        @else
                            <div class="alert alert-warning" role="alert">
                                QR Code tidak tersedia.
                            </div>
                        @endif
                    </div>
                </div>
                @endif

                <!-- Tombol Konfirmasi Pembayaran -->
                <a href="{{ route('sign-in') }}" class="btn btn-primary btn-lg mt-4 w-100 rounded-pill shadow-lg">
                    <i class="fas fa-check-circle me-2"></i> Konfirmasi Pembayaran
                </a>
            </div>
        </div>
    </div>
</div>
@endsections