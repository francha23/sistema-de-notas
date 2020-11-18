<?php
if(!$_POST){
    header('location: alumnos.view.php');
}
else {
    //incluimos el archivo funciones que tiene la conexion
    require 'functions.php';
    //Recuperamos los valores que vamos a llenar en la BD
    $nombres = htmlentities($_POST ['nombres']);
    $apellidos = htmlentities($_POST ['apellidos']);
    $genero = htmlentities($_POST['genero']);
    $numlista = htmlentities($_POST['numlista']);
    $idcarrera = htmlentities($_POST['carreras']);
    $idanio = htmlentities($_POST['anio']);
    $idseccion = htmlentities($_POST['seccion']);


    //insertar es el nombre del boton guardar que esta en el archivo alumnos.view.php
    if (isset($_POST['insertar'])){

        $result = $conn->query("insert into alumnos (num_lista, nombres, apellidos, genero, id_anio, id_seccion, id_carrera) values ('$numlista', '$nombres', '$apellidos', '$genero', '$idanio', '$idseccion', '$idcarrera')");
        if (isset($result)) {
            header('location:alumnos.view.php?info=1');
        } else {
            header('location:alumnos.view.php?err=1');
        }// validación de registro

    //sino boton modificar que esta en el archivo alumnoedit.view.php
    }else if (isset($_POST['modificar'])) {
        //capturamos el id alumnos a modificar
            $id_alumno = htmlentities($_POST['id']);
            $result = $conn->query("update alumnos set num_lista = '$numlista', nombres = '$nombres', apellidos = '$apellidos', genero = '$genero',idanio = '$anio,'id_seccion = '$seccion', idcarrera = '$carrera' where id = " . $id_alumno);
            if (isset($result)) {
                header('location:alumnoedit.view.php?id=' . $id_alumno . '&info=1');
            } else {
                header('location:alumnoedit.view.php?id=' . $id_alumno . '&err=1');
            }// validación de registro
    }

}

