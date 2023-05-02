

<?php



try { 
    
    $db="sqli_union";
    $db_pass="contrafacil";
    $db_host="localhost";
    $db_user="sqli_os";


    $mysqli = new mysqli($db_host,$db_user,$db_pass,$db);
    mysqli_set_charset($mysqli,"utf8");
    mysqli_error ( $mysqli);

   
    
} catch (PDOException $e) {
    
    echo 'Error al conectar con la DB '.$e;

}
?>

