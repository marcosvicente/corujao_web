<?php
    include'../DAO/bibliotecaDAO.php';

    function consultarRegistroPorUsuarioBO($apelido){
        return consultarRegistroPorUsuarioDAO($apelido);
    }
  function inserirBO($titulo, $texto) {
    $titulo = strtoupper($titulo);
    $texto = strtoupper($texto);
    inserirDAO($titulo, $texto);		
  }
    
  
  function inserirUsuarioBO($nome, $email, $senha, $registro_profissional, $tipo_usuario) {
    $nome = strtoupper($nome);
    $email = strtoupper($email);
    $senha = strtoupper($senha);
    $registro_profissional = strtoupper($registro_profissional);
    $tipo_usuario = strtoupper($tipo_usuario);

    inserirUsuarioDAO($nome, $email, $senha, $registro_profissional, $tipo_usuario);		
  }

  function consultarTodosRegistrosUsuarioBO(){
    return consultarTodosRegistrosUsuarioDAO();

  }
	function consultarTodosRegistrosBO() {
    return consultarTodosRegistrosDAO();
  }

  function excluirRegistrosPorIDBO($id) {
    return excluirRegistrosPorIDDAO($id);
  }

  function excluirRegistrosPorIDUsuarioBO($id) {
    return excluirRegistrosPorIDUsuarioDAO($id);
  }
  # mudar para atualizar noticia
  function atualizarRegistroBO($id, $titulo, $texto){ 
    return atualizarRegistroDAO($id, $titulo, $texto);
  }

  function atualizarRegistroUsuarioBO($id, $nome, $email, $registro_profissional){
    return atualizarRegistroUsuarioDAO($id, $nome, $email, $registro_profissional);
  }



?>