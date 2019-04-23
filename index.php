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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords"
              content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
        <meta name="author" content="leamug">
        <title>Unique Login Form | Bootstrap Templates</title>
        <link href="css/style.css" rel="stylesheet" id="style">
                <!-- Bootstrap core Library -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <!-- Font Awesome-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">
            <h1 class='text-white'>Login Form</h1>
            <div class="form-login">
            <form method="POST" action="<?=URLBASE?>controladores/AccUsuario.php">
            
                <h4>Secure Login</h4>
                </br>
                <input type="text" id="nomusu" class="form-control input-sm chat-input" placeholder="username"/>
                </br></br>
                <input type="password" id="clave" class="form-control input-sm chat-input" placeholder="password"/>
                </br></br>
                <div class="wrapper">
                        <span class="group-btn">
                            <!-- como utilizar un action con el metodo post -->
                            <a href="#" class="btn btn-primary btn-md">Login <i class="fa fa-sign-in"></i></a>
                            <a href="#" class="btn btn-primary btn-md">Cambiar Clave <i class="fa fa-sign-in"></i></a>
                        </span>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    </body>
</html>
