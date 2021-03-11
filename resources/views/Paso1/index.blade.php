@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>PASO1
		<a href="{{ route('Paso1.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Familia</th>
					<th width="20px">Diagnostico</th>
					<th width="20px">Racimo</th>

				</tr>
			</thead>

			<tbody>
				@foreach ($paso1 as $pa)

				<tr>
					<td>{{$pa->idPaso1}}</td>
					<td>{{$pa->Familia_idFamilia}}</td>
					<td>{{$pa->Diagnostico_idDiagnostico}}</td>
					<td>{{$pa->racimo_idracimo}}</td>


				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $racimo->render() !!}

	</div>

	

@endsection