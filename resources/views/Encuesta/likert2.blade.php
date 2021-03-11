@extends ('layout')

@section('content')

	<div class="row">
		<div class="col">

				
				<h1 align="center"><strong>PLANEAMIENTO<strong></h1>
			


			
				<div class="form-group">

					
					 
						<table border="2"  class="table table-bordered" align="left">
						

								<tr>
									<td align="center"><strong>Codigo</strong></td>
									<td align="center"><strong>OBJETIVO NOC</strong></td>

									
   								

								</tr>	
								
								<tr>


								@foreach ($obj as $o)
									

									<?php 
									if($iddiag==$o->diagnostico_idDiagnostico ){
									 ?>					
									
									<tr><td>{{$o->idObjetivo_Noc }}</td>
									<td>{{$o->Nombre_Objetivo_Noc}}</td >
									<?php 
									$cod[]=$o->idObjetivo_Noc;
									}
									 ?>	
											
								@endforeach

									
									</tr>	
								


								<form action="/saveliket2" method="post">

									@csrf
																		
									<input type="hidden" name="idfamilia" value="{{ $idfamili }}">
									<input type="hidden" name="iddiag" value="{{ $iddiag }}">

						<table border="2"  class="table table-bordered" align="left">
								<tr>
									
									<td align="center"><strong>PLANIAMIENTO ESPESIFICOS NOC</strong></td>
									<td align="center" ><strong>CALIFICACIÓN PRE-TEST (ESCALA DE LIKERT)</strong></td>

								</tr>	
								<tr>							
								</tr>
									
								<tr>

									@foreach ($sub as $s)
									@foreach ($cod as $c)
									
									<?php 
									if($c==$s->Objetivo_Noc_idObjetivo_Noc ){
										$subcod[]=$s->idSub_Objetivos_Noc;	
									 ?>					
									
									<tr><td>{{$s->Sub_Objetivos_Noc}}</td>
									
										
									
									<td>

									<input type="hidden" name="on[]" value="{{ $c }}">
									<input type="hidden" name="sub_on[]" value="{{ $s->idSub_Objetivos_Noc }}">

									<select class="form-control" required name="lol[]" required>
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