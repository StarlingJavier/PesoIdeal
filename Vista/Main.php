<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Peso Ideal</title>
<link  rel="icon"   href="Vista\IMG\pesa.ico" type="image/ico" />
<link rel="stylesheet" href="Vista\CSS\main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script>

function SumitEnviar()
{
	
	let Altura = document.getElementById("IdAltura");
	let Edad = document.getElementById("IdEdad");
	let expreg = new RegExp("^[0-9]*$");
	
	if( ((Altura.value=="") ||  (Edad.value=="")) ){
		alert("Debe ingresar los datos");
	}else if((expreg.test(Altura.value)) && (expreg.test(Edad.value))){
		document.getElementById('enviar').submit();	
	}else{
		alert("Debe ingresar datos validos");
	}
	
}

</script>

</head>
<body>

	<div id='container'>
		<div class='data'>
			<form id="enviar" action="Controlador/ControladorResultado.php" method="post">
				<input type='text' name="Altura" id="IdAltura" placeholder='Ingrese su altura en cm:'  value="" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/>
				<input type='text' name="Edad" id="IdEdad" placeholder='Ingrese su edad:'  value="" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/>
				
				<a class="btn btn-primary" id="btnEnviar" href="javascript:SumitEnviar()">Calcular</a><br>
				<img src="Vista\IMG/PESA.jpg" alt="" width="100px" height="139px" />
			</form>
		</div>
		<div class='info'>
			<h1>Precione Calcular para saber su peso ideal</h1>
			<p>Le indicaremos con cual peso ideal en Km, una ves indicado puede tomar las medidas de salud necarias para obtnerlo en caso de no ser asi...</p>
			<p><b>Aprenderas:</b> 
				<span>Tu peso ideal</span>
			</p>
		</div>
	</div>

</body>
</html>