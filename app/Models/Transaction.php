<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = ['nama', 'no_telpon', 'kecepatan', 'berat', 'tarif', 'tgl_masuk', 'tgl_keluar'];

}
