<?php
namespace App\Http\Controllers;

use App\Models\Handphone;
use App\Models\Laptop;
use Illuminate\Http\Request;
use App\Models\Penyewaan;
use App\Models\User;

class CustomerDashboardController extends Controller
{
    public function index()
{
    $user = auth()->user();

    $totalSewa = Penyewaan::where('id_user', $user->email)->count();

    $riwayatSewa = Penyewaan::where('id_user', $user->email)
        ->latest()
        ->take(5)
        ->get()
        ->map(function ($sewa) {
            if ($sewa->kategori === 'handphone') {
                $sewa->nama_barang = optional(Handphone::find($sewa->barang_id))->nama_handphone;
            } elseif ($sewa->kategori === 'laptop') {
                $sewa->nama_barang = optional(Laptop::find($sewa->barang_id))->nama_laptop;
            } else {
                $sewa->nama_barang = 'Tidak diketahui';
            }
            return $sewa;
        });

    return view('customer.dashboard', compact('user', 'totalSewa', 'riwayatSewa'));
}
}
