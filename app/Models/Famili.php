<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famili extends Model
{
    use HasFactory;
    protected $table= 'famili';
    protected $guarded= [];

    public function tumbuhan()
    {
        return $this->hasMany(Tumbuhan::class, 'famili_id', 'id');
    }
}
