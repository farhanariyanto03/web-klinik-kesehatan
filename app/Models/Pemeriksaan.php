<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $table = 'pemeriksaans';
    protected $fillable = ['NO_RM', 'no_antrian', 'id_dokter', 'diagnosa', 'code', 'tggl_pemeriksaan', 'resep_obat', 'status'];
}
