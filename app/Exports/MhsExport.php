<?php

namespace App\Exports;

use App\DataMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MhsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'ID',
            'NIM',
            'NAMA',
            'PRODI',
            'FAKULTAS',
            '18',
            '19',
            '20',
            '22',
            '23',
            '24',
            '25',
            '26',
            '27',
            'STATUS',
            'LINK',
        ];
    }

    public function collection()
    {
        return DataMahasiswa::all();
    }
}
