<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.novoCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nomeCliente" => "required",
            "cpfCliente" => "required",
            "cepCliente" => "required",
            "enderecoCliente" => "required",
            "numeroCliente" => "required",
            "bairroCliente" => "required",
            "cidadeCliente" => "required",
            "estadoCliente" => "required"
        ]);
        
        $cliente = new Cliente();
        $cliente->name = $request->input('nomeCliente');
        $cliente->cpf = $request->input('cpfCliente');
        $cliente->cep = $request->input('cepCliente');
        $cliente->endereco = $request->input('enderecoCliente');
        $cliente->numero = $request->input('numeroCliente');
        $cliente->bairro = $request->input('bairroCliente');
        $cliente->cidade = $request->input('cidadeCliente');
        $cliente->estado = $request->input('estadoCliente');
        $cliente->save();
        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.editCliente', compact('cliente'));
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

        $request->validate([
            "nomeCliente" => "required|min:5|max:100",
            "cpfCliente" => "required|max:18",
            "cepCliente" => "required|max:14",
            "enderecoCliente" => "required|max:100",
            "numeroCliente" => "required",
            "bairroCliente" => "required|max:100",
            "cidadeCliente" => "required|max:100",
            "estadoCliente" => "required|max:2"
        ]);

        $cliente = Cliente::find($id);
        
        if( isset($cliente) )
        {
            $cliente->name = $request->input('nomeCliente');
            $cliente->cpf = $request->input('cpfCliente');
            $cliente->cep = $request->input('cepCliente');
            $cliente->endereco = $request->input('enderecoCliente');
            $cliente->numero = $request->input('numeroCliente');
            $cliente->bairro = $request->input('bairroCliente');
            $cliente->cidade = $request->input('cidadeCliente');
            $cliente->estado = $request->input('estadoCliente');
            $cliente->save();
            return redirect('clientes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        
        if (isset($cliente))
        {
            $cliente->delete();
        }

        return redirect('clientes');

    }
}
