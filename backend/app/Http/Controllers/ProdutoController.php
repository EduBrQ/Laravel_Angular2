<?php

namespace App\Http\Controllers;//tem q importar

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return $produtos;
    }

    public function store(Request $request){
        $produto = new Produto();
        $produto->create($request->all());
        return $produto;

    }

    public function show($id){
        $produto = Produto::find($id);
        return $produto;
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return $produto;

    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return $produto;

    }
}
