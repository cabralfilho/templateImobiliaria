<?php
mysqli_report(MYSQLI_REPORT_STRICT);

/*conexão ao banco de dados*/
function open_database(){
	try{
		$conn = new PDO(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		return $conn;
	}catch(PDOException $e){
		echo $e->getMessage();
		return null;
	}
}//fim da open_database

/*fechando a conexão com o banco de dados*/
function close_database($conn){
	try{
		mysqli_close($conn);
	}catch(Exception $e){
		echo $e->getMessage();
	}
}//fim da fechar conexão

/*selecionado no banco de dados*/
function selecionar($conn){
	try{
	$sql = "SELECT * FROM cadastroimoves WHERE status ='1' ORDER BY id_imovel ASC";
	$result = $PDO->query($sql);
	return $result;
	}catch(Exception $e){
		echo $e->getMessage();
		}
}//fim da selecionar

