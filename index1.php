<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-sacale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script><link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<style type="text/css">
.pagination-centered {
    text-align: center;
	margin:-20px auto;
}
</style>

<title>Cadastro de Imóveis</title>
</head>

<body>
<?php 
	include_once'paginas/header.php';
?>
<div id="main" class=" container">
	<div class="row">
		<h3 class="page-header">Imóveis</h3>
    </div>
    <div class="row">
    	
        <table class="table table-striped table-bordered">
        	<thead>
            	<tr>
                    <th>Código</th>
                    <th>Corretor</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>End</th>
                    <th>Qua</th>
                    <th>Sui</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Reformas</th>
                    <th>Data</th>
                    <th>Finalidade</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th colspan="3">Ações</th>                    
                </tr>
            </thead>
            <tbody>
            	<?php
					
					include 'persistence/database.php';
					$pdo = Database::connect();
					# Limita o número de registros a serem mostrados por página
					$limite = 15;
					
					# Se pg não existe atribui 1 a variável pg
					$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
					
					# Atribui a variável inicio o inicio de onde os registros vão ser
					# mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
					$inicio = ($pg * $limite) - $limite;
					$sql ='SELECT * FROM cadastroimoveis WHERE status = "1" ORDER BY valor DESC';
										
					foreach($pdo->query($sql) as $row){
						echo'<tr>';
						echo '<td>'. $row['codigoimovel'] . '</td>';
						echo '<td>'. substr($row['corretor'],0,7).'...</td>';
						echo '<td>'. substr($row['tipo'],0,5).'...</td>';
						echo '<td>'. $row['valor'] . '</td>';
						echo '<td>'. substr($row['endereco'],0,7). '...</td>';
						echo '<td>'. $row['quartos'] . '</td>';
						echo '<td>'. $row['suites'] . '</td>';
						echo '<td>'. substr($row['bairro'],0,7).'</td>';
						echo '<td>'. substr($row['cidade'],0,10). '</td>';
						echo '<td>'. $row['estado'] . '</td>';
						echo '<td>'. $row['reformas'] . '</td>';
						echo '<td>'. date("d/m/y",strtotime($row['datacadastro'])). '</td>';
						echo '<td>'. $row['finalidade'] . '</td>';
						echo '<td>'. substr($row['descricao'],0,7).'...</td>';
						echo '<td>'. $row['status'] . '</td>';
						echo'<td><span class="glyphicon glyphicon-edit"></span></td>
						     <td><span class="glyphicon glyphicon-plus"></span></td> 
							 <td><span class="glyphicon glyphicon-trash"></span></td>';
						}
						
						Database::disconnect();
				?>
               <tr>
               		<td colspan="18">
                    
                    	<div class="pagination-centered">
                    	<?php
							
							  $consulta = mysql_query("SELECT codigoimovel FROM cadastroimoveis WHERE status='1'");
							  $total_registros = mysql_num_rows($consulta);
							  $total_paginas = ceil($total_registros / $limite);
                           
                               echo '<ul class="pagination pagination-sm"> 
							   <li><a href="index.php?pag=1" style="text-decoration:none">'.'Primeira página'.'</a></li>';
							   
							   for($i=1; $i <= $total_paginas; $i++){
								 if($pagina == $i){
									 echo '<li class="active"><a href="#">".$i."</li>';
									 }else{
										 echo '<li><a href="index.php?pag='.$i.'" style="text-decoration:none" class="paginas"> '.$i.'</a></li>';
		 					 }
								}
							echo '<li><a href="index.php?pag='.$total_paginas.'" style="text-decoration:none" class="link_pagination"> 							Última página</a></li>';
							   
                          echo'</ul>';
						  ?>
                       </div>
                    </td>
               </tr>
            </tbody>
        </table>
    </div>
      	 	 	 	 	 	 	 	 	 	 	 	 	 	 	  	 	 	 	 	
</div>
<?php 
	include_once'paginas/footer.php';
?>
</body>
</html>