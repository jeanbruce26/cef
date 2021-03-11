@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Tipo Diagnostico
		<a href="{{ route('TipoDiagnostico.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Tipo</th>



				</tr>
			</thead>

			<tbody>
				@foreach ($tipodiagnostico as $tipo)

				<tr>
					<td>{{$tipo->idTipo_Diagnostico}}</td>
					<td>{{$tipo->Nombre_Tipo_Diagnostico}}</td>



					

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $tipodiagnostico->render() !!}

	</div>

	<div class="col-sm-4">

	</div>

@endsection
