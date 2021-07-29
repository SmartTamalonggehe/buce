<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tumbuhan;
use Illuminate\Http\Request;

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
}
