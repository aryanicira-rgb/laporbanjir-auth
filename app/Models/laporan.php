<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['nama_pelapor', 'lokasi', 'tinggi_genangan', 'tanggal_kejadian'];

    public function getStatusAttribute()
    {
        if ($this->tinggi_genangan >= 100) return 'Awas';
        if ($this->tinggi_genangan >= 50)  return 'Siaga';
        return 'Waspada';
    }
}