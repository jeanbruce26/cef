@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Ubigeo
		<a href="{{ route('Ubigeo.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Cod Departamento</th>
					<th width="20px">Cod Provincia</th>
					<th width="20px">Cod Distrito</th>
					<th width="20px">Departamento</th>
					<th width="20px">Provincia</th>
					<th width="20px">Distrito</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($ubi as $ubis)

				<tr>
					<td>{{$ubis->idUbigeo}}</td>
					<td>{{$ubis->Id_Departamento}}</td>
					<td>{{$ubis->Id_Provincia}}</td>
					<td>{{$ubis->Id_Distrito}}</td>
					<td>{{$ubis->Departamento}}</td>
					<td>{{$ubis->Provincia}}</td>
					<td>{{$ubis->Distrito}}</td>
				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $ubi->render() !!}

	</div>

	<div class="col-sm-4">
		mensaje
	</div>

@endsection
