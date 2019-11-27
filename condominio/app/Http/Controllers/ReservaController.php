<?php

namespace App\Http\Controllers;

use App\Reserva;
use App\Unidade;
use App\Condominio;
use App\Area;
use App\Http\Requests\ReservaRequest;

use Illuminate\Http\Request;

class ReservaController extends Controller
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
        $reserva = Reserva::all();
        return view('reserva.listar', ['reservas' => Reserva::paginate(5)], compact('reserva', 'area', 'unidade', 'condominio'));
    }

    public function criar()
    {
        $condominio = Condominio::all();
        $unidade = Unidade::all();
        $area = Area::all();
        return view('reserva.criar', compact('area', 'unidade', 'condominio'));
    }

    public function editar($id)
    {
        $reserva = Reserva::find($id);
        $area = Area::all();
        $unidade = Unidade::all();
        $condominio = Condominio::all();

        return view('reserva.editar', compact('reserva', 'condominio', 'unidade', 'area'));
    }

    public function remover($id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect('reserva/listar');
    }

    public function salvar(ReservaRequest $request)
    {
        $reserva = new Reserva();


        if($request->has('id')){
            $reserva = Reserva::find($request->id);

        }

        $reserva->condominio_id = $request->condominio_id;
        $reserva->unidade_id = $request->unidade_id;
        $reserva->area_id = $request->area_id;
        $reserva->data = $request->data;

        $reserva->save();

        return redirect('reserva/listar');
    }

    public function obterUnidades($id)
    {
        return Condominio::find($id)->unidade;
    }

    public function obterAreas($id)
    {
        return Condominio::find($id)->area;
    }

}
