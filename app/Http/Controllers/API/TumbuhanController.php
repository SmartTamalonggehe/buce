<?php

namespace App\Http\Controllers\API;

use App\Models\Tumbuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TumbuhanController extends Controller
{
    public function index()
    {
        $data = Tumbuhan::with('famili', 'bagian', 'lokasi')->paginate(10);
        return $data;
    }
    public function detail($id)
    {
        $data = Tumbuhan::with('famili', 'bagian', 'lokasi')->where('id', $id)->first();
        return $data;
    }
    public function total()
    {
        $data = DB::table('lokasi')
            ->join('tumbuhan', 'lokasi.tumbuhan_id', 'tumbuhan.id')
            ->select(DB::raw('count(*) as jmlh, nm_tumbuhan'))
            ->groupBy('nm_tumbuhan')
            ->get();
        return $data;
    }
}
