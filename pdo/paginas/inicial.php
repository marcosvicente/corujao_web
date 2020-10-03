<html>
    <?php
    include("proteger.php");
    protect();
    ?>

    <head>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <title>Corujao</title>
    </head>
    <body>
        <div id="index">
            <h1>Menu</h1>
            
            <?php
                echo "<h2><a class=\"text-right\">Bem vindo, " .$_SESSION["nome"] ."!</a></h2>";
            ?>
            
            <div class="nav-tabs">
                <main>
                    <ul>
                    <li>Noticia</li>
                        <li><a class="btn-sucess" href="inclusao.php">Inclusão</a></li>
                        <li><a class="btn-sucess" href="manipular.php">Manipular Item</a></li>
                        <li><a class="btn-warning" href="logout.php">logout</a></li>


                        <li>Usuario</li>
                        <li><a class="btn-sucess" href="inclusaoUsuario.php">Inclusão</a></li>
                        <li><a class="btn-sucess" href="manipularUsuario.php">Manipular Item</a></li>
                    </ul>
                </main>
            </div>
        </div>
    </body>
</html>