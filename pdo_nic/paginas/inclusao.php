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
        
        <div id="inclusao">
            <form action="../forms/processaForms.php" method="POST"> 
                <label for="">Titulo</label>
                <input class="form-control" type="text" name="titulo" required>
                <label for="">Texto</label>
                <input class="form-control" type="text" name="texto" required>

                <input class="btn-sucess" type="submit" name="login" value="incluir">
            </form>
        </div>
        <a href="inicial.php"><button>Voltar ao inicio</button></a>    
    </body>
</html>