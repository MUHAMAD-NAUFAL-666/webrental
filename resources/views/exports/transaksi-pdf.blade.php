<!DOCTYPE html>
<html>

<head>
    <title>Detail Transaksi</title>
</head>

<body>
    <h2>Detail Transaksi #{{ $transaksi->id }}</h2>
    <table>
        <tr>
            <td>Nama Penyewa</td>
            <td>: {{ $transaksi->nama }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: {{ $transaksi->email }}</td>
        </tr>
        <tr>
            <td>Device</td>
            <td>: {{ $transaksi->merek }}</td>
        </tr>
        <tr>
            <td>Tanggal Sewa</td>
            <td>: {{ $transaksi->tanggal_sewa }}</td>
        </tr>
        <tr>
            <td>Durasi</td>
            <td>: {{ $transaksi->durasi }} hari</td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>: Rp {{ number_format($transaksi->harga_sewa, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>: {{ $transaksi->status }}</td>
        </tr>
    </table>
</body>

</html>