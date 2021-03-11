@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Clase
		<a href="{{ route('IntervencionesNic.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Nombre</th>
					<th width="20px">Sub Objetivo</th>


				</tr>
			</thead>

			<tbody>
				@foreach ($nic as $n)

				<tr>
					<td>{{$n->idIntervenciones_Nic}}</td>
					<td>{{$n->Nombre_Intervenciones_Nic}}</td>
					<td>{{$n->Sub_Objetivos_Noc_idSub_Objetivos_Noc}}</td>


					

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $nic->render() !!}

	</div>

	<div class="col-sm-4">

	</div>

@endsection
