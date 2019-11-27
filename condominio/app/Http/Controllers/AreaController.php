<?php

namespace App\Http\Controllers;

use App\Area;
use App\Condominio;
use App\Unidade;
use App\Http\Requests\AreaRequest;
use Illuminate\Http\Request;

class AreaController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
    }

   */

    public function listar()
    {
        $area = Area::all();
        $unidade = Unidade::all();
        $condominio = Condominio::all();
        return view('area.listar', ['areas' => Area::paginate(5)], compact('area','unidade','condominio'));
    }

    public function criar()
    {
        $condominio = Condominio::all();
        $unidade = Unidade::all();
        return view('area.criar', compact('unidade', 'condominio'));
    }

    public function editar($id)
    {
        $area = Area::find($id);
        $unidade = Unidade::all();
        $condominio = Condominio::all();
        return view('area.editar', compact('area', 'unidade', 'condominio'));
    }

    public function remover($id)
    {
        $area = Area::find($id);
        $area->delete();
        return redirect('area/listar');
    }

    public function salvar(AreaRequest $request)
    {
        $area = new Area();


        if($request->has('id')){

            $area = Area::find($request->id);

        }

        $area->condominio_id = $request->condominio_id;
        $area->unidade_id = $request->unidade_id;
        $area->local = $request->local;
        $area->situacao = $request->situacao;
        $area->save();

        return redirect('area/listar');
    }




public function obterUnidades($id)
{
    return Condominio::find($id)->unidade;
}


}