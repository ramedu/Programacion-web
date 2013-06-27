 <?php
	$con=mssql_connect("JOAN","ramon","12345");
    mssql_select_db("la_andariega",$con);
    $pre=(float)$_REQUEST['precio_unitario'];
	$can=(float)$_REQUEST['cantidad'];
	$tot=$pre*$can;
	$cad="insert into Ventas (id_cliente, monto_total) values('".$_REQUEST['cliente']."','".$tot."')";
	$qu=mssql_query($cad);
	
	if (!$qu)
	{
    	echo "<script> alert('Error al registrar cliente'); </script>";
		header("Location: registro_cliente.html");
	}
	else
	{
		echo "<script> alert('Se han agregado los datos con éxito'); </script>";
		header("Location: registro_cliente.html");
	}
?>