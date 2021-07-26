<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tumbuhan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\Famili;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TumbuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Tumbuhan::all();

        $famili = Famili::orderBy('nm_famili')->get();
        $bagian = Bagian::orderBy('nm_bagian')->get();

        if ($request->ajax()) {
            $view = view('admin.tumbuhan.data', [
                'data' => $data,
            ]);
            return $view;
        }

        return view('admin.tumbuhan.index', [
            'famili' => $famili,
            'bagian' => $bagian
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required',
        ]);
        if ($validator->fails()) {
            $pesan = [
                'pesan' => 'Gagal, Gambar Tidak Boleh Kosong',
                'type' => 'danger'
            ];
            return response()->json($pesan);
        }

        $extension = $request->file('gambar')->extension();
        $imgname = date('hmyHis') . '.' . $extension;
        Storage::putFileAs('public/my_images/tumbuhan', $request->file('gambar'), $imgname);
        $save_img = "my_images/tumbuhan/$imgname";

        Tumbuhan::create([
            'famili_id' => $request->famili_id,
            'nm_tumbuhan' => $request->nm_tumbuhan,
            'nm_ilmiah' => $request->nm_ilmiah,
            'bagian_id' => $request->bagian_id,
            'khasiat' => $request->khasiat,
            'gambar' => $save_img,
        ]);
        $pesan = [
            'pesan' => 'Data Berhasil Ditambahkan',
            'type' => 'primary'
        ];
        return response()->json($pesan);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Tumbuhan::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('gambar')) {
            // Hapus Icon Lama
            $img_lama = Tumbuhan::findOrFail($id)->gambar;

            Storage::delete("public/$img_lama");
            $extension = $request->file('gambar')->extension();
            $imgname = date('hmyHis') . '.' . $extension;
            Storage::putFileAs('public/my_images/tumbuhan', $request->file('gambar'), $imgname);
            $save_img = "my_images/tumbuhan/$imgname";
            $data = [
                'famili_id' => $request->famili_id,
                'nm_tumbuhan' => $request->nm_tumbuhan,
                'nm_ilmiah' => $request->nm_ilmiah,
                'bagian_id' => $request->bagian_id,
                'khasiat' => $request->khasiat,
                'gambar' => $save_img,
            ];
        } else {
            $data = [
                'famili_id' => $request->famili_id,
                'nm_tumbuhan' => $request->nm_tumbuhan,
                'nm_ilmiah' => $request->nm_ilmiah,
                'bagian_id' => $request->bagian_id,
                'khasiat' => $request->khasiat,
            ];
        }

        Tumbuhan::findOrFail($id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img_lama = Tumbuhan::findOrFail($id)->gambar;
        Storage::delete("public/$img_lama");
        Tumbuhan::destroy($id);
    }
}
