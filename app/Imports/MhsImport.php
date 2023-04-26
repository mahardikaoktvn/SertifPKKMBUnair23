<?php

namespace App\Imports;

use App\DataMahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MhsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $importData)
    {
        return new DataMahasiswa([
            'NIM' => $importData['nim'],
            'NAMA' => $importData['nama'],
            'PRODI' => $importData['jenjang']." ".$importData['program_studi'],
            'FAKULTAS' => $importData['fakultas'],
            '18' => $importData['18'],
            '19' => $importData['19'],
            '20' => $importData['20'],
            '22' => $importData['22'],
            '23' => $importData['23'],
            '24' => $importData['24'],
            '25' => $importData['25'],
            '26' => $importData['26'],
            '27' => $importData['27'],
            'STATUS' => $importData['status'],
            'LINK' => "127.0.0.1:8000"."/"."PKKMB"."/".$importData['nim'],
         ]);
    }
}
