 <?php
	$con=mssql_connect("JOAN","ramon","12345");
    mssql_select_db("la_andariega",$con);
	$id=(int)$_REQUEST['id'];
    $cad="delete from Proveedor where id_proveedor='".$id."'";
	$qu=mssql_query($cad);
	if (!$qu)
	{
    	echo "<script> alert('Error al registrar cliente'); </script>";
		header("Location: eliminar_proveedor.html");
	}
	else
	{
		echo "<script> alert('Se han agregado los datos con éxito'); </script>";
		header("Location: eliminar_proveedor.html");
	}
?>