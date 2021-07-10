@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
@stop

@section('content_header')
{{-- Plantilla => https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Usage --}}
    <h1>Admin</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop