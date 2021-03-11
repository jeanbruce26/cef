@extends ('layout')

@section('content')

	<div class="row">
		<div class="col">

				
				
			


			
				<div class="form-group">

					<h2 align="center"><strong>INTERVENCIONES NIC<strong></h2>
					 
						<table border="2"  class="table table-bordered" align="left">
						

								<tr>
									
									<td align="center"><strong>INTERVENCIONES NIC</strong></td>
									<td align="center" colspan="5"><strong>DESARROLLO</strong></td>

									
   								

								</tr>	
								
								<tr>


								@foreach ($nic as $n)
									
									<?php if($iddiag==$n->diagnostico_idDiagnostico ){ ?>
									
									<tr><td>{{$n->Nombre_Intervenciones_Nic}}</td >
										<td align="center"><input type="checkbox" name="check"></td>
									<?php } ?>
											
								@endforeach

									
									</tr>	
								
									@foreach ($obj as $o)
									

									<?php 
									if($iddiag==$o->diagnostico_idDiagnostico ){
									 ?>					
									
									
									<?php 
									$cod[]=$o->idObjetivo_Noc;
									}
									 ?>	
											
								@endforeach

								<form action="/saveliket3" method="post">

									@csrf
																		
									<input type="hidden" name="idfamilia" value="{{ $idfamili }}">
									<input type="hidden" name="iddiag" value="{{ $iddiag }}">
						
						<h2 align="center"><strong>CALIFICACIÓN POST-TEST (ESCALA DE LINKERT)<strong></h2>		
						<table border="2"  class="table table-bordered" align="left">
								<tr>
									
									<td align="center"><strong>OBJETIVO ESPESIFICOS NOC</strong></td>
									<td align="center" colspan="5"><strong>CALIFICACIÓN PRE-TEST (ESCALA DE LINKERT)</strong></td>

								</tr>	

							

								<tr>




									@foreach ($sub as $s)
									@foreach ($cod as $c)
									
									<?php 
									if($c==$s->Objetivo_Noc_idObjetivo_Noc ){
										$subcod[]=$s->idSub_Objetivos_Noc;	
									 ?>					
									
									<tr><td>{{$s->Sub_Objetivos_Noc}}</td>
									
									<input type="hidden" name="on[]" value="{{ $c }}">
									<input type="hidden" name="sub_on[]" value="{{ $s->idSub_Objetivos_Noc }}">
									
									<td>

								

									<select class="form-control" name="lol[]" required>
											<option> CALIFICAR
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</option>

										</select>
			
									
									</td>
									<?php 
									}
									?>	



									
									@endforeach

									@endforeach

									

								</tr>	

						</table>
						<button type="submit" class="btn btn-primary">Siguiente...</button>
						</form>
				
				</div>
				</div>
				

				

				

			
			
		
		
	</div>
	</div>

@endsection