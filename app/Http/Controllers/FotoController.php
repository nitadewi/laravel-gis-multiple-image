<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Wisata;

class FotoController extends Controller
{
    public function edit($id)
    {
        $isi = 'edit foto';
        $foto = Foto::where('id_wisata', $id)->get();
        $t = Foto::where('id_wisata', $id)->first();
        return view('admin.foto.edit', compact('isi', 't', 'foto'));
    }

    public function update(Request $request, $id)
    {
        $foto = new Foto;
        $wisata = new Wisata;
        $wisata->id_wisata = $id;
        if ($request->hasfile('filename')) {
            foreach ($request->file('filename') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/image/', $name);
                $allImagesPathes[]['nama'] = $name;
            }
        }
        $wisata->foto()->createMany($allImagesPathes);


        return redirect('foto/' . $id . '/edit');
    }

    public function destroy($id)
    {
        Foto::where('id_foto', $id)->delete();
        return redirect()->to('daftar')->with('flash_message', 'produk terhapus!');
    }
}
