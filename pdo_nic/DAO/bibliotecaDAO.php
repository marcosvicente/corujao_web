<?php
    include '../Util/conexaoBD.php';
    #mudar para inserir noticia
    function inserirDAO($titulo, $texto){
        $banco = conectar();
        try{
            $sql = "insert into corujao.noticia(titulo, texto) values('$titulo','$texto');";
            $banco->exec($sql);
        } catch(Exception $e){
            echo "Erro bibliotecaDAO: ".$e->getMessage();
        }
    }

    function inserirUsuarioDAO($nome, $email, $senha, $registro_profissional, $tipo_usuario){
        $banco = conectar();
        try{
            $sql = "insert into corujao.usuario(nome, email, senha, registro_profissional, tipo_usuario) values('$nome','$email', '$senha', '$registro_profissional', '$tipo_usuario');";
            $banco->exec($sql);
        } catch(Exception $e){
            echo "Erro bibliotecaDAO: ".$e->getMessage();
        }
    }
    function consultarRegistroPorUsuarioDAO($email){
        $banco = conectar();

        try{
            $consulta = "select * from usuario where email = '$email'";
            return $banco->query($consulta);
        } catch(Exception $e){
            echo "consultarRegistroPorUsuarioDAO " .$e->getMessage();
        }
    }

    function consultarTodosRegistrosDAO(){
        $banco = conectar();
        try{
            $consulta = "select * from noticia;";
            return $banco->query($consulta);
        }catch(Exception $e){
            echo "Erro consultarTodosRegistrosDAO: " .$e->getMessage();
        }
    }


    function consultarTodosRegistrosUsuarioDAO(){
        $banco = conectar();
        try{
            $consulta = "select * from usuario;";
            return $banco->query($consulta);
        }catch(Exception $e){
            echo "Erro consultarTodosRegistrosDAO: " .$e->getMessage();
        }
    }
    #mudar para consultar noticia
    function excluirRegistrosPorIDDAO($id){
        $banco = conectar();

        try{
            $sql = "delete from noticia where id = $id";

            $banco->exec($sql);
    
        }catch (Exception $e){
            echo "Erro excluirRegistrosPorIDDAO" .$e->getMessage();
        }
    }


    function excluirRegistrosPorIDUsuarioDAO($id){
        $banco = conectar();

        try{
            $sql = "delete from usuario where id = $id";

            $banco->exec($sql);
    
        }catch (Exception $e){
            echo "Erro excluirRegistrosPorIDDAO" .$e->getMessage();
        }
    }

    #mudar para consultar noticia
    function atualizarRegistroDAO($id, $titulo, $texto){
        $banco = conectar();
        try{
            $sql = "update noticia set titulo = '$titulo', texto = '$texto' where id = $id";
            $banco->exec($sql);
        } catch (Exception $e){
            echo "Erro atualizarRegistroDAO: " .$e->getMessage();
        }
    }
    function atualizarRegistroUsuarioDAO($id, $nome, $email, $registro_profissional){
        $banco = conectar();
        try{
            $sql = "update usuario set nome = '$nome', email = '$email', registro_profissional = '$registro_profissional' where id = $id";
            $banco->exec($sql);
        } catch (Exception $e){
            echo "Erro atualizarRegistroDAO: " .$e->getMessage();
        } 
    }
?>