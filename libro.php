<html>
	<head>
			<meta charset="utf-8">
			<title><?php echo basename("","php");?></title>
	</head>
	<body>
		<form action='AgregaLibro.php' method="POST">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<center>
				Título del libro:
				<input type="text" name="Nombre" minlength="2"><br><br>
				Autor:
				<input type="text" name="Autor" minlength="2"><br><br>
				ISBN:
				<input type="number" name ="ISBN" min="0000000000",max="9999999999999"><br><br>
				<br>
				<input type="submit" name="envío" value="Enviar">
			</center>
		</form>
	</body>
</html>