<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tumbuhan extends Model
{
    use HasFactory;
    protected $table= 'tumbuhan';
    protected $guarded= [];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function famili()
    {
        return $this->belongsTo(famili::class);
    }

    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'tumbuhan_id', 'id');
    }
}
