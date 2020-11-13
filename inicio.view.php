<!DOCTYPE html>
<?php
require 'functions.php';
$permisos = ['Administrador','Profesora','Madre'];
permisos($permisos);

?>
<html>
<head>
<title>Inicio | Registro </title>
    <meta name="description" content="Registro  Sis Universidad Martin Lutero Quilali" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="header">
        <h1 class="text-center">BIENVENIDO "UML"</h1>
        <h3><?php echo $_SESSION["username"] ?></h3>
</div>
<nav>
    <ul>
        <li class="active"><a href="inicio.view.php">Inicio</a> </li>
        <li><a href="alumnos.view.php">Registro de Alumnos</a> </li>
        <li><a href="docentes.view.php">Registro de docentes</a> </li>
        <li><a href="listadoalumnos.view.php">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de Notas</a> </li>
        <li><a href="listadonotas.view.php">Consulta de Notas</a> </li>
        
        <li class="right"><a href="logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
           <h1 class="text-center">"Sis Universidad "</h1>
           
        <?php
        if(isset($_GET['err'])){
            echo '<h3 class="error text-center">ERROR: Usuario no autorizado</h3>';
        }
        ?>
        <img src="C:\xampp\htdocs\aplicacion\imagenes.unijpg.jpg">
        <br>
        <hr>
        <p class="text-center"><strong>Integrantes </strong><br><br>yahoska<br>Alba Bellorin<br>Francis</p>
        <br>
        </div>
</div>

<footer>

    <p>Derechos reservados &copy; 2020</p>
</footer>

</body>

</html>