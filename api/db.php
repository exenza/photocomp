<?php
if((@include "env.php") === false){
    exit('Fatel error missing env variables');
    $db_host=$_ENV['db_host'];
    $db_name=$_ENV['db_name'];
    $db_user=$_ENV['db_user'];
    $db_pass=$_ENV['db_pass'];
}
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_pass);