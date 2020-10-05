<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <title>Corujao</title>
    </head>
    <body>
        <?php
            include("proteger.php");
            protect();
        ?>
        <nav class="navbar navbar-default" style="background:#f8f8f8">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        Corujão
                    </a>
                </div>
                <p class="navbar-text navbar-right"> <a href="logout.php" class="navbar-link">Logout</a></p>
            </div>
        </nav>
        <div id="inclusao">
            <div class="row">
                <div class="col-md-6 col-md-offset-6 " style="margin: 0 auto; ">
                <a href="inicial.php" style="float:right; "><button class="btn btn-default right" >Voltar ao inicio</button></a>    

                    <form action="../forms/processaForms.php" method="POST" style="margin: 4rem 0"> 
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input class="form-control" type="text" name="titulo" required>
                        </div>
                        <div class="form-group">
                            <label for="">Texto</label>
                            <textarea class="form-control" type="text" name="texto" rows="20" cols="50 " required></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn-sucess" type="submit" name="login" value="incluir">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>