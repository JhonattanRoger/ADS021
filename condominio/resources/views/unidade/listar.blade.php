@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Unidades') }}</div>


                    <div class="card-body">


                        <table class="table">

                            <a href="{{ url('unidade/criar') }}" class="btn btn-success">Adicionar</a>

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

                            @foreach($unidades as $unidade)
                            <tr>
                                <td style="text-align: center">{{ $unidade->numero_unidade }}</td>
                                <td style="text-align: center">{{ $unidade->proprietario }}</td>
                                <td style="text-align: center">{{ $unidade->cpf }}</td>
                                <td style="text-align: center">{{ $unidade->email }}</td>
                                <td style="text-align: center">{{ $unidade->telefone }}</td>
                                <td style="text-align: center">
                                    <a href="{{ url('unidade/'.$unidade->id.'/editar') }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ url('unidade/'.$unidade->id.'/remover') }}" class="btn btn-danger" onclick="return confirm('Certeza que deseja apagar?')">Remover</a>

                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $unidades->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
