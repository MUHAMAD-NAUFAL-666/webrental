<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use App\Models\Laptop;
use App\Models\Penyewaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahHandphone = Handphone::count();
        $jumlahLaptop = Laptop::count();
        $jumlahPenyewaan = Penyewaan::count();
        $jumlahCustomer = User::where('role', 'customer')->count();

        return view('admin.dashboard', [
            'jumlahHandphone' => $jumlahHandphone,
            'jumlahLaptop' => $jumlahLaptop,
            'jumlahPenyewaan' => $jumlahPenyewaan,
            'jumlahCustomer' => $jumlahCustomer
        ]);
    }

    // Fungsi baru untuk data realtime
    public function getRealtimeData()
    {
        try {
            // Data statistik utama
            $stats = [
                'jumlahHandphone' => Handphone::count(),
                'jumlahLaptop' => Laptop::count(),
                'jumlahPenyewaan' => Penyewaan::count(),
                'jumlahCustomer' => User::where('role', 'customer')->count(),
            ];

            // Data untuk grafik bulanan
            $monthlyData = $this->getMonthlyRentalData();
            
            // Data untuk grafik harian (7 hari terakhir)
            $dailyData = $this->getDailyRentalData();

            // Data untuk grafik status penyewaan
            $statusData = $this->getRentalStatusData();

            return response()->json([
                'success' => true,
                'stats' => $stats,
                'monthlyChart' => $monthlyData,
                'dailyChart' => $dailyData,
                'statusChart' => $statusData,
                'timestamp' => now()->format('H:i:s d/m/Y')
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error mengambil data: ' . $e->getMessage()
            ], 500);
        }
    }

    // Fungsi untuk data penyewaan per bulan
    private function getMonthlyRentalData()
    {
        $monthlyData = DB::table('penyewaan')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Inisialisasi array untuk 12 bulan
        $data = array_fill(0, 12, 0);
        
        // Isi data yang ada
        foreach ($monthlyData as $item) {
            $data[$item->month - 1] = $item->total;
        }

        return $data;
    }

    // Fungsi untuk data penyewaan 7 hari terakhir
    private function getDailyRentalData()
    {
        $labels = [];
        $data = [];
        
        // Loop untuk 7 hari terakhir
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $labels[] = $date->format('d/m');
            
            // Hitung penyewaan per hari
            $count = DB::table('penyewaan')
                ->whereDate('created_at', $date->format('Y-m-d'))
                ->count();
                
            $data[] = $count;
        }

        return [
            'labels' => $labels,
            'data' => $data
        ];
    }

    // Fungsi untuk data status penyewaan
    private function getRentalStatusData()
    {
        $statusData = DB::table('penyewaan')
            ->select('status', DB::raw('COUNT(*) as total'))
            ->groupBy('status')
            ->get();

        $labels = [];
        $data = [];
        $colors = [
            'aktif' => '#28a745',
            'selesai' => '#007bff', 
            'dibatalkan' => '#dc3545',
            'pending' => '#ffc107'
        ];

        foreach ($statusData as $item) {
            $labels[] = ucfirst($item->status);
            $data[] = $item->total;
        }

        return [
            'labels' => $labels,
            'data' => $data,
            'colors' => array_values($colors)
        ];
    }

    // Fungsi untuk mendapatkan data pendapatan bulanan
    public function getMonthlyRevenue()
    {
        $revenueData = DB::table('penyewaan')
            ->join('pembayaran', 'penyewaan.id', '=', 'pembayaran.penyewaan_id')
            ->selectRaw('MONTH(penyewaan.created_at) as month, SUM(pembayaran.total_bayar) as revenue')
            ->whereYear('penyewaan.created_at', date('Y'))
            ->where('pembayaran.status', 'lunas')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $data = array_fill(0, 12, 0);
        
        foreach ($revenueData as $item) {
            $data[$item->month - 1] = $item->revenue;
        }

        return response()->json([
            'success' => true,
            'data' => $data,
            'total' => array_sum($data)
        ]);
    }

    // Fungsi untuk mendapatkan barang paling populer
    public function getPopularItems()
    {
        // Handphone paling populer
        $popularHandphones = DB::table('penyewaan')
            ->join('handphone', 'penyewaan.handphone_id', '=', 'handphone.id')
            ->select('handphone.nama', DB::raw('COUNT(*) as total'))
            ->whereNotNull('penyewaan.handphone_id')
            ->groupBy('handphone.id', 'handphone.nama')
            ->orderBy('total', 'desc')
            ->limit(5)
            ->get();

        // Laptop paling populer
        $popularLaptops = DB::table('penyewaan')
            ->join('laptop', 'penyewaan.laptop_id', '=', 'laptop.id')
            ->select('laptop.nama', DB::raw('COUNT(*) as total'))
            ->whereNotNull('penyewaan.laptop_id')
            ->groupBy('laptop.id', 'laptop.nama')
            ->orderBy('total', 'desc')
            ->limit(5)
            ->get();

        return response()->json([
            'success' => true,
            'handphones' => $popularHandphones,
            'laptops' => $popularLaptops
        ]);
    }

    public function manajemenPengguna()
    {
        $users = User::all();
        return view('admin.manajemen-pengguna', ['users' => $users]);
    }
}
