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
    <nav class="navbar navbar-default" style="background:#f8f8f8;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    Corujão
                </a>
            </div>
            <p class="navbar-text navbar-right"> <a href="logout.php" class="navbar-link">Logout</a></p>
        </div>
    </nav>
        <div id="index" style="margin: 2rem auto; width:40rem; display:block; ">
            
            <?php
                echo "<h2><a class=\"text-right\">Bem vindo, " .$_SESSION["nome"] ."!</a></h2>";
            ?>
            
            <main>
            <div style="margin: 2rem 0; padding: 2rem; box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);">
                <h2>Noticia</h2>
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <a class="btn btn-default" href="inclusao.php">Inclusão</a>
                    </div>
                    <div class="btn-group" role="group">
                        <a class="btn btn-default" href="manipular.php">Manipular Item</a>
                    </div>
                    
                </div>
                </div>

                <div style="margin: 2rem 0; padding: 2rem; box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);">
                    <h2 style="margin: 2rem auto;">Usuario</h2>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <a class="btn btn-default" href="inclusaoUsuario.php">Inclusão</a>
                        </div>
                        <div class="btn-group" role="group">
                            <a class="btn btn-default" href="manipularUsuario.php">Manipular Item</a>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </body>
</html>