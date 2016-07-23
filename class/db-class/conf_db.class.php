<?php 
/* Clase encargada de gestionar las conexiones a la base de datos */
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBNAME','tienda');

Class conf_db
{
	private $_domain;
	private $_userdb;
	private $_passdb;
	private $_hostdb;
	private $_db;
	static $_instance;

	private function __construct(){
		$this->_domain=HOST;
		$this->_userdb=USER;
		$this->_passdb=PASS;
		$this->_hostdb=HOST;
		$this->_db=DBNAME;
	}
	private function __clone(){ }
	public static function getInstance(){
		if (!(self::$_instance instanceof self)){
		self::$_instance=new self();
		}
		return self::$_instance;
	}
	public function getUserDB(){
		$var=$this->_userdb;
		return $var;
	}
	public function getHostDB(){
		$var=$this->_hostdb;
		return $var;
	}
	public function getPassDB(){
		$var=$this->_passdb;
		return $var;
	}
	public function getDB(){
		$var=$this->_db;
		return $var;
	}
}
?>