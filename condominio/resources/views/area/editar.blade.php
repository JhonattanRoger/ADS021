@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Alterar Area') }}</div>


                    <div class="card-body">

                        @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif

                            <form action="{{ action('AreaController@salvar', $area) }}" method="post">
                                @csrf

                                <input type="hidden" id="id" name="id" value="{{$area->id}}" />

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
                                    <label for="local" class="col-sm-2 col-form-label">Local: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="local" name="local" value="{{ $area->local }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="situacao" class="col-sm-2 col-form-label">Situação: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="situacao" name="situacao" value="{{ $area->situacao }}">
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
