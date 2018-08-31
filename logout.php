
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Host</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="Imagens/logo.ico">
  <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" href="TelaLogin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </br></br></br></br></br></br>
<div class="child parent"  ></div>
<div class=" alert alert-success text-center" id="imgpos" style="padding:50px 0" role="alert">
    <div class="container">
 <div class="centered row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">Você foi deslogado com sucesso! Será redirecionado para a pagina principal.</div>
  <div class="col-sm-4"></div>

</div>
  </div>
</div>
 
    
    <?php

	session_start();
        session_destroy(); 
	
	unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioNivelAcesso'],
		$_SESSION['usuarioEmail'],
		$_SESSION['usuarioSenha'],
		$_SESSION['usuarioLogin']
	);
	
	
	//redirecionar o usuario para a página de login
	header("Refresh: 3 ; url= index.php"); 

?>
