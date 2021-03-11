@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Posible Causa
		<a href="{{ route('PosibleCausa.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Diagnostico</th>
					<th width="20px">Diagnostico Espesifico</th>



				</tr>
			</thead>

			<tbody>
				@foreach ($posiblecausa as $po)

				<tr>
					<td>{{$po->idPosible_Cuasa}}</td>
					<td>{{$po->Nombre_Posible}}</td>
					<td>{{$po->Diagnostico_idDiagnostico}}</td>




					

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $posiblecausa->render() !!}

	</div>

	<div class="col-sm-4">

	</div>

@endsection