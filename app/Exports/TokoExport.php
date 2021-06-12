<?php

namespace App\Exports;

use App\Toko;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Toko as ModelsToko;

class TokoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelsToko::all();
    }
}
