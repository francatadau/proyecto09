<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Users</title>
  </head>
  <body>

    <form action="borrarUsuarios.php" method="post">

      ID:<br>
      <input type="text" name="id">

      <br><br>

      	Nombre:<br>
      	<input type="text" name="nombre">

        <br><br>




      	<input type="submit" value="Borrar Usuario">
    	</form>

<br>
      <form action="insertarUsuariosForm.php">
        <input type="submit" value="Insertar Usuarios">
      </form>

<br>

      <form action="actualizarUsuariosForm.php">
        <input type="submit" value="Actualizar Usuarios">
      </form>

  <br>

      <form action="mostrarUsuarios.php">
        <input type="submit" value="Mostrar Usuarios">
      </form>


  </body>
</html>
