@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Condominios') }}</div>


                    <div class="card-body">


                        <table class="table">

                            <a href="{{ url('condominio/criar') }}" class="btn btn-success">Adicionar</a>

                            <br>
                            <br>

                            <tr>
                                <th style="text-align: center">Nome</th>
                                <th style="text-align: center">CNPJ</th>
                                <th style="text-align: center">Endereço</th>
                                <th style="text-align: center">CEP</th>
                                <th style="text-align: center">Bairro</th>
                                <th style="text-align: center">Cidade</th>
                                <th style="text-align: center">UF</th>
                                <th style="text-align: center">Ações</th>
                            </tr>

                            @foreach($condominios as $condominio)
                            <tr>
                                <td style="text-align: center">{{ $condominio->nome }}</td>
                                <td style="text-align: center">{{ $condominio->cnpj }}</td>
                                <td style="text-align: center">{{ $condominio->endereco }}</td>
                                <td style="text-align: center">{{ $condominio->cep }}</td>
                                <td style="text-align: center">{{ $condominio->bairro }}</td>
                                <td style="text-align: center">{{ $condominio->cidade }}</td>
                                <td style="text-align: center">{{ $condominio->uf }}</td>
                                <td style="text-align: center">
                                    <a href="{{ url('condominio/'.$condominio->id.'/editar') }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ url('condominio/'.$condominio->id.'/remover') }}" class="btn btn-danger" onclick="return confirm('Certeza que deseja apagar?')">Remover</a>

                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $condominios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
