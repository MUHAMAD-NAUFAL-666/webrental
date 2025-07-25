<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Customer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen p-6">

    <div class="max-w-6xl mx-auto">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800 flex items-center gap-2">
                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
                     d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0l-7 7-7-7m4 4v6"/></svg>
                Dashboard Customer
            </h1>
            <p class="text-gray-500">Selamat datang di halaman pelanggan.</p>
        </div>

        <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow-lg rounded-xl p-5 border-l-4 border-blue-500">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
                             d="M8 7V3m8 4V3M3 11h18M5 19h14a2 2 0 002-2v-5H3v5a2 2 0 002 2z"/></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Total Penyewaan</p>
                        <p class="text-2xl font-bold text-blue-600">{{ $totalSewa }}</p>
                    </div>
                </div>
            </div>

            <!-- Tambahkan box lainnya di sini jika diperlukan -->
        </div>

        <!-- Riwayat -->
        <div>
            <h3 class="text-xl font-bold mb-4 text-gray-800">Riwayat Penyewaan Terbaru</h3>

            @forelse($riwayatSewa as $sewa)
                <div class="bg-white shadow-sm border rounded-xl p-4 mb-3 hover:shadow-lg transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-lg font-semibold text-gray-700">{{ $sewa->barang->nama_barang ?? 'Barang tidak ditemukan' }}</p>
                            <p class="text-sm text-gray-500">Tanggal: {{ $sewa->created_at->format('d M Y') }}</p>
                        </div>
                        <span class="text-sm bg-blue-100 text-blue-600 px-3 py-1 rounded-full">
                            {{ ucfirst($sewa->status ?? 'Selesai') }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="text-gray-500">Belum ada penyewaan.</div>
            @endforelse
        </div>
    </div>

</body>
</html>
