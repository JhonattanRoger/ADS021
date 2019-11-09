@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Nova Reserva') }}</div>


                    <div class="card-body">

                        @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif

                            <form action="{{ url('reserva/salvar') }}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Unidade: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="numero_unidade" name="numero_unidade">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Proprietário: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="proprietario" name="proprietario">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">CPF: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cpf" name="cpf">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">E-mail: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Telefone: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telefone" name="telefone">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <a href="{{ url ('reserva/listar') }}" class="btn btn-danger">Voltar</a>


                            </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection