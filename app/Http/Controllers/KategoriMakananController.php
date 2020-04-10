<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriMakanan;

class KategoriMakananController extends Controller
{
    public function kategori(){
        $data["kategori"] = KategoriMakanan::all();
        return view("kategori/kategori",$data);
    }

    public function kategori_list(){
        $data["kategori"] = KategoriMakanan::all();
        return view("kategori/list_kategori",$data);
    }

    public function tambah(Request $request){
        $data = $request->except('_token');
        $save = KategoriMakanan::create($data);
        return redirect()->back();
    }

    public function edit(Request $request, $id){
        $data = $request->except('_token');
        $data['edit'] = KategoriMakanan::where('id_kategori',$id)->first();
        return redirect()->back()->withInput($data);
    }

    public function update(Request $request, $id){
        $data = $request->except('_token');
        $update = KategoriMakanan::where('id_kategori',$id)->update($data);
        return redirect()->back();
    }

    public function delete($id){
        $delete = KategoriMakanan::where('id_kategori',$id)->delete();
        return redirect()->back();
    }


}
