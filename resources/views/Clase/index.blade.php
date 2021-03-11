@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Clase
		<a href="{{ route('Clase.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Clase</th>
					<th width="20px">Numero de Clase</th>
					<th width="20px">Dominio</th>
					


				</tr>
			</thead>

			<tbody>
				@foreach ($clase as $clas)

				<tr>
					<td>{{$clas->idClase}}</td>
					<td>{{$clas->Nombre_Clase}}</td>
					<td>{{$clas->N_Clase}}</td>
					<td>{{$clas->Dominio_idDominio}}</td>


					

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $clase->render() !!}

	

	</div>

@endsection
