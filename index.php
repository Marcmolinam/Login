<?php
    include("lib/constantes.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="/controlador/accUsuario.php" method="post">
           <div class="form-group">
          <label for="nombre">Nombre Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresar Nombre">
        </div>
        <div class="form-group">
          <label >Password</label>
          <input type="password" class="form-control" id="clave" name="usuario" placeholder="Clave">
        </div>
        <button type="submit" class="btn btn-primary">aceptar</button>
      </form>
    </body>
</html>
