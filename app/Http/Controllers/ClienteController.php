<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
    	$clientes = Cliente::all();
    	return view('index', [
    		'clientes' => $clientes,
    	]);
    }

    public function create()
    {
    	return view('create');
    }

    public function store(Request $request)
    {
    	$cliente = new Cliente;
    	$cliente->nome = $request->nome;
    	$cliente->data_de_nascimento = $request->data_de_nascimento;
    	$cliente->estado_civil = $request->estado_civil;
    	$cliente->telefone = $request->telefone;
    	$cliente->endereco = $request->endereco;
    	$cliente->usuario = $request->usuario;
    	$cliente->senha = $request->senha;
    	$cliente->cpf = $request->cpf;
    	$cliente->save();

    	return redirect('cliente/create')->withInput();
    }

    public function edit($id)
    {
    	$cliente = Cliente::find($id);
    	return view('edit', [
    		'cliente' => $cliente
    	]);
    }

    public function update(Request $request)
    {
    	$cliente = Cliente::find($request->id);
    	$cliente->nome = $request->nome;
    	$cliente->data_de_nascimento = $request->data_de_nascimento;
    	$cliente->estado_civil = $request->estado_civil;
    	$cliente->telefone = $request->telefone;
    	$cliente->endereco = $request->endereco;
    	$cliente->usuario = $request->usuario;
    	$cliente->senha = $request->senha;
    	$cliente->cpf = $request->cpf;
    	$cliente->save();

    	return redirect('cliente/edit')->withInput();
    }

    public function delete($id)
    {
    	$cliente = Cliente::find($id);
    	$cliente->delete();
    	return redirect('cliente/index')->withInput();
    }
}
