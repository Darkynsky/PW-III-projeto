<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $produto = Produto::all();
        //$produtos = DB::table('tbproduto')->orderBy('valor','desc')->get();
        
        
        return view('admProdutos', compact('produto'));            
    }
    public function index2()
    {        
        //$produto = Produto::all();
        $produtos = DB::table('tbproduto')->orderBy('valor','desc')->get();
        return view('clienteProdutos', compact('produto'));
    }    
    public function index3()
    {        
        $produto = Produto::all();
        $produtos = DB::table('tbProduto')->orderBy('valor','desc')->get();
        return $produtos;
    }       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();

        $produto->produto = $request->txProduto;
        $produto->descrProduto = $request->txDescrProduto;
        $produto->valor = $request->txValor;
        $produto->dtCadastro = $request->txDataCadastro;

        $produto->save();

        return redirect('/admProdutos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $produto = Produto::where('idProduto','=',$id)->get();        
        
        return view('produto-escolhido', compact('produto'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produto::where('idProduto',$id)->delete();
        return redirect('/admProdutos');
    }
}
