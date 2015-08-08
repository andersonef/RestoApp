@extends('layouts.default.index')

@section('content')
    {!!Form::open(['url' => route('app.pedidos.store'), 'class' => 'form-horizontal'])!!}
        @include('content.app.pedidos.partials.form')
    {!!Form::close()!!}
@endsection