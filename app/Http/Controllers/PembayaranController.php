<?php

namespace App\Http\Controllers;

use App\Exports\TransaksiExport;
use App\Models\Penyewaan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PembayaranController extends Controller
{
    //
    public function index()
    {
        $penyewaan = DB::table('penyewaan')
            ->join('users', 'penyewaan.id_user', '=', 'users.id')
            ->select('penyewaan.*', 'users.email')
            ->get();

        return view('admin.pembayaran', compact('penyewaan'));
    }

    public function konfirmasiPembayaran($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        $penyewaan->status = 'lunas';
        $penyewaan->save();

        return response()->json([
            'success' => true,
            'message' => 'Pembayaran berhasil dikonfirmasi'
        ]);
    }
    public function exportTransaksiPDF($id)
    {
        $transaksi = DB::table('penyewaan')
            ->join('users', 'penyewaan.id_user', '=', 'users.id')
            ->where('penyewaan.id', $id)
            ->select('penyewaan.*', 'users.email', 'users.name')
            ->first();

        $pdf = Pdf::loadView('exports.transaksi-pdf', ['transaksi' => $transaksi]);
        return $pdf->download('transaksi-' . $id . '.pdf');
    }

    public function exportTransaksiExcel($id)
    {
        $transaksi = DB::table('penyewaan')
            ->join('users', 'penyewaan.id_user', '=', 'users.id')
            ->where('penyewaan.id', $id)
            ->select('penyewaan.*', 'users.email', 'users.name')
            ->first();

        return Excel::download(new TransaksiExport($transaksi), 'transaksi-' . $id . '.xlsx');
    }

    public function cetakInvoice($id)
    {
        $sewa = Penyewaan::findOrFail($id);
        $pdf = PDF::loadView('admin.invoice', compact('sewa'));
        return $pdf->stream('invoice-' . $id . '.pdf');
    }
}
