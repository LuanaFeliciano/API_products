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
        $produto_show = DB::select('select * from produtos where produto = ?', [$id]);

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

    public function createProduct(Request $request)
    {
        $produto = Produto::create($request->all());

        if ($produto) {
            return response()->json([
                'code' => 201,
                'data' => $produto
            ], 201);
        }
    }

    public function updateProduct($id, Request $request)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        $produto_show = DB::select('select * from produtos where produto = ?', [$id]);  

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
