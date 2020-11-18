<?php
if(!$_POST){
    header('location: docentes.view.php');
}
else {
    //incluimos el archivo funciones que tiene la conexion
    require 'functions.php';
    //Recuperamos los valores que vamos a llenar en la BD
    $nombres = htmlentities($_POST ['nombresDoc']);
    $apellidos = htmlentities($_POST ['apellidosDoc']);
    $numcarnet= htmlentities($_POST ['numcarnetDoc']);
     $sexo = htmlentities($_POST['sexoDoc']);
   

    //insertar es el nombre del boton guardar que esta en el archivo docentes.view.php
    if (isset($_POST['insertarDoc'])){

        $result = $conn->query("insert into alumnos (num_lista, nombres, apellidos, genero, carrera,id_grado, id_seccion) values ('$numlista', '$nombres', '$apellidos', '$genero','$carrera' '$idgrado','$idseccion' )");
        if (isset($result)) {
            header('location:alumnos.view.php?info=1');
        } else {
            header('location:alumnos.view.php?err=1');
        }// validación de registro

    //sino boton modificar que esta en el archivo alumnoedit.view.php
    }else if (isset($_POST['modificar'])) {
        //capturamos el id alumnos a modificar
            $id_alumno = htmlentities($_POST['id']);
            $result = $conn->query("update alumnos set num_lista = '$numlista', nombres = '$nombres', apellidos = '$apellidos', genero = '$genero', carrera = '$carrera'id_grado = '$idgrado', id_seccion = '$idseccion' where id = " . $id_alumno);
            if (isset($result)) {
                header('location:alumnoedit.view.php?id=' . $id_alumno . '&info=1');
            } else {
                header('location:alumnoedit.view.php?id=' . $id_alumno . '&err=1');
            }// validación de registro
    }

}

