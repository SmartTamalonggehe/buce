<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    use HasFactory;
    protected $table= 'bagian';
    protected $guarded= [];

    public function tumbuhan()
    {
        return $this->hasMany(Tumbuhan::class, 'bagian_id','id');
    }
}
