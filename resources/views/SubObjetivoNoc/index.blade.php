@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>Clase
		<a href="{{ route('SubObjetivoNoc.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Sub Objetivo</th>
					<th width="20px">Codigo Objetivo</th>


				</tr>
			</thead>

			<tbody>
				@foreach ($sub as $s)

				<tr>
					<td>{{$s->idSub_Objetivos_Noc}}</td>
					<td>{{$s->Sub_Objetivos_Noc}}</td>
					<td>{{$s->Objetivo_Noc_idObjetivo_Noc}}</td>


					

				</tr>

				@endforeach
			</tbody>
		</table>
		{!! $sub->render() !!}

	</div>

	<div class="col-sm-4">

	</div>

@endsection
