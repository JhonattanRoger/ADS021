@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Nova Condominio') }}</div>


                    <div class="card-body">

                        @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif

                            <form action="{{ url('condominio/salvar') }}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nome" name="nome">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">CNPJ: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cnpj" name="cnpj">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Endereço: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="endereco" name="endereco">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">CEP: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cep" name="cep">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Bairro: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="bairro" name="bairro">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Cidade: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cidade" name="cidade">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">UF: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="uf" name="uf">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <a href="{{ url ('condominio/listar') }}" class="btn btn-danger">Voltar</a>


                            </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
