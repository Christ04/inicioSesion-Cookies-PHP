<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <body>


    <center><h1>LOGIN EN PHP</h1></center>

    <p>Esta aplicacion muestra un claro ejemplo del uso de las Cookies para determinar si un usuarios a iniciado sesion
        en nuestra pagina Web, cabe decir que no tengo en cuenta aspectos del diseño si no solo en la parte funcional, 
        pues el objetivo es entende como funcionan las Cookies y un uso practico en PHP, esta aplicacion cuenta con las siguientes caracteristicas: </p>
    <ul>
        <li>Uso de las Cookies y el control de las mismas</li>
        <li>Login y validacion de un usuario inscrito.</li>
        <li>Declaracion de Array de Objetos</li>
        <li>Validacion de formulario con PHP</li>
        <li>Uso de clases en PHP</li>
    </ul>

    <h1>Usuarios Registrados</h1>
    <table style="background-color: #f1f1c1; border-spacing: 5px;">

        <thead><td><h3>Usuario</h3></td><td><h3>Contraseña</h3></td></thead>
    <tbody>
        <tr><td>christian</td><td>christianadmin</td></tr>
        <tr><td>camila</td><td>camilaadmin</td></tr>
        <tr><td>marcela</td><td>marcelaadmin</td></tr>
    </tbody>

</table>

<center>
    <h1>Iniciar Sesión</h1>
    <form action="bienvenida.php" method="POST">
        <input name="inputUsuario" type="text" placeholder="Usuario" required>
        <br><br>
        <input name="inputContrasena" type="password" placeholder="Contraseña" required>
        <br><br>
        <input type="submit" name="enviar">
    </form>
</center>



<?php
/* //*************Otro tipo de Autenticacion**********
  if (!isset($_SERVER['PHP_AUTH_USER'])) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  echo 'Texto a enviar si el usuario pulsa el botón Cancelar';
  exit;
  } else {
  echo "<p>Hola {$_SERVER['PHP_AUTH_USER']}.</p>";
  echo "<p>Tu ingresaste {$_SERVER['PHP_AUTH_PW']} como tu password.</p>";
  }
 */
?>

</body>
</html>
