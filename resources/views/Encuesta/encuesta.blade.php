@extends ('layout')

@section('content')

	<div class="row">
		<div class="text-center">
				<H1 class="display-4"><strong>RESPUESTA HUMANA</strong></H1>
		
				

				</div>
				<div>
		<form action="/guardarencuesta" method="post">

			@csrf

			
				<div class="form-group">
					 

						<table  class="table table-hover">

								
								<input type="hidden" name="id" value="{{$id}}">
								@foreach ($racimo as $raci)
								

								<tr>
									
									
								<td><input type="checkbox" name="check[]" value="{{$raci->Diagnostico_idDiagnostico}}">
		
								
								{{$raci->racimo}}														
																		
								</td>
								</tr>
									
								
								@endforeach
						</table>

					
				
				</div>

				

				

				

				

			<button type="submit" class="btn btn-primary">Siguiente...</button>
		</form>
	</div>
	</div>

@endsection
