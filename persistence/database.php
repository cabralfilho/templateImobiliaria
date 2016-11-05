<?php 
	class Database{
		private static $dbName = 'consultec';
		private static $dbHost = 'localhost';
		private static $dbUsername = 'root';
		private static $dbUserPassword = '';
		
		
		private static $cont  = null;
 
    public function __construct() {
      exit('Init function is not allowed');
    }
 
    public static function connect()
    {
      // Uma conexão através da aplicação inteira
      if ( null == self::$cont )
      {      
        try 
        {
          self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
		  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
      } 
  return self::$cont;
  }
 
  public static function disconnect()
  {
    self::$cont = null;
  }
  }
  header('Content-Type: text/html; charset=utf-8');
  include_once 'paginas/class.paging.php';
  $paginate = new paginate($cont);
?>