<?php


include_once $_SERVER['DOCUMENT_ROOT'] ."/proyecto_uno/models/conexion_mysql_pdo.php";



$sentencia = $base_de_datos->query("SELECT * FROM cliente;");
$clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Cliente</h1>
		<div>
			<a class="btn btn-success" href="../Cliente/index.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Direccion</th>
					<th>Telf</th>
					<th>Fecha</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($clientes as $cliente){ ?>
				<tr>
					<td><?php echo $cliente->id ?></td>
					<td><?php echo $cliente->nombre ?></td>
					<td><?php echo $cliente->direccion ?></td>
					<td><?php echo $cliente->telf ?></td>
					<td><?php echo $cliente->fecha_nacimiento ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>