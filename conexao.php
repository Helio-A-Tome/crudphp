<?php
$dsn  = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser,$dbpass);

}catch(PDOexception $e){
    echo "erro ao buscar ou editar registro".$e->getMessage();
}
?>
