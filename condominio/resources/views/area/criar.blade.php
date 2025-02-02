@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Nova Área') }}</div>


                    <div class="card-body">

                        @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif

                            <form action="{{ url('area/salvar') }}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="condominio_id" class="col-sm-2 col-form-label">Condominio: </label>
                                    <div class="col-sm-10">
                                        <select name="condominio_id" id="condominio_id" class="form-control">
                                            <option value="">Selecione</option>
                                            @foreach($condominio as $condominio)
                                                <option value="{{$condominio->id}}">{{$condominio->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="unidade_id" class="col-sm-2 col-form-label">Unidade: </label>
                                    <div class="col-sm-10">
                                        <select name="unidade_id" id="unidade_id" class="form-control">
                                            <option value="">Selecione</option>
                                            @foreach($unidade as $unidade)
                                                <option value="{{$unidade->id}}">{{$unidade->numero_unidade}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="local" class="col-sm-2 col-form-label">Local: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="local" name="local">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="situacao" class="col-sm-2 col-form-label">Situação: </label>
                                    <div class="col-sm-10">
                                        <input type="radio" name="situacao" checked="checked" value="1"/>Ativo
                                        <input type="radio" name="situacao" value="0"/>Inativo
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <a href="{{ url ('area/listar') }}" class="btn btn-danger">Voltar</a>


                            </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#condominio_id').change(function () {

            var idCondominio = $(this).val();

            $.get('/area/obterUnidades/' + idCondominio, function (unidades) {

                $('#unidade_id').empty();

                $.each(unidades, function (key, value) {

                    $('#unidade_id').append('<option value = ' + value.id + ' > ' + value.numero_unidade + ' </option>');

                });

            });

        });


    </script>
@endsection
