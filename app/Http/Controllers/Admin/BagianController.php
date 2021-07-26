<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bagian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Bagian::all();

        if ($request->ajax()) {
            $view = view('admin.bagian.data', [
                'data' => $data,
            ]);
            return $view;
        }

        return view('admin.bagian.index');
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
            'icon' => 'required',
        ]);
        if ($validator->fails()) {
            $pesan = [
                'pesan' => 'Gagal, Icon Tidak Boleh Kosong',
                'type' => 'danger'
            ];
            return response()->json($pesan);
        }

        $extension = $request->file('icon')->extension();
        $imgname = date('hmyHis') . '.' . $extension;
        Storage::putFileAs('public/my_images/icon', $request->file('icon'), $imgname);
        $save_img = "my_images/icon/$imgname";

        Bagian::create([
            'nm_bagian' => $request->nm_bagian,
            'icon' => $save_img,
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
        return Bagian::findOrFail($id);
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
        if ($request->hasFile('icon')) {
            // Hapus Icon Lama
            $img_lama = Bagian::findOrFail($id)->icon;

            Storage::delete("public/$img_lama");
            $extension = $request->file('icon')->extension();
            $imgname = date('hmyHis') . '.' . $extension;
            Storage::putFileAs('public/my_images/icon', $request->file('icon'), $imgname);
            $save_img = "my_images/icon/$imgname";
            $data = [
                'nm_bagian' => $request->nm_bagian,
                'icon' => $save_img,
            ];
        } else {
            $data = ['nm_bagian' => $request->nm_bagian];
        }

        Bagian::findOrFail($id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img_lama = Bagian::findOrFail($id)->icon;
        Storage::delete("public/$img_lama");
        Bagian::destroy($id);
    }
}
