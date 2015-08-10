@inject('cardapioService', 'RestoApp\Services\CardapioService')
@extends('layouts.default.index')

@section('content')
<table class="table table-dynamic">
    <thead>
        <tr>
            <td>Data do Cardápio</td>
            <td>Ítens</td>
            <td>Imprimir</td>
            <td>Opções</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cardapioService->with('Pratos')->get() as $cardapio)
            <tr>
                <td>{{$cardapioService->geDatetWithWeekDay($cardapio)}}</td>
                <td>
                    <ul>
                    @foreach($cardapio->Pratos as $prato)
                        <li>{{$prato->nomePrato}}</li>
                    @endforeach
                    </ul>
                </td>
                <td><a href="#" class="btn btn-primary">Imprimir </a> </td>
                <td>
                    <a href="{{route('app.cardapio.edit', $cardapio->id)}}" class="btn btn-white">Editar</a><br>

                    {!! Form::open(['route' => ['app.cardapio.destroy', $cardapio->id], 'method' => 'DELETE', 'confirm' => 'Tem certeza que deseja deletar esse cardápio?']) !!}
                        {!! Form::button('Excluir', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table><br>
<a href="{{route('app.cardapio.create')}}" class="btn btn-primary text-center col-md-2 col-md-offset-10">Novo Cardápio</a>
@endsection