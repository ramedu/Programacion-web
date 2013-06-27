 <?php
	$con=mssql_connect("JOAN","ramon","12345");
    mssql_select_db("la_andariega",$con);
    $num=(int) $_REQUEST['telefono'];
    $cad="insert into Proveedor values('".$_REQUEST['nombre']."','".$num."','".$_REQUEST['email']."','".$_REQUEST['direccion']."')";
	$qu=mssql_query($cad);
	if (!$qu)
	{
    	echo "<script> alert('Error al registrar proveedor'); </script>";
		header("Location: registro_proveedor1.html");
	}
	else
	{
		echo "<script> alert('Se han agregado los datos con éxito'); </script>";
		header("Location: registro_proveedor1.html");
	}
?>