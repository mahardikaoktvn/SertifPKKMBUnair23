<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    protected $table = 'datausers';
    protected $fillable = [
        'NIM', 'NAMA', 'PRODI', 'FAKULTAS', '18', '19', '20', '22', '23', '24', '25', '26', '27', 'STATUS', 'LINK'
    ];
}
