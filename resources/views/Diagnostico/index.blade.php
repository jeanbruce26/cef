@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Diagnostico
		<a href="{{ route('Diagnostico.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Diagnostico</th>
					<th width="20px">Clase</th>
					<th width="20px">Tipo</th>
					<th width="20px">Diagnostico General</th>


				</tr>
			</thead>

			<tbody>
				@foreach ($diagnostico as $dia)

				<tr>
					<td>{{$dia->idDiagnostico}}</td>
					<td>{{$dia->Nombre_Diagnostico}}</td>
					<td>{{$dia->Clase_idClase}}</td>
					<td>{{$dia->Tipo_Diagnostico_idTipo_Diagnostico}}</td>
					<td>{{$dia->Diagnostico_General}}</td>



					

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $diagnostico->render() !!}

	</div>

	<div class="col-sm-4">

	</div>

@endsection
