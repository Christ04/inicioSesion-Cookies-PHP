<html>

    <body>
    <center>
        <h1>Perfil</h1>
        <?php
        if (isset($_COOKIE["usuarioLogueado"])) {
            echo "<p>Usuario Logueado: " . $_COOKIE["usuarioLogueado"] . "</p>";
        } else {
            echo "No estas logueado";
        }

        function f_salir() {
            setcookie("usuarioLogueado", "", time() - 3600);
        }
        ?>

        <br>
        <button onclick="<?php f_salir(); ?>">Salir</button>
        <br>
        <a href="index.php">Inicio</a>
    </center>

</body>
</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





