<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $table = 'logins';
    protected $fillable = ['nama_lengkap', 'jenis_kelamin', 'email', 'password', 'alamat', 'no_hp', 'role'];
}
