@extends('layouts.app')

@section('content')
<div class="container">
<div class="justify-content-center">
<div class="card col-md-10">


<div class="card-header justify-content-center">Variedades</div>
<div class="card-body justify-content-center">

<form @isset($variedad)
 method="post" action="{{route('variedad.update', ['variedade'=>$variedad->codigo_variedad])}}"
@else
method="post" action="{{route('variedad.store')}}"
@endisset>

@csrf
<label for="">Ingrese el codigo</label>
<br>
<input class="col-md-6" type="text" name=codigo_variedad

@isset($variedad)
value="{{$variedad->codigo_variedad}}"
@endisset
>
<br>

<label for="">Ingrese el nombre</label>
<br>
<input class="col-md-6" type="text" name='nombre_variedad'
@isset($variedad)
value="{{$variedad->nombre_variedad}}"
@endisset>
<br>
<label for="">Ingrese descripcion</label
>
<br>
<input class="col-md-6" type="text" name='descripcion_variedad'
@isset($variedad)
value="{{$variedad->descripcion_variedad}}"
@endisset
><br>
<br>
<button type='submit'> Guardar</button>

</form>

</div>
</div>
</div>
</div>
</div>
@endsection