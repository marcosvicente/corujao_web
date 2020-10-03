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

        <div id="manipular">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>nome</th>
                            <th>email</th>
                            <th>Registro Profissional</th>
                            <th>Tipo usuario</th>
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
            <a href="inicial.php"><button>Voltar ao inicio</button></a>
    </body>
</html>