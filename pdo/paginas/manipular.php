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
        <div id="manipular">
            <div class="row">
                <div class="col-md-8  " style="margin: 0 auto; ">
                <a href="inicial.php" style="float:right; "><button class="btn btn-default right" >Voltar ao inicio</button></a>   
                    <table class="table table-striped  table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Texto</th>
                                <th>Ações</th>

                            </tr>
                        </thead>
                    

                        <tbody>
                            <?php
                                include '../BO/corujaoBO.php';
                                $resultado = consultarTodosRegistrosBO();

                                if($resultado->rowCount() >0){
                                    while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
                                        echo '<tr>';
                                        echo "<td> $registro->id </td>";
                                        echo "<td> $registro->titulo </td>";
                                        echo "<td style='
                                        display: block;
                                        overflow-y: scroll;
                                        height: 20rem;
                                        width:37rem;
                                      '> $registro->texto </td>";
                                    
                                        echo "<td>
                                        <a href=\"manipular.php?idParaAtualizar=$registro->id&titulo=$registro->titulo&texto=$registro->texto\" class=\"btn btn-success\">
                                            <span class=\"glyphicon glyphicon-edit\"></span> 
                                            Editar
                                        </a>
                                    
                                        <a href=\"manipular.php?idParaExcluir=$registro->id\" class=\"btn btn-danger\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                            Excluir
                                        </a>
                                    
                                    
                                        </td>";
                            
                                        echo '</tr>';
                                    }
                                }else{
                                    echo '<tr>';
                                    echo '<td> Não há registros no banco</td>';
                                    echo '<td> Não há registros no banco</td>';
                                    echo '<td> Não há registros no banco</td>';
                                    echo '<td> Não há registros no banco</td>';
                                    echo '</tr>';   
                                }
                            ?>
                        </tbody>
                    </table>

                <?php
                    if(isset($_GET['idParaAtualizar'])) {
                        
                        echo
                        "<form action=\"#\" method=\"GET\" id=\"edicao\">
                            <input class=\"form-control\" type=\"hidden\" name=\"id\" value=" . $_GET['idParaAtualizar'] . ">
                            Titulo: <input class=\"form-control\" type=\"text\" name=\"titulo\" value=\"" . $_GET['titulo'] . "\"> <br>
                            Texto: <textarea class=\"form-control\" type=\'text\' name=\"texto\" value=\"" . $_GET['texto'] . " \" \  rows='20' cols='50'></textarea> <br><br>
                            <input class=\"btn-success\" type=\"submit\" value=\"Atualizar\" name=\"acao\"><br>
                        </form>";
                    }
                    
                    if(isset($_GET['acao']) && $_GET['acao'] == 'Atualizar') {
                        atualizarRegistroBO($_GET['id'], $_GET['titulo'], $_GET['texto']);
                        header('Location:./manipular.php');
                    }
                    
                    if(isset($_GET['idParaExcluir'])) {
                        excluirRegistrosPorIDBO($_GET['idParaExcluir']);
                        header('Location:./manipular.php');
                    }
                    
                ?>
                </div>
            </div>

    </body>
</html>