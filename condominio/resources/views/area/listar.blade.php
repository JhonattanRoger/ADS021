@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Areas') }}</div>


                    <div class="card-body">


                        <table class="table">

                            <a href="{{ url('area/criar') }}" class="btn btn-success">Adicionar</a>

                            <br>
                            <br>

                            <tr>
                                <th style="text-align: center">Condominio</th>
                                <th style="text-align: center">Unidade</th>
                                <th style="text-align: center">Local</th>
                                <th style="text-align: center">Situação</th>
                                <th style="text-align: center">Ações</th>
                            </tr>

                            @foreach($areas as $area)
                            <tr>
                                <td style="text-align: center">{{ $area->condominio->nome}}</td>
                                <td style="text-align: center">{{ $area->unidade->numero_unidade }}</td>
                                <td style="text-align: center">{{ $area->local }}</td>
                                <td style="text-align: center">{{ $area->situacao ? "Ativo" : "Inativo"}}</td>

                                <td style="text-align: center">
                                    <a href="{{ url('area/'.$area->id.'/editar') }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ url('area/'.$area->id.'/remover') }}" class="btn btn-danger" onclick="return confirm('Certeza que deseja apagar?')">Remover</a>

                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $areas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
