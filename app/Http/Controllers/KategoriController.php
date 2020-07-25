<?php
namespace App\Http\Controllers;

use App\Kategori;
use App\Doa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::with(['doa'])->get();

        return response()->json([
            'success' => true,
            'message' =>'List Semua Kategori',
            'data'    => $kategori
        ], 200);
    }

    public function getById($id){

        $kategori = Kategori::find($id);
        if($kategori){
            return response()->json(
                [
                    'success' => true,
                    'message' => 'sukses',
                    'data' => $kategori
                ], 200
            );
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Kategori Tidak Ditemukan!',
            ], 404
            );
        }
    }
}