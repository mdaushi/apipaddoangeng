<?php
namespace App\Http\Controllers;

use App\Doa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoasController extends Controller
{
    public function index()
    {
        $doa = Doa::all();

        return response()->json([
            'success' => true,
            'message' =>'List Semua Doa',
            'data'    => $doa
        ], 200);
    }

    public function getById($id){

        $doa = Doa::find($id);
        if($doa){
            return response()->json(
                [
                    'success' => true,
                    'message' => 'sukses',
                    'data' => $doa
                ], 200
            );
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Doa Tidak Ditemukan!',
            ], 404
            );
        }
    }
}