<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $fillable = [
        'masyarakat_id',
        'kode_pengaduan',
        'isi_pengaduan',
        'status_pengaduan',
        'foto',
        'tanggapan_user',
        'tanggal_tanggapan',
        'user_id'
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'masyarakat_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
