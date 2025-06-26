<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #TRX-{{ $sewa->id }} | FLEXIGADGET</title>
    <style>
        :root {
            --primary: #5e72e4;
            --secondary: #825ee4;
            --success: #2dce89;
            --dark: #2c3e50;
            --light: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background: #f0f2f5;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 15px;
        }

        .invoice-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            page-break-inside: avoid;
            break-inside: avoid;
        }

        .invoice-header {
            position: relative;
            padding: 25px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-align: center;
        }

        .header-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image: repeating-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                repeating-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
            background-position: 0 0, 10px 10px;
            background-size: 20px 20px;
        }

        .brand {
            position: relative;
            z-index: 1;
        }

        .brand-logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
            background: white;
            border-radius: 50%;
            padding: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .brand-logo img {
            width: 100%;
            height: auto;
        }

        .brand h1 {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .invoice-body {
            padding: 25px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .info-card {
            padding: 20px;
            background: var(--light);
            border-radius: 12px;
        }

        .info-title {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #666;
            margin-bottom: 12px;
        }

        .info-details {
            font-size: 14px;
        }

        .info-details strong {
            color: var(--primary);
        }

        .rental-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 25px 0;
        }

        .rental-table th {
            background: var(--primary);
            color: white;
            padding: 12px 15px;
            font-weight: 600;
            text-align: left;
        }

        .rental-table th:first-child {
            border-top-left-radius: 12px;
        }

        .rental-table th:last-child {
            border-top-right-radius: 12px;
        }

        .rental-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }

        .rental-table tr:last-child td {
            border-bottom: none;
        }

        .total-section {
            background: var(--light);
            padding: 20px;
            border-radius: 12px;
            text-align: right;
        }

        .total-amount {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
        }

        .status-pill {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 50px;
            background: var(--success);
            color: white;
            font-size: 14px;
            font-weight: 600;
            margin-top: 12px;
        }

        .footer {
            text-align: center;
            padding: 25px;
            border-top: 1px solid #eee;
            color: #666;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .container {
                margin: 15px auto;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .rental-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="invoice-card">
            <div class="invoice-header">
                <div class="header-pattern"></div>
                <div class="brand">
                    <div class="brand-logo">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="FLEXIGADGET">
                    </div>
                    <h1>FLEXIGADGET</h1>
                    <p>Invoice Penyewaan Gadget Premium</p>
                </div>
            </div>

            <div class="invoice-body">
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-title">Informasi Perusahaan</div>
                        <div class="info-details">
                            <strong>FLEXIGADGET</strong><br>
                            UniversitasBinaSaranaInformatika<br>
                            Karawang, Karangpawitan<br>
                            Telp: (021) 555-0123<br>
                            Email: contact@flexigadget.com
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-title">Informasi Pelanggan</div>
                        <div class="info-details">
                            <strong>{{ $sewa->nama }}</strong><br>
                            {{ $sewa->email }}<br>
                            Invoice #: TRX-{{ $sewa->id }}<br>
                            Tanggal: {{ date('d F Y') }}
                        </div>
                    </div>
                </div>

                <table class="rental-table">
                    <thead>
                        <tr>
                            <th>Perangkat</th>
                            <th>Tanggal Sewa</th>
                            <th>Durasi</th>
                            <th>Harga/Hari</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $sewa->merek }}</td>
                            <td>{{ $sewa->tanggal_sewa }}</td>
                            <td>{{ $sewa->durasi }} hari</td>
                            <td>Rp {{ number_format($sewa->harga_sewa / $sewa->durasi, 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($sewa->harga_sewa, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="total-section">
                    <div class="total-amount">
                        Total: Rp {{ number_format($sewa->harga_sewa, 0, ',', '.') }}
                    </div>
                    <div class="status-pill">
                        {{ strtoupper($sewa->status) }}
                    </div>
                </div>
            </div>

            <div class="footer">
                <p>Terima kasih telah mempercayai FLEXIGADGET</p>
                <p>Butuh bantuan? Hubungi tim support kami di support@flexigadget.com</p>
            </div>
        </div>
    </div>
</body>

</html>