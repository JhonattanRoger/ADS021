<?php

namespace App\Http\Controllers;

use App\Condominio;
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
        /* return Condominio::all(); */
        return view('condominio.listar', ['condominios' => Condominio::paginate(5)]);
    }

    public function criar()
    {
        return view('condominio.criar');
    }

    public function editar($id)
    {
        return Condominio::find($id);
    }

    public function remover($id)
    {
        $condominio = Condominio::find($id);
        $condominio->delete();
        return redirect('condominio/listar');
    }

    public function salvar(Request $request)
    {
        $condominio = new Condominio();


        if($request->has('id')){
            $condominio = Condominio::find($id);

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
