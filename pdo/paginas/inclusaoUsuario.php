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
                <div class="col-md-3 col-md-offset-7 " style="margin: 0 auto; ">
                <a href="inicial.php" style="float:right; "><button class="btn btn-default right" >Voltar ao inicio</button></a>   
                    <form action="../forms/processaForms.php" method="POST"  style="margin: 4rem 0"> 
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input class="form-control" type="text" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="email" name="email" required>
                            </div>
                        <div class="form-group">
                            <label for="">Senha</label>
                            <input class="form-control" type="password" name="senha" required>
                            </div>
                        <div class="form-group">
                            <label for="">Registro Profissional</label>
                            <input class="form-control" type="text" name="registro_profissional">
                            </div>
                        <div class="form-group">
                            <input type="radio" id="leitor" name="tipo_usuario" value="1">
                            <label for="leitor">Leitor</label><br>
                            <input type="radio" id="redator" name="tipo_usuario" value="2">
                            <label for="redator">Redator</label><br>
                            <input type="radio" id="revisor" name="tipo_usuario" value="3">
                            <label for="revisor">Revisor</label>
                            </div>
                        <div class="form-group">
                            <input class="btn-sucess" type="submit" name="login" value="Criar usuario">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>