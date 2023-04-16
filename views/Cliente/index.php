<?php
echo 'Hola , ahorita vas a ingresar un cliente';
?>

<form action="/proyecto_uno/controllers/ClienteController.php" method="POST">

<input type="text" placeholder="Nombre" value="s" name="nombre"/><br>
<input type="text" placeholder="Direccion" value="d" name="direccion"/><br>
<input type="number" placeholder="Telefono" value="98765" name="telf"/><br>
<input type="date" placeholder="fecha nacimiento" value="1988-03-12" name="fecha_nacimiento"/><br>

<input type="submit" text="enviar si todo esta ok"/>
</form>