<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function showAllProducts() //todos os produtos
    {
        $produtos = Produto::all();
        return response()->json(array(
            'code' => 200,
            'data' => $produtos
        ), 200);
    }

    public function showOneProduct($id) //produtos daquele id
    {
        $produto = Produto::find($id);
        $produto_show = DB::select('select * from produto where produto = ?', [$id]);

        if (empty($produto_show)) {
            return response()->json(array(
                'code' => 404,
                'message' => 'ID not found or invalid'
            ), 404);
        } else {
            $i = count($produto_show);
            if ($i == 1) {
                return response()->json(array(
                    'code' => 200,
                    'data' => $produto
                ), 200);
            }
        }
    }
}
