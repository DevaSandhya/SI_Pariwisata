<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = ['nama_pengunjung', 'no_kamar', 'tipe_kamar', 'cek_in', 'cek_out', 'harga'];
}
