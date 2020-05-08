<?php

    class Tarea{
        public $_id;
        public $_titulo;
        public $_descripcion;
        public $_fecha_limite;
        public $_completada;
        public $_categoria_id;

        public function __construct($id, $titulo,$descripcion, $fecha_limite, $completada, $categoria_id){
            $this->_id = $id;
            $this->_titulo = $titulo;
            $this->_descripcion = $descripcion;
            $this->_fecha_limite = $fecha_limite;
            $this->_completada = $completada;
            $this->_categoria_id = $categoria_id;

        }

    }
    try{
        $dns = 'mysql:host=localhost;dbname=lista_tareas';
        $username = 'root';
        $password = '';

        $connection = new PDO($dns, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $id = 2;

        $query = $connection->prepare('SELECT * FROM tareas WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        $tareas = array();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $tarea = new Tarea($row['id'], $row['titulo'], $row['descripcion'], $row['fecha_limite'], $row['completada'], $row['categoria_id']);
            $tareas[] = $tarea;
        }

        var_dump($tareas);
    }
    catch(PDOException $e){
        echo "Error".$e;
    }

?>