<?php 
require_once('../config.php');	
require_once BASEURL."inc/conexao.php";
require_once BASEURL."model/imovel.php";


class DaoImovel{
	
	public static $instance;
	
	private function __construct(){
			
	}
	
	public static function getInstance(){
		if(!isset(self::$instance))
			self::$instance = new DaoImovel();
			return self::$instance;
	}
	
	public function Inserir(Imovel $imovel){
		try{
			$sql = "INSERT INTO cadastroimoveis(codigoimovel, tipo, valor, endereco, quartos,suites, bairro, 
			cidade, estado, reformas, datacadastro,finalidade, descricao,
			caminho_foto, foto)
			VALUES(:codigoimovel, :tipo, :valor, :endereco, :quartos, :suites, :bairro,:cidade, :estado, 
			:reformas, :datacadastro, :finalidade, :descricao, :caminho_foto, :foto)";
			
			$p_sql = Conexao::getInstance()->prepare($sql);
			
			$p_sql->bindValue(":codigoimovel", $imovel->getCodigoimovel());
			$p_sql->bindValue(":tipo", $tipo->getTipo());
			$p_sql->bindValue(":valor", $valor->getValor());
			$p_sql->bindValue(":endereco",$endereco->getEndereco());
			$p_sql->bindValue(":quartos",$quartos->getQuartos());
			$p_sql->bindValue(":suites",$suites->getSuites());
			$p_sql->bindValue(":bairro",$bairro->getBairro());
			$p_sql->bindValue(":cidade",$cidade->getCidade);
			$p_sql->bindValue(":estado",$estado->getEstado());
			$p_sql->bindValue(":reformas",$reformas->getReformas());
			$p_sql->bindValue(":datacadastro",$datacadastro->getDatacadastro());
			$p_sql->bindValue(":finalidade",$finalidade->getFinalidade());
			$p_sql->bindValue(":descricao",$descricao->getDescricao());
			$p_sql->bindValue(":caminho_foto",$caminho_foto->getCaminho_foto());
			$p_sql->bindValue(":foto",$foto->getFoto());
			}catch(Exception $e){
				echo $e->getMessage();
				}
	}
	
	public function Editar(Imovel $imovel){
		try{
			$sql = "UPDATE imovel set 
			 codigoimovel = :codigoimovel, 
			 tipo = :tipo, 
			 valor = :valor, 
			 endereco = :endereco, 
			 quartos = :quartos, 
			 suites = :suites, 
			 bairro = :bairro,
			 cidade = :cidade, 
			 estado = :estado, 
			 reformas = :reformas, 
			 datacadastro = :datacadastro, 
			 finalidade = :finalidade, 
			 descricao = :descricao, 
			 caminho_foto :caminho_foto, 
			 foto = :foto";
			}catch(Exception $e){
			echo $e->getMessage();
			}
	}
	
	public function Deletar($idimovel){
		try{
			$sql = "DELETE FROM cadastroimoveis WHERE id_imovel = :idimovel";
			$p_sql = Conexao::getInstance()->prepare($sql);
			$p_sql->bindValue(":idimovel", $idimovel);
			return $p_sql->execute();
			
			}catch(Exception $e){
			echo $e->getMessage();
			}
	}
	
	private function BucarImovel($idimovel){
		try{
			$sql = "SELECT * FROM cadastroimoveis WHERE id_imovel = :idimovel";
			$p_sql = Conexao::getInstance()->prepare($sql);
			$p_sql->bindValue(":idimovel",$idimovel);
			$p_sql->execute();
			return $this->BucarImovel($p_sql->fetch(PDO::FETCH_ASSOC));
			}catch(Exception $e){
			echo $e->getMessage();
			}	
	}

	private function popularImovel($row){
		$imovel = new Imovel;
		$imovel->setCodimovel($row['codigoimovel']);
		$imovel->setTipo($row['tipo']);
	}
		
			
}

?>