<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class siswa extends Authenticatable
{
    protected $table = 'siswa';

    protected $fillable = ['nis', 'nisn', 'nama_siswa', 'status'];
}
