<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'Aptech');

class dbConnect
{
  public function __construct()
   {
     $this->db=new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    
   }
}
?>
