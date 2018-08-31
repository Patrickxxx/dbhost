<?php
	session_start();
	include_once("seguranca.php");
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Área Administrativa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="Imagens/logo.ico" href="TelaLogin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<?php
include_once("NavBarAdmin.php");
$sql=("SELECT * FROM usuarios ORDER BY 'id'");
$result = mysqli_query($conn, $sql);
$linhas= mysqli_num_rows($result);
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Lista de usuario</h1>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome do usuario</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nivel de Acesso</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      while ($linhas = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>".$linhas['id']."</td>";
          echo "<td>".$linhas['nome']."</td>";
          echo "<td>".$linhas['email']."</td>";
          echo "<td>".$linhas['nivel_acesso_id']."</td>";
          echo "<td> Editar - Visualizar - Apagar </td>";
          
          echo "</tr>";
      }
      
      ?>
   
  </tbody>
</table>
     
      
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

