@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Clase
		<a href="{{ route('ObjetivoNoc.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Nombre</th>
					<th width="20px">Diagnostico General</th>


				</tr>
			</thead>

			<tbody>
				@foreach ($objetivonoc as $noc)

				<tr>
					<td>{{$noc->idObjetivo_Noc}}</td>
					<td>{{$noc->Nombre_Objetivo_Noc}}</td>
					<td>{{$noc->Diagnostico_General_idDiagnoostico_General}}</td>


					

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $objetivonoc->render() !!}

	</div>

	<div class="col-sm-4">

	</div>

@endsection
