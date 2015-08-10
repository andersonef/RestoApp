@inject('pratoService', 'RestoApp\Services\PratoService')
@extends('layouts.default.index')

@section('content')
<table class="table table-dynamic">
    <thead>
        <tr>
            <td>Prato</td>
            <td>Grupo</td>
            <td>Opções</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pratoService->with('TipoPrato')->get() as $prato)
            <tr>
                <td>{{$prato->nomePrato}}</td>
                <td>{{$prato->TipoPrato->descTipoPrato}}</td>
                <td>
                    <a href="{{route('app.prato.edit', $prato->id)}}" class="btn btn-white">Editar</a>

                    {!! Form::open(['route' => ['app.prato.destroy', $prato->id], 'method' => 'DELETE', 'confirm' => 'Tem certeza que deseja deletar esse prato?']) !!}
                        {!! Form::button('Excluir', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table><br>
<a href="{{route('app.prato.create')}}" class="btn btn-primary text-center col-md-2 col-md-offset-10">Novo Prato</a>
@endsection