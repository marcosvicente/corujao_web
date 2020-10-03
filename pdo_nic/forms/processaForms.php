<?php
    include "../BO/corujaoBO.php";
    session_start();
    if($_POST["login"] == "entrar"){
        if(!empty($_POST["email"]) && !empty($_POST["senha"])){
            $email=$_POST["email"];
            $senha=$_POST["senha"];

            $resultado=consultarRegistroPorUsuarioBO($_POST["email"]);
            $registro = $resultado->fetch(PDO::FETCH_OBJ);

            if($registro->senha==$_POST["senha"]){
                
                $_SESSION["nome"] = $registro->nome;
                $_SESSION["email"] = $registro->email;

                header('Location: ../paginas/inicial.php');

            }else {
                echo "<script> window.alert(\"Login Incorreto\") </script>";
                echo "<script> window.history.back(); </script>";

            }

        }else {
            echo "<script> window.alert(\"Você deve preencher todos os campos\") </script>";
            echo "<script> window.history.back(); </script>";

        }
    }
	if($_POST["login"] == "incluir"){

        if(!empty($_POST["titulo"]) && !empty($_POST["texto"])){
			$titulo = $_POST["titulo"];
			$texto = $_POST["texto"];
            inserirBO($titulo, $texto);
            echo "<script> window.alert(\"Insert\") </script>";
            header("Location:../paginas/inicial.php");
		}	
    }

    if($_POST["login"] == "Criar usuario"){
        if(!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["senha"]) && !empty($_POST["registro_profissional"]) && !empty($_POST["tipo_usuario"])){
			$nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
			$registro_profissional = $_POST["registro_profissional"];
			$tipo_usuario = $_POST["tipo_usuario"];

            inserirUsuarioBO($nome, $email, $senha, $registro_profissional, $tipo_usuario);
            echo "<script> window.alert(\"Insert\") </script>";
            header("Location:../paginas/inicial.php");
		}	
    }
?>