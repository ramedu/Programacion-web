<?php
session_start();
$con=mssql_connect("JOAN","ramon","12345");
mssql_select_db("la_andariega",$con);
$cons=mssql_query("select * from usuarios where id_user='".$_REQUEST['usuario']."'");
$tipo=mssql_fetch_object($cons);

switch ($tipo->tipo)
{
	case 1:
		$cad= "select * from usuarios where id_user='".$_REQUEST['usuario']."' and pass='".$_REQUEST['pass']."'";
		$cons=mssql_query($cad);
		if (mssql_num_rows($cons)==1)
		{
			$datos=mssql_fetch_object($cons);
			$_SESSION['nombre']=$datos->id_user;
			header("Location: principal_compras.html");
		}
		else
			header("Location: index.php");
	break;
	case 2:
	$cad= "select * from usuarios where id_user='".$_REQUEST['usuario']."' and pass='".$_REQUEST['pass']."'";
		$cons=mssql_query($cad);
		if (mssql_num_rows($cons)==1)
		{
			$datos=mssql_fetch_object($cons);
			$_SESSION['nombre']=$datos->id_user;
			header("Location: principal_ventas.html");
		}
		else
			header("Location: index.php");
	break;
	case 3:
	$cad= "select * from usuarios where id_user='".$_REQUEST['usuario']."' and pass='".$_REQUEST['pass']."'";
		$cons=mssql_query($cad);
		if (mssql_num_rows($cons)==1)
		{
			$datos=mssql_fetch_object($cons);
			$_SESSION['nombre']=$datos->id_user;
			header("Location: principal_almacen.html");
		}
		else
			header("Location: index.php");
	break;
	default:
	header("Location: index.php");
	break;
}
?>