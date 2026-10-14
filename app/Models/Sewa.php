<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'sewas';

    protected $fillable = ['id', 'kendaraan_id', 'nama_penyewa', 'tanggal_mulai', 'lama_sewa', 'total_biaya', 'status'];

    public function kendaraans(): HasMany
    {
        return $this->hasMany(Kendaraan::class, 'kendaraan_id');
}
}