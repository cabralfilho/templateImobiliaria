<?php
/*o nome do banco de dados*/
define('DB_NAME','consultec');
/*usuario do banco de dados MySQL*/
define('DB_USER','root');

/*senha do banco de dados MySQL*/
define('DB_PASSWORD','');

/*nome do host MySQL*/
define('DB_HOST','localhost');

/*caminho absoluto para a pasta do sistema*/
if(!defined('ABSPATH'))
		define('ABSPATH', dirname(__FILE__).'/');

/*caminho no serve para o sistema*/
if(!defined('BASEURL'))
	define('BASEURL','/templateImobiliaria/');

/*caminho do arquivo de banco de dados*/
if(!defined('DBAPI'))
	define('DBAPI', ABSPATH . 'inc/database.php');
	
/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');	
define('CONTENT_TEMPLATE', ABSPATH . 'inc/content.php');