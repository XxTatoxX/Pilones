@extends('layouts.app')

@section('content')
<div class="Container">


<table border="solid" class="table">
<thead class="thead-dark" class="link-danger">
			<tr>
			
			<th>Nombre</th>
			<th>Descripcion</th>
            <th class="rojo">Eliminar</th>
			</tr>
		</thead>
		<tbody>
			@foreach($procedencia as $pro) 
			<tr>
			
				<td><a href="{{route('procedencia.show', [$pro->id])}}"> {{$pro->nombre}} </a></td>
				<td>{{$pro->descripcion}}</td>
                <td><a class="btn btn-danger" href="">Eliminar</a></td>
					
			</tr> 
			

			@endforeach
		</tbody>
		
	</table>
	<div class="btn-whatsapp">
<a href="{{route('procedencia')}}">
<button class="btn btn-primary">Nuevo</button> 
</a>
</div>


</div>
@endsection