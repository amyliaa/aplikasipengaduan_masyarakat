<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakats';

    
    protected $fillable = ['nama', 'no_telepon', 'alamat'];

    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class, 'masyarakat_id');
    }
}
