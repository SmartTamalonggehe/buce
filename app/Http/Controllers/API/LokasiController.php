<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $data = Lokasi::with(['tumbuhan' => function ($tumbuhan) {
            $tumbuhan->with('famili', 'bagian');
        }])->get();
        return $data;
    }
}
