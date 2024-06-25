<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renungan extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "tanggal",
        "judul",
        "isi_renungan",
        "gambar_produk",
        "updater_id",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
        "updater_id",
    ];

    public function renungan(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
        );
    }

    
}
