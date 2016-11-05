<?php 

class Imovel{
	private $id_imovel;
	private $codigoimovel;
	private $tipo;
	private $valor;
	private $endereco;
	private $quartos;
	private $suites;
	private $bairro;
	private $cidade;
	private $estado;
	private $reformas;
	private $datacadastro;
	private $finalidade;
	private $descricao;
	private $caminho_foto;
	private $foto;
	private $status;
	
	
	public function getId_imovel(){
		return $this->id_imovel;
		}
		
	public function setId_imovel($id_imovel){
		$this->id_imovel = $id_imovel;
		}
		
	public function getCodigoimovel(){
		return $this->codigoimovel;
		}	
		
	public function setCodigoimovel($codigoimovel){
		$this->codigoimovel = $codigoimovel;
		}	
		
	public function getTipo(){
		return $this->tipo;
		}	
	
	public function setTipo($tipo){
		$this->tipo = $tipo;
		}	
		
	public function getValor(){
		return $this->valor;
		}
		
	public function setValot($valor){
		$this->valor = $valor;
		}	
	
	public function getEndereco(){
		return $this->endereco;
		}
	
	public function setEndereco($endereco){
		$this->endereco = $endereco;
		}	
		
	public function getQuartos(){
		return $this->quartos;
		}	
		
	public function setQuartos($quartos){
		$this->quartos = $quartos;
		}
		
	public function getSuites(){
		return $this->suites;
		}	
		
	public function setSuites($suites){
		$this->suites = $suites;
		}
		
	public function getBairro(){
		return $this->bairro;
		}		
		
	public function setBairro($bairro){
		$this->bairro = $bairro;
		}	
		
	public function getCidade(){
		return $this->cidade;
		}	
	
	public function setCidade($cidade){
		$this->cidade = $cidade;
		}
		
	public function getEstado(){
		return $this->estado;
		}	
	
	public function setEstado($estado){
		$this->estado = $estado;
		}
		
	public function getReformas(){
		return $this->reformas;
		}	
	
	public function setReformas($reformas){
		$this->reformas = $reformas;
		}
		
	public function getDatacadastro(){
		return $this->datacadastro;
		}	
	
	public function setDatacadastro($datacadastro){
		$this->datacadastro = $datacadastro;
		}
		
	public function getFinalidade(){
		return $this->finalidade;
		}	
	
	public function setFinalidade($finalidade){
		$this->finalidade = $finalidade;
		}
		
	public function getDescricao(){
		return $this->descricao;
		}	
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
		}
		
	public function getCaminho_foto(){
		return $this->caminho_foto;
		}	
	
	public function setCaminho_foto($caminho_foto){
		$this->caminho_foto = $caminho_foto;
		}
	
	public function getFoto(){
		return $this->foto;
		}	
	
	public function setFoto($foto){
		$this->foto = $foto;
		}
		
	public function getStatus(){
		return $this->status;
		}	
	
	public function setStatus($status){
		$this->status = $status;
	}
}
?>