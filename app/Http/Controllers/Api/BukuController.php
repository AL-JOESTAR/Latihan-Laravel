<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index ()
    {
        $data = Buku::get();

        return response()->json([
            'message' => 'succes',
            'data' => $data,
        ],200);
    }

    public function show (string $id)
    {
        $data = Buku::find($id);

        if($data){
            return response()->json([
                'status' => true,
                'message' => 'succes',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ditemukan',
            ], 404);
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            'penulis' => 'required',
            'penerbit' => 'required',
            'judul' => 'required',
        ]);

        $databuku = new Buku;

        $databuku -> penulis = $request->penulis;
        $databuku -> penerbit = $request->penerbit;
        $databuku -> judul = $request->judul;
        
        $databuku->save();

        return response()->json([
            'status' => true,
            'message' => 'succes',
        ]);

    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'penulis' => 'required',
            'penerbit' => 'required',
            'judul' => 'required',
        ]);

        $databuku = Buku::find($id);

        $databuku -> penulis = $request->penulis;
        $databuku -> penerbit = $request->penerbit;
        $databuku -> judul = $request->judul;
        
        $databuku->save();

        return response()->json([
            'status' => true,
            'message' => 'succes',
        ]);
    }

    public function delete(string $id){
        $data = Buku::find($id);
        
        if(empty($data)){
            return response()->json([
                'status' => 'failed',
                'message' => 'gagal bree gak ketemu',
            ],404);
        }

        $data->delete();

        return response()->json([
            'status' => 'succes',
            'message' => 'berhasil cuy'
        ], 200);


    }

}