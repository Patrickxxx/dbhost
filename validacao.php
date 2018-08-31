

<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		//$senha = md5($senha);
                
                //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$resultado = mysqli_fetch_assoc($result);
                
        if(empty($resultado)){
           $_SESSION['loginErro'] = "usuario ou senha inválidos";
            header("Location: index.php");
            
            
        }
        else{
            //Define os valores atribuidos na sessao do usuario
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
            $_SESSION['usuarioLogin'] = $resultado['usuario'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            header("Location: area_usuario.php");
            if($_SESSION['usuarioNivelAcesso'] == 1){
		header("Location: area_admin.php");
	}else{
		header("Location: area_usuario.php");
        }
        } }
        
        ?>
            
        
			
		

