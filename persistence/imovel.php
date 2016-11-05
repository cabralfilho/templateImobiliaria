<?php

class Imovel{
	//database connection and table name
	private $conn;
	private $table_name = "cadastroimoveis";
	
	//object properties
	public $codigo;
	public $corretor;
	public $tipo;
	public $valor;
	public $endereco;
	public $quartos;
	public $suites;
	public $bairro;
	public $cidade;
	public $estado;
	public $reformas;
	public $data;
	public $finalidade;
	public $descrição;
	public $status;
	//conctructor with $d as database connection
	public function __construct($db){
			$this->conn = $db;
		}
}
 ?>