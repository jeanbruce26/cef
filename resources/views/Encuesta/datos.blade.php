@extends ('layout')

@section('content')


<script type="text/javascript">
	
	function num(e) {
		key=e.keyCode || e.wich;
		teclado= String.fromCharCode(key);
		numeros="1234567890";
		especiales="8-37-38-46";
		teclado_especial = false;
		for (var i in especiales) {
			if(key==especiales[i]){
				teclado_especial=true;
			}
		}
		if (numeros.indexOf(teclado)==-1 && !teclado_especial) {
			return false;
		}
			}


	function let(e) {
		key=e.keyCode || e.wich;
		teclado= String.fromCharCode(key).toLowerCase();
		letras="abcdefghijklmnñopqrstuvwxyz áéíóú";
		especiales="8-37-38-46";
		teclado_especial = false;

		for (var i in especiales) {
			if(key==especiales[i]){
				teclado_especial=true;break;
			}
		}
		if (letras.indexOf(teclado)==-1 && !teclado_especial) {
			return false;
		}
			}
</script>
	<div class="row">
		<div class="col">
				<h1 align="center"><strong>CARACTERIZACIÓN DE LA FAMILIAR</strong></h1>
		
		<form action="/mostrar" method="post">

			@csrf

			
				<div class="form-group">
					<label form=""> <h3>Familia</h3></label> 
					<input type="text" class="form-control" name="nombrefamilia" required onkeypress="return let(event)" placeholder="Apellidos" maxlength="40">
				</div>

				<div class="form-group">
					<label form=""> <h3>Dirección</h3></label> 
					<input type="text" class="form-control" name="direccion" required placeholder="Dirección Actual" maxlength="100">					
				</div>

				<div class="form-group">
					<label form=""> <h3>Composición Familiar</h3></label> 
					<input type="num" class="form-control" name="compofamiliar" required onkeypress="return num(event) " placeholder="Nº de integrantes" maxlength="2">
				</div>

				<div class="form-group">
					<label form=""> <h3>Ingreso Mensual</h3></label> 
					<input type="num" class="form-control" name="ingresomensual" required onkeypress="return num(event)" placeholder="S/." maxlength="5">
				</div>

				<div class="form-group">
					<label form=""> <h3>Estado Civil</h3></label> 
					
					<select class="form-control" id="" name="estado" required>
							<option value=""> SELECCIONE
								<option value="Soltero">Soltero</option>
								<option value="Casados">Casados</option>
								<option value="Convivientes">Convivientes</option>
								<option value="Divorciados">Divorciados</option>
								<option value="Viudo(a)">Viudo(a)</option>
							</option>

						</select>
				</div>

				<div class="form-group">
					<label form=""> <h3>Religion</h3></label> 

						<select class="form-control" id="" name="religion" required>
							<option value=""> SELECCIONE
								@foreach ($religion as $reli)
								<option value="{{$reli->idReligion}}">{{$reli->religion}}</option>
								@endforeach
							</option>

						</select>
				
				</div>

				

				<input type="hidden" name="id_user" value="{{$id_user}}">

				

				

			<button type="submit" class="btn btn-primary">REGISTRAR</button>
		</form>
	</div>
	</div>

@endsection
	