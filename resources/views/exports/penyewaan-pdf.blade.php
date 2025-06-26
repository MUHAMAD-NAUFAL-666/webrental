<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penyewaan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e9ecef;
            color: #495057;
        }

        .container {
            width: 85%;
            margin: 30px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .logo,
        .info,
        .footer {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 180px;
            height: auto;
        }

        h1 {
            color: #4CAF50;
            font-size: 32px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
        }

        td {
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .lunas {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
        }

        .sewa {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
        }

        .info {
            font-size: 14px;
        }

        .footer {
            margin-top: 40px;
            font-size: 14px;
        }

        .tanda-tangan {
            margin-top: 50px;
            text-align: right;
        }

        @media screen and (max-width: 768px) {
            .container {
                width: 95%;
            }

            th,
            td {
                padding: 10px;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Logo Section -->
        <div class="logo">
            <img src="img/bsi.jpeg" alt="Logo">
        </div>

        <!-- Informasi Perusahaan -->
        <div class="info">
            <p>FlexiGadget</p>
            <p>Universitas BinaSaranaInformatika | 0812-3456-7890 | flexIGadget.com</p>
            <p>Tanggal Cetak: {{ \Carbon\Carbon::now()->format('d M Y H:i') }}</p>
        </div>

        <!-- Title -->
        <h1>Laporan Penyewaan</h1>

        <!-- Table Wrapper -->
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID Penyewaan</th>
                        <th>Nama Penyewa</th>
                        <th>Tanggal Penyewaan</th>
                        <th>Status</th>
                        <th>Harga Sewa</th>
                    </tr>
                </thead>
                <tbody>
                    @php $totalPendapatan = 0; @endphp
                    @foreach($penyewaan as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_sewa)->format('d M Y') }}</td>
                            <td>
                                @if($item->status == 'lunas')
                                    <span class="lunas">{{ $item->status }}</span>
                                @else
                                    <span class="sewa">{{ $item->status }}</span>
                                @endif
                            </td>
                            <td>Rp {{ number_format($item->harga_sewa, 0, ',', '.') }}</td>
                            @php $totalPendapatan += $item->harga_sewa; @endphp
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Total Pendapatan -->
        <div class="footer">
            <p><strong>Total Pendapatan: Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</strong></p>
        </div>

        <!-- Tanda Tangan -->
        <div class="tanda-tangan">
            <p>Dibuat Oleh,</p>
            <br><br>
            <p>_______________________</p>
            <p>({{ Auth::user()->name }})</p>
        </div>

    </div>

</body>

</html>