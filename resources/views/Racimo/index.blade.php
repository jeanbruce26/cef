@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>RACIMO
		<a href="{{ route('Racimo.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Racimo</th>
					<th width="20px">Diagnostico</th>

				</tr>
			</thead>

			<tbody>
				@foreach ($racimo as $ra)

				<tr>
					<td>{{$ra->idracimo}}</td>
					<td>{{$ra->racimo}}</td>
					<td>{{$ra->Diagnostico_idDiagnostico }}</td>


				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $racimo->render() !!}

	</div>

	

@endsection
