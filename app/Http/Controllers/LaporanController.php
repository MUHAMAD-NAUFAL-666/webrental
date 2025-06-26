<?php

namespace App\Http\Controllers;

use App\Exports\PenyewaanExport;
use App\Models\Penyewaan;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index()
    {
        $penyewaan = Penyewaan::all();
        $totalPendapatan = Penyewaan::where('status', 'lunas')->sum('harga_sewa');
        $totalTransaksi = Penyewaan::count();
        $belumLunas = Penyewaan::where('status', 'sewa')->count();
        $tanggalCetak = Carbon::now()->format('d M Y H:i');

        return view('admin.laporan', compact('penyewaan', 'totalPendapatan', 'totalTransaksi', 'belumLunas'));
    }

    public function exportPDF()
    {
        $penyewaan = Penyewaan::all();
        $pdf = Pdf::loadView('exports.penyewaan-pdf', compact('penyewaan'));
        return $pdf->download('laporan-penyewaan.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PenyewaanExport, 'laporan-penyewaan.xlsx');
    }
}
