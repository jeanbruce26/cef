@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Religion
		<a href="{{ route('Religion.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Religion</th>

				</tr>
			</thead>

			<tbody>
				@foreach ($reli as $relis)

				<tr>
					<td>{{$relis->idReligion}}</td>
					<td>{{$relis->religion}}</td>

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $reli->render() !!}

	</div>

	<div class="col-sm-4">
		mensaje
	</div>

@endsection
