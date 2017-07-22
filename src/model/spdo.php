<?php

define('BDD_HOST', 'localhost');
define('BDD_LOGIN', 'root');
define('BDD_MDP', '');
define('BDD_DATABASE', 'testpixel');

class SPDO{
  private $PDOInstance = null;
  private static $instance = null;
  
  private  function __construct(){
    try {
      $this->PDOInstance = new PDO('mysql:dbname='.BDD_DATABASE.';host='.BDD_HOST, BDD_LOGIN, BDD_MDP);
      $this->PDOInstance->query('SET NAMES utf8');
  	  $this->PDOInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
      throw new Exception('La connexion a échoué. Erreur['.$e->getCode().'] : '.$e->getMessage());
    }
  }
  
  public static function getBD(){  
    if (is_null(self::$instance))
      self::$instance = new SPDO();
    return self::$instance;
  }
  
  public function query($query){
    return $this->PDOInstance->query($query);
  }
  
  public function prepare($query){
    return $this->PDOInstance->prepare($query);
  }    
  
  public function lastInsertId($name=null){
    return $this->PDOInstance->lastInsertId($name);
  }  
  
}


?>

<?php
/*
class DB {
   
    private static $connected = false;
    private static $PDO = null;
   
    private function getLogs() {
        //Récupère les logs depuis un XML etc
    }
   
    private function connexion() {
        if(self::$connected)
            return;
       
        $logs = self::getLogs();
        self::$PDO = new PDO($logs);
        //try catch etc
       
        self::$connected = true;
    }
   
    public static function beginTransation() {
        self::connexion();
        return self::$PDO->beginTransation();
    }
   
    public static function endTransation() {
        return self::$PDO->endTransation();
    }
   
    public static function commit() {
        return self::$PDO->commit();
    }
   
    public static function rollback() {
        return self::$PDO->rollback();
    }
   
    public static function prepare($query) {
        self::connexion();
        return self::$PDO->prepare($query);
    }
   
   
}
*/
?>