<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="css/estilos.css">
	<script>
		function revisar(elemento)
		{
			if(elemento.value=='')
			{
				elemento.className='error';
			}
			else
			{
				elemento.className='input';
			}
		}
		function revisaNumero(elemento)
		{
			if(elemento.value!='')
			{
				var data =elemento.value;
				if(isNaN(data))
				{
					elemento.className='error';
				}
				else
				{
					elemento.className='input';
				}
			}
		}
		function revisarLongitud(elemento,min)
		{
			if(elemento.value!='')
			{
				var data=elemento.value;
				if (data.length < min)
				{
					elemento.className='error';
				}
				else
				{
					elemento.className='input';
				}
			}
		}
		function revisarEmail(elemento)
		{
			if(elemento.value!='')
			{
				var data=elemento.value;
				var exp=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/;
				if(!exp.test(data))
				{
					elemento.className='error';
				}
				else
				{
					elemento.className='input';
				}
			}
		}
		function validar()
		{
			var datosCorrectos=true;
			var error="";
			if(document.getElementById("nombre").value=="")
			{
				datosCorrectos=false;
				error="\n El nombre esta vacio";
			}
			if(document.getElementById("telefono").value=="")
			{
				datosCorrectos=false;
				error="\n Debes poner un telefono";
			}
			if(isNaN(document.getElementById("telefono").value))
			{
				datosCorrectos=false;
				error="\n El telefono debe tener solo numeros";
			}
			var exp=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/;
			if(!exp.test(document.getElementById("email").value))
			{
				datosCorrectos=false;
				error="\n Email invalido";
			}
			if(document.getElementById("mensaje").value.length<30)
			{
				datosCorrectos=false;
				error="\n El mensaje debe ser mayor a 30 caracteres";
			}
			
			if(!datosCorrectos)
			{
				alert('Hay errores en el formulario '+error);
			}
			return datosCorrectos;
		}
	</script>
</head>
<body>
	<div id="contenedor-form">
		<form action="#" method="post" onsubmit="return validar()">
			<p class="nombre"><input class="input" placeholder="Nombre" onblur="revisar(this)"     onkeyup="revisar(this)" id="nombre" name="nombre" autocomplete="off" type="text"></p>
			<p class="email"><input class="input" placeholder="Email*" onblur="revisar(this);revisarEmail(this)"     onkeyup="revisar(this);revisarEmail(this)" id="email" name="email" autocomplete="off" type="text"></p>
			<p class="telefono"><input class="input" placeholder="Telefono*" onblur="revisar(this);revisaNumero(this)"     onkeyup="revisar(this);revisaNumero(this)" id="telefono" name="telefono" autocomplete="off" type="text"></p>
			<p class="telefono"><input class="input" placeholder="Telefono*" onblur="revisar(this);revisaNumero(this)"     onkeyup="revisar(this);revisaNumero(this)" id="telefono" name="telefono" autocomplete="off" type="text"></p>
			<p class="mensaje"><textarea class="input" name="mensaje" id="mensaje" autocomplete="off" placeholder="Mensaje" onblur="revisar(this);revisarLongitud(this,30)"     onkeyup="revisar(this);revisarLongitud(this,30)" cols="30" rows="10"></textarea></p>
			<div class="enviar"><input type="submit" id="enviar" value="ENVIAR">
									<div class="transicion"></div>
			</div>
		</form>
	</div>
</body>
</html>
