<?php
    $_GET['recuperar'] = true;
    require 'system_bd.php';
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>App Lista de Tarefas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" width="50"></a>
            <div class="collapse navbar-collapse">
                <h2>Lista Tarefas</h2>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row mt-5">
            <section id="barra-lateral">
                <nav>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-dark itens-lateral" aria-current="page" href="index.php">
                                <div>
                                    <h5>Tarefas pendentes</h5>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark itens-lateral" aria-current="page" href="nova_tarefa.php">
                                <div>
                                    <h5>Nova tarefa</h5>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark itens-lateral link-select" aria-current="page" href="#">
                                <div>
                                    <h5>Todas tarefas</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </section>

            <section id="conteudo">
                <div class="m-3" id="tarefas-pendentes">
                    <h1>Todas as tarefas</h1>
                </div>
                <div class="row">
                    <?php foreach($dados as $key => $value) { ?>
                                <div class="col-10 ms-3" > <?php echo $value['descript'] ?></div>
                                <div class="col">
                                    <?php if($value['status'] == 1) { ?>
                                        <i class="fas fa-check-circle ms-5" style="color: SpringGreen; font-size: 24;"></i> 
                                    <?php } ?>
                                </div>
                    <?php   } ?>
                </div>
            </section>
        </div>
    </main>

</body>
</html>