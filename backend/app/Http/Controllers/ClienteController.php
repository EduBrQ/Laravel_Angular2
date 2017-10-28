<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all(); // puxa no bd todos os clientes
        return $clientes;
    }

    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->create($request->all());//recebe uma request cria um novo dado e envia pro bd
        return $cliente;

    }

    public function show($id){
        $cliente = Cliente::find($id);//procuro o cliente pelo id e retorna oq achou
        return $cliente;
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all()); //procura pelo id e atualiza os dados
        return $cliente;

    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);// procura pelo id e deleta
        $cliente->delete();
        return $cliente;

    }
}