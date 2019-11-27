<?php

namespace App\Http\Controllers;

use App\Condominio;
use App\Http\Requests\CondominioRequest;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    /* public function __construct()
     {
         $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
     }

    */

    public function listar()
    {

        return view('condominio.listar', ['condominios' => Condominio::paginate(5)]);
    }

    public function criar()
    {
        return view('condominio.criar');
    }

    public function editar($id)
    {
        $condominio = Condominio::find($id);
        return view('condominio.editar', compact('condominio'));
    }

    public function remover($id)
    {
        $condominio = Condominio::find($id);
        $condominio->delete();
        return redirect('condominio/listar');
    }

    public function salvar(CondominioRequest $request)
    {
        $condominio = new Condominio();


        if($request->has('id')){
            $condominio = Condominio::find($request->id);

        }

        $condominio->nome = $request->nome;
        $condominio->cnpj = $request->cnpj;
        $condominio->endereco = $request->endereco;
        $condominio->cep = $request->cep;
        $condominio->bairro = $request->bairro;
        $condominio->cidade = $request->cidade;
        $condominio->uf = $request->uf;
        $condominio->save();



        return redirect('condominio/listar');
    }
}
