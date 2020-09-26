<head>
		<meta charset="utf-8">
		<title><?php echo basename("","php");?></title>
</head>
<?php
	error_reporting(0);
	$nombre = $_POST["Nombre"];
	$autor = $_POST["Autor"];
	$isbn = $_POST["ISBN"];

	$server = "localhost";
	$user = "root";
	$password = "";
	$bd = "prueba";
	$connection = mysqli_connect($server, $user, $password, $bd);
	if(mysqli_connect_errno())
	{
		echo "Error al conectar, tipo: ".mysqli_connect_errno();
		exit();
	}
	else
	{
		echo "Conectado a la base de datos, llamada: ".$bd;
	}
	if(isset($_POST["envío"])){
		$sql = "INSERT INTO libro(Nombre, Autor, ISBN) VALUES ('".$nombre."', '".$autor."','".$isbn."')";
		if ($connection->query($sql) == TRUE) {
			echo "<br>"."Agregado con exito.";
		} else {
			echo "Error: " . $sql . "<br>" . $connection->error;
		}
	}
	$result = $connection->query("SELECT * 	FROM libro;");
	echo "<br>";
	if($result)
	{
		while($row = $result->fetch_assoc())
		{
			print_r($row);
			echo "<br>";
		}
	}
?>