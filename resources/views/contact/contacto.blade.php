@include('layouts.cabecera')
<h1>Hola soy el contacto de {{ $nom }} y tengo {{ $ed }} años</h1>
@if ($ed >= 18)
    <p>Es mayor de edad</p>
@else
    <p>Es menor de edad</p>
@endif
<h1>Lista de Fruta</h1>
<ul>
    @foreach($frutas as $f)
        <li>{{ $f }}</li>
    @endforeach
</ul>
@include('layouts.cabecera')