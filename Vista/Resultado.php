<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Resultado</title>
<link  rel="icon"   href="..\Vista\IMG\pesa.ico" type="image/ico" />
<link rel="stylesheet" href="..\Vista\CSS\main.css">
</head>
<body>

	<div id='container'>
		<div class='data'>
			<form action="..\index.php" method="post">
				<button type="submit" value="Submit">Volver</button><br><br>
				<img src="..\Vista\IMG/IDEAL.jpg" alt="" width="250px" height="210px" />
			</form>
		</div>
		<div class='info'>
			<h1>Su peso ideal es de</h1>
			<span> <?php echo $rPIdeal;?> Kg </span> 
			<h2>Esto para una altura de</h2>
			<span> <?php echo $Altura;?> Cm </span> 
			<h2>En una edad de</h2>
			<span> <?php echo $Edad;?> Años </span> 
		</div>
	</div>

</body>
</html>