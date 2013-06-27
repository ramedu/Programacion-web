 <?php
 	echo $_REQUEST['ide'];
	$con=mssql_connect("JOAN","ramon","12345");
    mssql_select_db("la_andariega",$con);
	$id=(int)$_REQUEST['ide'];
	if(isset($_REQUEST['nombre']))
	{
    $cad="update Proveedor set nombre='".$_REQUEST['nombre']."' where id_proveedor='".$id."'";
	mssql_query($cad);
	}
	if(isset($_REQUEST['telefono']))
	{
		$tel=(int)$_REQUEST['telefono'];
    $cad="update Proveedor set telefono='".$tel."' where id_proveedor='".$id."'";
	mssql_query($cad);
	}
	if(isset($_REQUEST['email']))
	{
    $cad="update Proveedor set email='".$_REQUEST['email']."' where id_proveedor='".$id."'";
	mssql_query($cad);	}
	if(isset($_REQUEST['nombre']))
	{
    $cad="update Proveedor set direccion='".$_REQUEST['direccion']."' where id_proveedor='".$id."'";
	mssql_query($cad);
	}
	header("Location: bus_pro.html");
?>