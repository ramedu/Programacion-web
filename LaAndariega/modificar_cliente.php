<html>
	<title> ModificarCliente </title>
	<head>
		<script src="jquery-1.10.0.min.js">
		</script>

		<script>
		$(document).ready(function()
		{
			$("button").click(function()
			{
				$("#div1").fadeToggle("slow");
			});
		});
		
		</script>

		<script>
			function mi_alerta()
			{
				alert("El cliente esta siendo modificado");
			}
		</script>

	</head>	
	<style>

		p.one
	{
		border-style:solid;
		border-color:D5762E;
	}

	h1
	{
		text-shadow: 10px 4px 5px #C41616;
	}

	</style>



	<style>
		a:link,a:visited
		{
			display:block;
			font-weight:bold;
			color:D5762E;
			background-color:D5762E;
			width:120px;
			text-align:center;	
			padding:4px;
			text-decoration:none;
		}

		a:hover,a:active
		{
			background-color:991E1E;
			text-decoration:underline;
		}

		.right
		{
			position:absolute;
			left:1200px;
			top:260px;
		}

		.right1
		{
			position:absolute;
			left:1200px;
			top:300px;
		}

		a.one:visited
		{
			color:#FAAC58
		}
	
		p.italic
		{
			font-style:italic;
		}

		p.thick 
		{
			font-weight:bold;
		}	
	

	</style>

	<style>
		table, td, th
		{
			padding:3px 7px 2px 7px;
		}
	</style>

	<body background = "vintage2.jpg">
	<h1><div align="center"><font size=15 color="D5762E"><i><b><p class="one">ANDARIEGA</p></b></i></font></div></h1>
	<br>
	<div align="center"><font size=6 color="#FE9A2E"><i> Modificar Clientes </i></font></div>
	<br>
	<br>
	<aside>			
		<p class="italic" class="thick"><div class="right"><font size=3><b><a class="one" href="principal_ventas.html" target="_self"><span style="cursor:progress">Página Principal</span></a></b></font></div></p>
			<p class="italic" class="thick"><div class="right1"><font size=3><b><a class="one" href="registro_cliente.html" target="_self"><span style="cursor:progress">Clientes</span></a></b></font></div></p>
		</aside>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="act_cli.php" method="post" name="form">
<table align='center' id='Proveedor'>
		<tr>
        	<?php echo "<th><input name='ide' value='".$_REQUEST['id']."'>";
            ?>
	        <th><font color=#FE9A2E>Nombre</font></th>
			<td><input type='nombre' name='nombre' /></td>
            <th><font color=#FE9A2E>Telefono</font></th>
			<td><input type='telefono' name='telefono'/></td>
            <th><font color=#FE9A2E>Email</font></th>
			<td><input type='email' name='email' /></td>
            <th><font color=#FE9A2E>Dirección</font></th>
			<td><input type='direccion' name='direccion' /></td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<td> </td>
			<td> </td>
			<td> </td>
			<td><input type='submit' value='Modificar' onClick='mi_alerta()'/></td>
		</tr>
	</table>
	</form>
		
	

	</body>
	
<html>
