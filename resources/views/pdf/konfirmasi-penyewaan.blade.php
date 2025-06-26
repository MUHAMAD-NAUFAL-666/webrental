<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Penyewaan</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 14px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h2>Bukti Penyewaan Perangkat</h2>
    <p><strong>Nama Penyewa:</strong> {{ $penyewaan->nama }}</p>
    <p><strong>Nomor WhatsApp:</strong> {{ $penyewaan->no_wa }}</p>
    <p><strong>Nama/Merek Perangkat:</strong> {{ $penyewaan->merek }}</p>
    <p><strong>Tanggal Penyewaan:</strong> {{ $penyewaan->tanggal_sewa }}</p>
    <p><strong>Durasi:</strong> {{ $penyewaan->durasi }} hari</p>
    <p><strong>Tanggal Pengembalian:</strong> {{ $tanggalSelesai }}</p>
    <p><strong>Total Harga Sewa:</strong> Rp {{ number_format($penyewaan->harga_sewa, 0, ',', '.') }}</p>
</body>

</html>