<h1>Lista de Fruta</h1>
<ul>
    @foreach ($frutas as $f)
        <li>{{ $f }}</li>
    @endforeach
</ul>
@php
    $pais = 'Ukraine';
@endphp
<a href="{{ route('peras') }}">Ir a las peras</a>
<a href="{{ route('naranjas') }}">Ir a las naranjas</a>
<a href="{{ url('fruteria/naranjas/' . $pais) }}">Ir a las naranjas</a>

<h1>Formulario de registro de frutas</h1>

<form action="" method="post">
    @csrf
    @if (session('mensaje'))
        <p>{{ session('mensaje') }}</p>
    @endif

    @if ($errors->any())
        <h1>ERRORS</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <p>Nombre de la fruta:
        <input type="text" name="fruta" value=
        @if(!$errors->has('fruta'))
        "{{ old('fruta') }}" @endif>
        @if ($errors->has('fruta'))
            @foreach ($errors->get('fruta') as $error)
                <p>{{ $error }}</p>
            @endforeach
            <p>{{ $errors->first('fruta') }}</p>
        @endif
        @error('fruta')
            {{ $message }}
        @enderror
    </p>
    <p>Descripcion:
        <textarea name="descripcion" cols="30" rows="10">{{ old('descripcion') }}</textarea>
    </p>
    </p>
    <p>Pais:
        <input type="checkbox" name="pais[]" @if (in_array('España', old('pais', []))) checked @endif value="España" />España
        <input type="checkbox" name="pais[]" @if (in_array('Francia', old('pais', []))) checked @endif value="Francia" />Francia
        <input type="checkbox" name="pais[]" @if (in_array('Italia', old('pais', []))) checked @endif value="Italia" />Italia
        <input type="checkbox" name="pais[]" @if (in_array('Turquia', old('pais', []))) checked @endif value="Turquia" />Turquia
    </p>
    <input type="submit" name="enviar" value="Enviar">
</form>
