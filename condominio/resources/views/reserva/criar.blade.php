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
                                    <label for="area_id" class="col-sm-2 col-form-label">Área: </label>
                                    <div class="col-sm-10">
                                        <select name="area_id" id="area_id" class="form-control">
                                            <option value="">Selecione</option>
                                            @foreach($area as $area)
                                                <option value="{{$area->id}}">{{$area->local}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="data" class="col-sm-2 col-form-label">Data: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data" name="data">
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

@section('js')
    <script>
        $('#condominio_id').change(function () {

            var idCondominio = $(this).val();

            $.get('/reserva/obterUnidades/' + idCondominio, function (unidades) {

                $('#unidade_id').empty();
                $('#unidade_id').append('<option value="">Selecione</option>');

                $.each(unidades, function (key, value) {

                    $('#unidade_id').append('<option value = ' + value.id + ' > ' + value.numero_unidade + ' </option>');

                });

            });



        });

        $('#condominio_id').change(function () {

            var idCondominio = $(this).val();

            $.get('/reserva/obterAreas/' + idCondominio, function (areas) {

                $('#area_id').empty();
                $('#area_id').append('<option value="">Selecione</option>');

                $.each(areas, function (key, value) {

                    $('#area_id').append('<option value = ' + value.id + ' > ' + value.local + ' </option>');

                });

            });

        });




    </script>
@endsection
