@extends('layouts.default.index')

@section('content')
    {!!Form::open(['url' => route('app.prato.store'), 'role' => 'form', 'class' => 'form-horizontal', 'confirm' => 'As informações estão corretas?'])!!}
        @include('content.app.prato.partials.form')
        <div class="form-group">
            <a href="{{route('app.prato.index')}}" class="btn btn-white col-md-offset-8">Cancelar</a>
            {!! Form::button('Salvar e adicionar outro', ['class' => 'btn btn-primary', 'name' => 'saveAndAdd', 'type' => 'submit']) !!}
        </div>
    {!!Form::close()!!}
@endsection