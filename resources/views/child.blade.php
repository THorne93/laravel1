@extends('layouts.master')
@section('title',"Prueba")


@section('contenido')
    Aqui irá el contenido de la viesta hija
@endsection

@section('fin')
    @parent <!-- add the parent component as well as the child-->
    <br>FOOTER DE LA VISTA HIJA
@endsection