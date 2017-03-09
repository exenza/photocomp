<?php
if((@include "env.php") === false){
    $db_host=getenv('db_host');
    $db_name=getenv('db_name');
    $db_user=getenv('db_user');
    $db_pass=getenv('db_pass');
}
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_pass);