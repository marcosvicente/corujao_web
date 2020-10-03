<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <title>Corujao</title>
    </head>
    <body>
        <center>
            <h1>Memories</h1><br/>
            <h3>Porque há coisas que não se pode esquecer</h3>
        </center><br/><br/><br/>
        <form action="../forms/processaForms.php" method="POST">
            <label for="">
                Email:
            </label>
            <input class="form-control" name="email" type="text" placeholder = "Digite seu email" >
            <label for="">
                Senha:
            </label>
            <input class="form-control" name="senha" type="password" placeholder = "Sua Senha" >
            <input type="submit" class="btn btn-sucess" value="entrar" name="login">
         </form>
    </body>
</html>
