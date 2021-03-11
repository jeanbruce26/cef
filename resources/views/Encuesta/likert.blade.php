@extends ('layout')

@section('content')

	<div class="row">
		<div class="col">

				
				<h1 align="center"><strong>DIAGNOSTICO ENFERMERO<strong></h1>
			
					

			
				<div class="form-group">

							
					 
						<table border="3px"  class="table table-bordered" align="left">
						

								<tr>

									<td align="center"><strong>DOMINIO</strong></td>
									<td align="center"><strong>CLASE</strong></td>
									<td align="center"><strong>TIPO DE CLASE</strong></td>
									<td align="center"><strong>DIAGNOSTICO GENERAL</strong></td>
									<td align="center"><strong>ACCIÓN</strong></td>

	   								

								</tr>	
								
								
								<tr>
<!------------------------------------------------------ID CLASE Y ID DIAGNOSTICO----------------------------------------------------------->
								
								@foreach ($diag as $di)
								@foreach ($encu as $e)									
									<?php if ( ($di->idDiagnostico==$e->Diagnostico_idDiagnostico) && ($e->idfamilia==$id)){	
											$cod=$di->idDiagnostico;
											echo "<td>".$di->clase->dominio->Nombre_Dominio;	
											echo "<td>".$di->clase->Nombre_Clase;
											echo "<td>".$di->tipoDiagnostico->Nombre_Tipo_Diagnostico;
											
											echo "<td>".$di->Diagnostico_General;	

											
																	
 										?> 

 							 								

 										<td > 
 										<?php $id_diag=0; ?>
 										@if(sizeof($exis)==0)
 										<a href="{{url('/likert2', [$cod , $id])}}">EVALUAR</a>
 										
 										@else
 											@foreach ($exis as $e)
	 											<?php  if($e->id_diag == $cod){
	 												$id_diag = $e->id_diag;
	 											}?>	 											
 											@endforeach

 												@if($id_diag == $cod)
	 												EVALUADO
	 											
	 											@else
	 												<a href="{{url('/likert2', [$cod , $id])}}">EVALUAR</a>
	 											@endif


 										@endif
 											
 										 </td></tr>   </td></tr>
 										
 									<?php }?>																								
								@endforeach
								@endforeach								
<!---------------------------------ID DOMINIO y CLASE-------------------------------------------------------------------------------->									
 											
											
<!------------------------------------------------------------------------------------------------------------------------------>
								
								
								

								</tr>		
								
						</table>

							
					<form action="/resultado/{{$id}}" method="post">
						
						@csrf



						<button type="submit" class="btn btn-primary">RESULTADOS</button>
					</form>



				</div>
				</div>
				

				

				

			
			
		
		
	</div>
	</div>

@endsection