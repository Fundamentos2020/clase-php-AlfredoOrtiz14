<?php
    $user = "root";
    $dsn = "mysql:host=localhost;dbname=lista_tareas";
    $connect = new PDO($dsn, $user, '');

    //INSERT
    /*$connect->beginTransaction();
    $connect->exec("INSERT INTO categorias(nombre) VALUES ('categoria 3')");
    $connect->commit();*/

    //Consulta
    $id = 2;
    $sql = $connect->prepare('SELECT * FROM categorias WHERE id = :id_');
    $sql->bindParam(':id_', $id);
    $sql->execute();
    $resultado = $sql->fetchAll();

    var_dump($resultado);
?>