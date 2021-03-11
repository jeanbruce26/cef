@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Dominio
		<a href="{{ route('Dominio.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Dominio</th>


				</tr>
			</thead>

			<tbody>
				@foreach ($dominio as $domi)

				<tr>
					<td>{{$domi->idDominio}}</td>
					<td>{{$domi->Nombre_Dominio}}</td>


					

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $dominio->render() !!}

	</div>

	<div class="col-sm-4">

	</div>

@endsection
