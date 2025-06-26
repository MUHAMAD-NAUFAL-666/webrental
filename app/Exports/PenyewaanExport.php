<?php

namespace App\Exports;

use App\Models\Penyewaan;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenyewaanExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //
        return Penyewaan::all();
    }
}
