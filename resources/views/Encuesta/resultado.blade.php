@extends ('layout')

@section('content')





<div class="jumbotron">
	<h1 class="display-1" align="center">Resultado de la Evaluacion</h1>
	<h2 class="display-3"> Familia: <strong>{{ $fami->Familia}}</strong></h2>
</div>



<table border="1" class="table">

<tr>
	<th>RACIMO</th>
	<th>EVALUACION PRE TEST</th>
	<th>EVALUACION POST TEST</th>
	<th>INCREMENTO/DISMINUYO</th>
	<th></th>

</tr>


<tr>

@foreach ($evalu as $ev)
		
		<tr>
			<td>{{$ev->subobjetivo->Sub_Objetivos_Noc}}</td>
			<td>{{$ev->valor}}</td>
			<td>{{$ev->valor2}}</td>
			<td>
				@if($ev->porcentaje_valor['aumento'])
					@if($ev->valor === $ev->valor2)
						{{$ev->porcentaje_valor['porcentaje']}} %
					@else
						+ {{$ev->porcentaje_valor['porcentaje']}} %
					@endif
				@else
					- {{$ev->porcentaje_valor['porcentaje']}} %
				@endif
			</td>

			<td>
				@if($ev->porcentaje_valor['aumento'])
					@if($ev->valor === $ev->valor2)
						<img src="/admin/img/regular.jpg" width="50" height="50">
					@else
						<img src="/admin/img/alegre.jpg" width="50" height="50">
					@endif
				@else
					<img src="/admin/img/trizte.jpg" width="50" height="50">
				@endif
			</td>
		</tr>

@endforeach


		
</tr>

</table>


@endsection


