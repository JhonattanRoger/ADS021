<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function listar()
    {
        return Reserva::all();
    }

    public function criar()
    {

    }

    public function editar($id)
    {
        return Reserva::find($id);
    }

    public function remover($id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect('reserva/listar');
    }

    public function salvar(Request $request)
    {
        $reserva = new Reserva();


        if($request->has('id')){
            $reserva = Reserva::find($request->id);

        }

        $reserva->condominio_id = $request->condominio_id;
        $reserva->data = $request->data;
        $reserva->area_id = $request->area_id;
        $reserva->unidade_id = $request->unidade_id;
        $reserva->save();

        return redirect('reserva/listar');
    }

}
