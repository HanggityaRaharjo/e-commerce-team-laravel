<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return response()->json([
            "message" => "get all data success",
            "data" => $data,
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
        $data = Product::create([
            "kode_product" => $request->kode_product,
            "nama_product" => $request->nama_product,
            "harga" => $request->harga,
            "keterangan" => $request->keterangan,
            "kategori" => $request->kategori,
        ]);
        return response()->json([
            "message" => "Create Data Success",
            "data" => $data,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::where('id',$id)->get();
        return response()->json(["data" => $data,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Product::where('id',$id);
        $data->update([
            "kode_product" => $request->kode_product,
            "nama_product" => $request->nama_product,
            "harga" => $request->harga,
            "keterangan" => $request->keterangan,
            "kategori" => $request->kategori,
        ]);
        return response()->json(["data" => $data->get(),]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::where('id',$id);
        $data->delete();
        return response()->json([
            "Message" => "Data ID = " . $id ." Deleted"
        ]);
    }
}
