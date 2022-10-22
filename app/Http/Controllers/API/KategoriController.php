<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class KategoriController extends Controller
{
    public function get_jaket(){
        $data = Product::where('kategori','jaket')->get();
        return response()->json($data);
    }
    public function get_baju(){
        $data = Product::where('kategori','baju')->get();
        return response()->json($data);
    }
    public function get_celana(){
        $data = Product::where('kategori','celana')->get();
        return response()->json($data);
    }
}
