<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $table = 'penyewaan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'nama',
        'merek',
        'harga_sewa',
        'tanggal_sewa',
        'status',
        'durasi',
        'no_wa',

    ];

    const STATUS_SEWA = 'sewa';
    const STATUS_LUNAS = 'lunas';

    public static function getStatuses()
    {
        return [
            self::STATUS_SEWA => 'Sewa',
            self::STATUS_LUNAS => 'Lunas'
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getMonthlyRentals()
    {
        return static::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();
    }

    public static function getTotalRevenue()
    {
        return static::where('status', self::STATUS_LUNAS)
            ->sum('harga_sewa');
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'tanggal_sewa'
    ];

    public function barang()
{
    if ($this->kategori === 'handphone') {
        return $this->belongsTo(Handphone::class, 'barang_id');
    } elseif ($this->kategori === 'laptop') {
        return $this->belongsTo(Laptop::class, 'barang_id');
    }

    return null;
}

}
