<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriMakanan;

class APIController extends Controller
{
    public function kategori_list(){
        $data = KategoriMakanan::all();
        $response['status'] = 'success';
        $response['data'] = $data;
        return response()->json($response);
    }
}
