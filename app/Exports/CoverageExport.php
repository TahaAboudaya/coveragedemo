<?php

namespace App\Exports;

use App\Models\Location;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CoverageExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */ 
    public function headings():array{
        return[
            'id',
            'lat',
            'lng',
            'service_num',
            'phone',
            'name',
            'Created_at',
            'Updated_at' 
        ];
    } 
    public function collection()
    {
        return Location::all();
    }
}