<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    use HasFactory;

    protected $table = 'data_pasiens';
    protected $primaryKey = 'NO_RM';
    protected $keyType = 'string';

    protected $fillable = ['NO_RM', 'NIK', 'nama_pasien', 'tggl_lahir', 'jenis_kelamin', 'agama', 'status', 'pendidikan_terakhir', 'alamat', 'no_hp'];
}
