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
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Registro Profissional</th>
                            <th>Tipo usuario</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                

                    <tbody>
                        <?php
                            include '../BO/corujaoBO.php';
                            $resultado = consultarTodosRegistrosUsuarioDAO();

                            if($resultado->rowCount() >0){
                                while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>';
                                    echo "<td> $registro->id </td>";
                                    echo "<td> $registro->nome </td>";
                                    echo "<td> $registro->email </td>";
                                    echo "<td> $registro->registro_profissional </td>";
                                    echo "<td> $registro->tipo_usuario </td>";
                                    echo "<td>
                                    <a href=\"manipularUsuario.php?idParaAtualizar=$registro->id&nome=$registro->nome&email=$registro->email&registro_profissional=$registro->registro_profissional\" class=\"btn btn-success\">
                                        <span class=\"glyphicon glyphicon-edit\"></span> 
                                        Editar
                                    </a>
                                
                                    <a href=\"manipularUsuario.php?idParaExcluirUsuario=$registro->id\" class=\"btn btn-danger\">
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
                        Nome: <input class=\"form-control\" type=\"text\" name=\"nome\" value=\"" . $_GET['nome'] . "\"> <br>
                        
                        Email: <input class=\"form-control\" type=\"text\" name=\"email\" value=\"" . $_GET['email'] . "\"> <br>
                      
                        Registro Profissional: <input class=\"form-control\" type=\'text\' name=\"registro_profissional\" value=\"" . $_GET['registro_profissional'] . " \" \> <br>
                        
                    
                        <br>
						<input class=\"btn-success\" type=\"submit\" value=\"Atualizar Usuário\" name=\"acao\"><br>
					</form>";
				}
				# mudar pra usuario
				if(isset($_GET['acao']) && $_GET['acao'] == 'Atualizar Usuário') {
					atualizarRegistroUsuarioBO($_GET['id'], $_GET['nome'], $_GET['email'], $_GET['registro_profissional']);
					header('Location:./manipularUsuario.php');
				}
				# mudar pra usuario
				if(isset($_GET['idParaExcluirUsuario'])) {
					excluirRegistrosPorIDUsuarioBO($_GET['idParaExcluirUsuario']);
					header('Location:./manipularUsuario.php');
				}
        
			?>
            </div>
            </div>
    </body>
</html>