@extends('layouts.default.index')

@section('content')
    {!!Form::model($prato, ['route' => ['app.prato.update', $prato->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'confirm' => 'As informações estão corretas?'])!!}
        @include('content.app.prato.partials.form')
        <div class="form-group">
            <a href="{{route('app.prato.index')}}" class="btn btn-white col-md-offset-6">Cancelar</a>
            {!! Form::button('Salvar e voltar', ['class' => 'btn btn-primary', 'name' => 'saveAndAdd', 'type' => 'submit']) !!}
        </div>
    {!!Form::close()!!}
@endsection