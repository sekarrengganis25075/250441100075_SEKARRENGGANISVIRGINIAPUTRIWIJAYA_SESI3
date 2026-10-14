<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kendaraan extends Model
{
   use HasFactory;
   
   protected $table = 'Kendaraans';
    protected $fillable = ['id', 'plat_nomor', 'merek', 'jenis', 'tarif_per_hari'];
}

public function Sewas(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kendaraan_id');
    }

public function sewas(): HasMany
    {
        return $this->hasMany(sewa::class, 'kendaraan_id');
    }
