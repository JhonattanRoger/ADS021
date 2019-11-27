<?php

namespace App\Http\Controllers;

use App\Condominio;
use App\Unidade;
use App\Http\Requests\UnidadeRequest;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    /* public function __construct()
     {
         $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
     }

    */

    public function listar()
    {
        $unidade = Unidade::all();
        $condominio = Condominio::all();
        return view('unidade.listar', ['unidades' => Unidade::paginate(5)], compact('unidade', 'condominio'));
    }

    public function criar()
    {
        $condominio = Condominio::all();
        return view('unidade.criar', compact('condominio'));
    }

    public function editar($id)
    {

        $unidade = Unidade::find($id);
        $condominio = Condominio::all();
        return view('unidade.editar', compact('unidade', 'condominio'));

    }

    public function remover($id)
    {
        $unidade = Unidade::find($id);
        $unidade->delete();
        return redirect('unidade/listar');
    }

    public function salvar(UnidadeRequest $request)
    {
        $unidade = new Unidade();


        if($request->has('id')){
            $unidade = Unidade::find($request->id);

        }

        $unidade->condominio_id = $request->condominio_id;
        $unidade->numero_unidade = $request->numero_unidade;
        $unidade->proprietario = $request->proprietario;
        $unidade->cpf = $request->cpf;
        $unidade->email = $request->email;
        $unidade->telefone = $request->telefone;

        $unidade->save();

        return redirect('unidade/listar');
    }

}
