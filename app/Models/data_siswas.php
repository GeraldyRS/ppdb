<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswas extends Model
{
    protected $table ='data_siswa';
    protected $fillable =['nis','nama','jk','tempat_lahir','tgl_lahir','alamat','asal','kelas','jurusan'];
}
