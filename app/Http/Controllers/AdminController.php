<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Wisata;
use App\Foto;
use phpDocumentor\Reflection\Types\This;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $isi = 'Tambah Tempat Wisata';
        return view('admin.create', compact('isi'));
    }

    public function create()
    {
        $isi = 'Tambah Tempat Wisata';
        return view('admin.create', compact('isi'));
    }

    public function store(Request $request)
    {
        $foto = new Foto;
        $wisata = new Wisata;

        $this->validate($request, [
            'title' => 'required', 'string',
            'deskripsi' => 'required', 'string',
            'ltd' => 'required',
            'lngtd' => 'required',
            'filename' => 'required',
            'filename.*' => 'image:mimes:jpeg,png,jpg,gif,svg',
        ]);




        $wisata->title = $request->get('title');
        $wisata->id_admin = Auth::user()->id_admin;
        $wisata->category = $request->get('category');
        $wisata->deskripsi = $request->get('deskripsi');
        $wisata->ltd = $request->get('ltd');
        $wisata->lngtd = $request->get('lngtd');
        $wisata->save();

        if ($request->hasfile('filename')) {
            foreach ($request->file('filename') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/image/', $name);
                $allImagesPathes[]['nama'] = $name;
            }
        }
        $wisata->foto()->createMany($allImagesPathes);


        return redirect()->url('/daftar');
    }

    public function edit($id)
    {
        $isi = "Edit Data";
        $datas = Wisata::findOrFail($id);
        $foto = Foto::where('id_wisata', $id)->get();
        return view('admin.edit', compact('isi', 'datas', 'foto'));
    }

    public function update(Request $request, $id)
    {
        $wisata = new Wisata;

        $request->validate([
            'title' => 'required', 'string',
            'category' => 'required',
            'deskripsi' => 'required', 'string',
            'ltd' => 'required',
            'lngtd' => 'required',
        ]);

        $form_data = array(
            'title' => $request->title,
            'category' => $request->category,
            'deskripsi' => $request->deskripsi,
            'ltd' => $request->ltd,
            'lngtd' => $request->lngtd,

        );
        wisata::where('id_wisata', $id)->update($form_data);



        return redirect()->to('/daftar')->with('flash_message', 'wisata updated!');
    }

    public function destroy($id)
    {
        Wisata::destroy($id);
        Foto::where('id_wisata', $id)->delete();
        return redirect()->to('daftar')->with('flash_message', 'produk terhapus!');
    }

    public function list()
    {
        $wisata = Wisata::orderBy('id_wisata', 'DESC')->get();
        $isi = 'daftar Wisata';
        return view('admin.index', compact('isi', 'wisata'));
    }

    public function home()
    {
        $isi = 'Admin';
        return view('admin.home', compact('isi'));
    }
}
