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
                <label for="">Nome</label>
                <input class="form-control" type="text" name="nome" required>
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" required>


                <label for="">Senha</label>
                <input class="form-control" type="password" name="senha" required>

                <label for="">Registro Profissional</label>
                <input class="form-control" type="text" name="registro_profissional">

                <input type="radio" id="leitor" name="tipo_usuario" value="1">
                <label for="leitor">Leitor</label><br>
                <input type="radio" id="redator" name="tipo_usuario" value="2">
                <label for="redator">Redator</label><br>
                <input type="radio" id="revisor" name="tipo_usuario" value="3">
                <label for="revisor">Revisor</label>

            <br><br>

                <input class="btn-sucess" type="submit" name="login" value="Criar usuario">
            </form>
        </div>
        <a href="inicial.php"><button>Voltar ao inicio</button></a>    
    </body>
</html>