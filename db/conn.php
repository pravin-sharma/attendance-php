<!-- using PDO - php data object -->
<?php 
    $host = "localhost";
    $dbname = "attendance_db";
    $user = "root";
    $pass = "";
    $charset = "utf8mb4";

    $dns = "mysql:host=$host;dbname=$dbname;charset=$charset";

    try{
        $pdo = new PDO($dns,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }


    require_once('crud.php');
    $crud = new crud($pdo);
?>