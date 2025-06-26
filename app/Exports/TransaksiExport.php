<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;

class TransaksiExport implements FromCollection
{
    protected $transaksi;

    public function __construct($transaksi)
    {
        $this->transaksi = $transaksi;
    }

    public function collection()
    {
        return new Collection([
            ['ID Transaksi', 'TRX-' . $this->transaksi->id],
            ['Nama Penyewa', $this->transaksi->nama],
            ['Email', $this->transaksi->email],
            ['Device', $this->transaksi->merek],
            ['Tanggal Sewa', $this->transaksi->tanggal_sewa],
            ['Durasi', $this->transaksi->durasi . ' hari'],
            ['Total Bayar', 'Rp ' . number_format($this->transaksi->harga_sewa, 0, ',', '.')],
            ['Status', $this->transaksi->status]
        ]);
    }
}
