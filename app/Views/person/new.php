<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Persona</title>
</head>
<body>
	<h1>Crear Persona</h1>

	<form action="/person" method="post">
		<div>
			<p>
			<div>
				<label>ingrese la edad</label>
				<input type="number" name="edad">
			</div>
			</p>
			<p>
				
			
			<div>
				<label>ingrese el nombre</label>
				<input type="text" name="name">
			</div></p>
			<p>
				
			
			<div>
				<label>ingrese la descripcion</label>
				<textarea name="desc">
					
				</textarea>			</div>
			</p>
		</div>
		


		<input type="submit" value="Enviar">
	</form>
</body>
</html>