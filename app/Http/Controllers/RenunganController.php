<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renungan;
use Illuminate\Support\Facades\Storage;

class RenunganController extends Controller
{
    public function insertrenungan(Request $request)
    {
        $file = $request->file('gambar'); // Retrieve the uploaded file from the request
        $filename = $file->getClientOriginalName();

        Storage::putFileAs('public/images', $file, $filename);
        $renungan = new Renungan();
        $renungan->id = $request->input('id');
        $renungan->judul = $request->input('judul');
        $renungan->isi_renungan = $request->input('isi_renungan');
        $renungan->gambar = $filename;
        $renungan->updater_id = $request->session()->get('token');
        $renungan->save();
        return redirect('/admin/renungan/view');
    }

    public function getView()
    {
        $renungan = Renungan::all();
        return view('welcome', ['renungan'=>$renungan]);
    }

    public function getOneRenungan($id)
    {
        $renungan = Renungan::find($id);
        return view('admin.renungan_admin', ['renungans' =>$renungan]);
    }

    public function deleteRenungan($id){
        $renungan = Renungan::find($id);
        $renungan->delete();
        return redirect('/admin/renungan/view');
    }

    public function index(){
        $renungan = Renungan::all();
        return view('admin.renungan_admin', ['renungan'=>$renungan]);
    }

    public function update(Request $request, $id)
    {
        $produk = Renungan::find($id);

        $produk->isi_renungan = $request->input('isi_renungan');
        $produk->updater_id = $request->session()->get('token');
        $produk->save();

        return redirect('/admin/renungan/view');
    }


}
