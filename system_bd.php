<?php
    $pdo = new PDO('mysql:dbname=lista_app;host=localhost', 'root', '');

    if(isset($_GET['escrever'])) {
        try {
            $sth = $pdo->prepare('insert into tb_tarefas (descript) values (:descript)');
            $sth->execute(array(':descript' => $_POST['descript']));
            header('Location: index.php');
        } catch(PDOException $e) {
            // header('Location: index.php');
            echo $e->getMessage();
            echo "<button class='btn btn-danger' href='index.php'>Voltar</button>";
        }
    }
    if(isset($_GET['recuperar'])) {
        try {
            $sth = $pdo->prepare('select * from tb_tarefas');
            $sth->execute();
            $dados = $sth->fetchAll();
        } catch(PDOException $e) {
            // header('Location: index.php');
            echo $e->getMessage();
            echo "<button class='btn btn-danger' href='index.php'>Voltar</button>";
        }
    }
    if(isset($_GET['apagar'])) {
        try {
            $sth = $pdo->prepare('delete from tb_tarefas where id = :id');
            echo $sth->execute(array(':id' => $_GET['apagar']));
            header('Location: index.php');
        } catch(PDOException $e) {
            // header('Location: index.php');
            echo $e->getMessage();
            echo "<button class='btn btn-danger' href='index.php'>Voltar</button>";
        }
    }
    if(isset($_GET['editar'])) {
        try {
            $sth = $pdo->prepare('update tb_tarefas set descript = :descript where id = :id');
            echo $sth->execute(array(':descript' => $_POST['descript'], ':id' => $_GET['editar']));
            header('Location: index.php');
        } catch(PDOException $e) {
            // header('Location: index.php');
            echo $e->getMessage();
            echo "<button class='btn btn-danger' href='index.php'>Voltar</button>";
        }
    }
    if(isset($_GET['status'])) {
        try {
            $sth = $pdo->prepare('update tb_tarefas set status = 0 where id = :id');
            echo $sth->execute(array(':id' => $_GET['status']));
            header('Location: index.php');
        } catch(PDOException $e) {
            // header('Location: index.php');
            echo $e->getMessage();
            echo "<button class='btn btn-danger' href='index.php'>Voltar</button>";
        }
    }
?>