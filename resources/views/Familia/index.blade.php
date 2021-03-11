@extends ('layout')

@section('content')

	<div class="col-sm-8">
		
		<h2>FAMILIAS
		
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">Codigo</th>
					<th width="20px">Familia</th>
					<th width="20px">Direccion</th>
					<th width="20px">Nº de Familiares</th>
					<th width="20px">Ingreso Mensual</th>
					<th width="20px">Estado Civil</th>
					<th width="20px">Religion</th>
					<th width="20px">Diagnostico Enfermero</th>


				</tr>
			</thead>

			<tbody>
				@foreach ($familia as $fami)

			

				<?php if($fami->id_user == $id_user ){?>
				<tr>
		
					<td>{{$id=$fami->idFamilia}}</td>
					<td>{{$fami->Familia}}</td>
					<td>{{$fami->Direccion}}</td>
					<td>{{$fami->Nun_Familiares}}</td>
					<td>S/. {{$fami->Ingreso_Mensual}}</td>
					<td>{{$fami->Estado_Civil}}</td>
						@foreach ($religion as $reli)
							<?php if($fami->Religion_idReligion == $reli->idReligion ){?>
							<td>{{$reli->religion}}</td>
							<?php } ?>
						@endforeach

						
					
					<td><a href="{{ url('/diagnostico',[$id])}}">Ver Diagnosticos</a>   </td>

					</tr>	
					<?php } ?>
					


					@endforeach

							
			
			</tbody>

		</table>
		{!! $familia->links() !!}

	</div>

	

@endsection
