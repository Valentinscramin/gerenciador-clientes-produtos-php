<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view("produtos.index", compact("produtos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view("produtos.novoProduto", compact('categorias'));
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
            "nameProduto" => "required",
            "stockProduto" => "required",
            "precoProduto" => "required",
            "categoriaProduto" => "required"
        ]);

        $produto = new Produto();
        $produto->nameProduto = $request->input('nameProduto');
        $produto->stockProduto = $request->input('stockProduto');
        $produto->precoProduto = $request->input('precoProduto');
        $produto->categoria_id = $request->input('categoriaProduto');
        $produto->save();
        return redirect('produtos');
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
        $produto = Produto::find($id);
        $categorias = Categoria::all();

        if (isset($produto))
        {
            return view("produtos.editProduto", compact('produto', 'categorias'));
        }

        return redirect('produtos');
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
            "nameProduto" => "required|max:100",
            "stockProduto" => "required|min:2",
            "precoProduto" => "required",
            "categoriaProduto" => "required"
        ]);

        $produto = Produto::find($id);
        $produto->nameProduto = $request->input('nameProduto');
        $produto->stockProduto = $request->input('stockProduto');
        $produto->precoProduto = $request->input('precoProduto');
        $produto->categoria_id = $request->input('categoriaProduto');
        $produto->save();
        return redirect('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);

        if ( isset($produto) )
        {
            $produto->delete();
        }

        return redirect('produtos');
    }
}
