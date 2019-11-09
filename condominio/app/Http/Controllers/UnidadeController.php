<?php

namespace App\Http\Controllers;

use App\Unidade;
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
       /* return Unidade::all(); */
       return view('unidade.listar', ['unidades' => Unidade::paginate(5)]);
    }

    public function criar()
    {
        return view('unidade.criar');
    }

    public function editar($id)
    {
        return Unidade::find($id);
       /* $unidade = Unidade::find($id);
        return view('unidade.editar', compact('unidade'));  */
;
    }

    public function remover($id)
    {
        $unidade = Unidade::find($id);
        $unidade->delete();
        return redirect('unidade/listar');
    }

    public function salvar(Request $request)
    {
        $unidade = new Unidade();


        if($request->has('id')){
            $unidade = Unidade::find($request);

        }

        $unidade->numero_unidade = $request->numero_unidade;
        $unidade->proprietario = $request->proprietario;
        $unidade->cpf = $request->cpf;
        $unidade->email = $request->email;
        $unidade->telefone = $request->telefone;
        $unidade->save();

        return redirect('unidade/listar');
    }

    public function update(Request $request, $id)
    {

    }
}
