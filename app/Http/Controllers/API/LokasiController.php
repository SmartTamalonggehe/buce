<?php

namespace App\Http\Controllers\API;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LokasiController extends Controller
{
    public function index()
    {
        $data = Lokasi::with(['tumbuhan' => function ($tumbuhan) {
            $tumbuhan->with('famili', 'bagian');
        }])->get();
        return $data;
    }
    public function totalBagian()
    {
        $data = DB::table('lokasi')
            ->join('tumbuhan', 'lokasi.tumbuhan_id', 'tumbuhan.id')
            ->join('bagian', 'tumbuhan.bagian_id', 'bagian.id')
            ->select(DB::raw('count(*) as jmlh, nm_bagian,icon'))
            ->groupBy('nm_bagian', 'icon')
            ->get();
        return $data;
    }
}
