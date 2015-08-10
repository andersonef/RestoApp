@extends('layouts.default.index')

@section('content')
    {!!Form::model($cardapio, ['route' => ['app.cardapio.update', $cardapio->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'confirm' => 'As informações estão corretas?'])!!}
        @include('content.app.cardapio.partials.form')
        <div class="form-group">
            <a href="{{route('app.cardapio.index')}}" class="btn btn-white col-md-offset-6">Cancelar</a>
            {!! Form::button('Salvar e voltar', ['class' => 'btn btn-primary', 'name' => 'saveAndAdd', 'type' => 'submit']) !!}
        </div>
    {!!Form::close()!!}
@endsection