<?php 
$conn = mysqli_connect( //var
    'localhost',//dominio
    'root',//usuario
    '',//constraseña
    'Php_mysql_CRUD';//database
)
if (isset ($conn)){
    eco 'Ready';
}
?>