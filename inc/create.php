<?php // create product
function create(){
     
    // query to insert record
    $query = "INSERT INTO 
                " . $this->table_name . "
            SET 
                
				codigo     = codigo, 	
				corretor   = corretor,
				tipo       = tipo, 	
				valor      = valor,
				endereco   = endereco, 	
				quartos    = quartos, 	
				suites     = suites, 	
				bairro     = bairro, 	
				cidade     = cidade, 	
				estado     = estado, 	
				reformas   = reformas,
				data       = data,
				finalidade = finalidade, 	
				descricao  = descricao, 	
				status     = status";
     
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // posted values
   	
	$this->codigo=htmlspecialchars(strip_tags($this->codigo));	
	$this->corretor=htmlspecialchars(strip_tags($this->corretor));
	$this->tipo=htmlspecialchars(strip_tags($this->tipo));	
	$this->valor=htmlspecialchars(strip_tags($this->valor));
	$this->endereco=htmlspecialchars(strip_tags($this->endereco));	
	$this->quartos=htmlspecialchars(strip_tags($this->quartos));
	$this->suites=htmlspecialchars(strip_tags($this->suites));	
	$this->bairro=htmlspecialchars(strip_tags($this->bairro));
	$this->cidade=htmlspecialchars(strip_tags($this->cidade));	
	$this->estado=htmlspecialchars(strip_tags($this->estado));
	$this->reformas=htmlspecialchars(strip_tags($this->reformas));	
	$this->data=htmlspecialchars(strip_tags($this->data));
	$this->finalidade=htmlspecialchars(strip_tags($this->finalidade));	
	$this->descricao=htmlspecialchars(strip_tags($this->descricao));
	$this->status=htmlspecialchars(strip_tags($this->status));
	 	
		
	 
    // bind values
    $stmt->bindParam(":codigo", $this->codigo);
    $stmt->bindParam(":corretor", $this->corretor);
    $stmt->bindParam(":tipo", $this->tipo);
    $stmt->bindParam(":valor", $this->valor);
	$stmt->bindParam(":endereco", $this->endereco);
    $stmt->bindParam(":quartos", $this->quartos);
    $stmt->bindParam(":suites", $this->suites);
    $stmt->bindParam(":bairro", $this->bairro);
	$stmt->bindParam(":cidade", $this->cidade);
    $stmt->bindParam(":estado", $this->estado);
    $stmt->bindParam(":reformas", $this->reformas);
    $stmt->bindParam(":data", $this->data);
	$stmt->bindParam(":finalidade", $this->finalidade);
	$stmt->bindParam(":descricao", $this->descricao);
	$stmt->bindParam(":status", $this->status);
     
    // execute query
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
?>