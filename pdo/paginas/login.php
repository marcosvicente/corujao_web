<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <title>Corujao</title>
    </head>
    <body>
    <div class="row" style="margin: 5rem 0;">
        <div class="col-md-3 col-md-offset-7 " style="margin: 0 auto; ">
            <h1>Login</h1>
            <form action="../forms/processaForms.php" method="POST">

            <div class="form-group">
                <label for=""> Email:</label>
                <input class="form-control" name="email" type="text" placeholder = "Digite seu email" >
            </div>
            <div class="form-group">
                <label for="">Senha:</label>
                <input class="form-control" name="senha" type="password" placeholder = "Sua Senha" >
            </div>
            <div class="form-group">

                <input type="submit" class="btn btn-sucess" value="entrar" name="login">
            </div>

            </form>
        </div>

    </div>
       

         <script src="../bootstrap/js/bootstrap.min.js""></script>
    </body>
</html>
