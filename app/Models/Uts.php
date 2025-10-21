<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uts extends Model
{
    protected $table = 'uts';
    protected $primaryKey = 'uts_id';
    protected $fillable = ['nama_matkul','jumlah_sks','keterangan'];
    public $timestamps = true;
}
