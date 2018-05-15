<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Users</title>
  </head>
  <body>

    <form action="actualizarUsuarios.php" method="post">

      ID:<br>
      <input type="text" name="id">

      <br><br>

      	Nombre:<br>
      	<input type="text" name="nombre">

        <br><br>

      	Apellidos:<br>
      	<input type="text" name="apellidos">

      	<br><br>

        Edad:<br>
        <input type="text" name="edad">

        <br><br>

        Curso:<br>
      	<input type="text" name="curso">

      	<br><br>

        Puntuacion:<br>
      	<input type="text" name="puntuacion">

        <br><br>

        Correo:<br>
      	<input type="text" name="correo">

      	<br><br>



      	<input type="submit" value="Actualizar">
    	</form>

<br>
      <form action="insertarUsuariosForm.php">
        <input type="submit" value="Insertar Usuarios">
      </form>

<br>

      <form action="borrarUsuariosForm.php">
        <input type="submit" value="Borrar Usuarios">
      </form>

<br>

          <form action="mostrarUsuarios.php">
            <input type="submit" value="Mostrar Usuarios">
          </form>

  </body>
</html>
