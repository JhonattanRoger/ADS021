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
                                <th style="text-align: center">Unidade</th>
                                <th style="text-align: center">Proprietário</th>
                                <th style="text-align: center">CPF</th>
                                <th style="text-align: center">E-mail</th>
                                <th style="text-align: center">Telefone</th>
                                <th style="text-align: center">Ações</th>
                            </tr>

                            @foreach($areas as $area)
                            <tr>
                                <td style="text-align: center">{{ $area->numero_unidade }}</td>
                                <td style="text-align: center">{{ $area->proprietario }}</td>
                                <td style="text-align: center">{{ $area->cpf }}</td>
                                <td style="text-align: center">{{ $area->email }}</td>
                                <td style="text-align: center">{{ $area->telefone }}</td>
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
