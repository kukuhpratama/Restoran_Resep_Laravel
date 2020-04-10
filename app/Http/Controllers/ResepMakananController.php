<?php

namespace App\Http\Controllers;
use App\Models\ResepMakanan;
use App\Models\KategoriMakanan;
use App\Models\BahanMakanan;

use Illuminate\Http\Request;
use DB;

class ResepMakananController extends Controller
{
    public function resep(){
        $data["resep"] = ResepMakanan::with('kategori_makanan')->get();
        return view("resep/resep",$data);
    }

    public function resep_list_all(){
        $data['kategori'] = KategoriMakanan::where('id_kategori', $id)->first();
        $data["resep"] = ResepMakanan::with('kategori_makanan')->where('id_kategori',$id)->get();
        return view("resep/resep",$data);
    }

    public function resep_list($id){
        $data['kategori'] = KategoriMakanan::where('id_kategori', $id)->first();
        $data["resep"] = ResepMakanan::with('kategori_makanan')->where('id_kategori',$id)->get();
        return view("kategori/list_kategori",$data);
    }

    public function detail($id_resep){
        $data['bahan_bahan'] = BahanMakanan::where('id_resep', $id_resep)->get();
        return response()->json($data);
    }

    public function create($id_kategori){
        $data['id_kategori'] = $id_kategori;
        return view('resep/tambah_resep',$data);
    }
    
    public function tambah(Request $request){
        DB::beginTransaction();
        $post = $request->except('_token');
        $data_resep['nama_resep'] = $post['nama_resep'];
        $data_resep['id_kategori'] = $post['id_kategori'];

        $save1 = ResepMakanan::create($data_resep);
        if($save1){
            if(!empty($post['bahan_bahan'])){
                $data_bahan['id_resep'] = $save1->id_resep;
                foreach($post['bahan_bahan'] as $key => $value){
                    $data_bahan['bahan'] = $value['name'];
                    $save2 = BahanMakanan::create($data_bahan);
                }
            }
            $result['status'] = 'success';
            $result['message'] = 'Data resep berhasil ditambahkan';
            DB::commit();
        }else{
            $result['status'] = 'fail';
            $result['message'] = 'Data resep gagal disimpan';
            DB::rollback();
        }
        return redirect('resep_list/'.$post['id_kategori']);
    }

    public function edit($id){
        $data['resep'] = ResepMakanan::where('id_resep',$id)->first();
        if($data['resep']){
            $data['bahan_bahan'] = BahanMakanan::where('id_resep', $id)->get();
            return view('/resep/edit_resep',$data);
        }else{
            return redirect()->back();
        }
    }

    public function update(Request $request, $id){
        DB::beginTransaction();
        $post = $request->except('_token');
        if(!isset($post['bahan_bahan'])){
            $post['bahan_bahan'] = array();
        }
        if(isset($post['existing_bahan'])){
            for($i = 0; $i < sizeof($post['existing_bahan']); $i++){
                array_unshift($post['bahan_bahan'],$post['existing_bahan'][$i]);
            }
            unset($post['existing_bahan']);
        }
        $data_resep['nama_resep'] = $post['nama_resep'];
        $data_resep['id_kategori'] = $post['id_kategori'];

        $update1 = ResepMakanan::where('id_resep', $id)->update($data_resep);
        
        if(!empty($post['bahan_bahan'])){
            BahanMakanan::where('id_resep', $id)->delete();
            $data_bahan['id_resep'] = $id;
            foreach(array_reverse($post['bahan_bahan']) as $key => $value){
                $data_bahan['bahan'] = $value['name'];
                $update2 = BahanMakanan::create($data_bahan);
            }
        }
        $result['status'] = 'success';
        $result['message'] = 'Data resep berhasil di-update';
        DB::commit();
   
        return redirect('resep_list/'.$post['id_kategori']);
    }

    public function delete($id){
        $delete_bahan = BahanMakanan::where('id_resep', $id)->delete();
        $delete_resep = ResepMakanan::where('id_resep',$id)->delete();
        return redirect()->back();
    }
}
