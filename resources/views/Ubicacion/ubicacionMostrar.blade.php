@extends('layouts.app')
@section('content')
<div class= "container"> 
<div class="row">
<label for="" class="offset-md-7">Buscar por:</label>
<div class="">
<select id="inputState" class="form-control offset-md-1" name="checkbox_name">
        <option selected >Codigo</option>
        <option>Descripcion</option>
        <option >Estado</option>
      </select>
	  </div>

</div>
<br>
<table border="solid" class="table">
<thead class="thead-dark">
			<tr>
			<th>Codigo</th>
			<th>Descripcion</th>
			<th>Estado</th>
			<th>Pilon</th>
            <th class="rojo">Eliminar</th>
			</tr>
		</thead>
		<tbody>
			@foreach($ubicacion as $pro) 
			<tr>
				<td><a href="{{route('ubicacion.show', [$pro->codigo_ubicacion])}}">{{$pro->codigo_ubicacion}}</a></td>
				<td>{{$pro->descripcion_ubicacion}}</td>
				<td>{{$pro->estado_ubicacion}}</td>
				<td>{{$pro->codigo_pilon}}</td>
                <td><form method="post" action="{{route('ubicacion.destroy', [$pro->codigo_ubicacion])}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form></td>
				</td>
					
			</tr>



			@endforeach
		</tbody>
	</table>
    <div class="btn-whatsapp">
<a href="{{route('ubicacion')}}">
<button class="btn btn-primary">Nuevo</button> 
</a>
</div>
    @endsection