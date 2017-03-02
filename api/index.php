<?php
include "db.php";

//Error types array
$error_type[1]="Invalid request";

//Common functions

function array_to_pdo_params($array) {
  $temp = array();
  foreach (array_keys($array) as $name) {
    $temp[] = "`$name` = ?";
  }
  return implode(', ', $temp);
}

function get_query($obj){
        return array_to_pdo_params(json_decode($obj));
}

//Error handling
function error($k, $t){
        global $error_type;
        $error['key']=$k;
        $error['error_type']=$error_type[$k];
        $error['text']=$t;
        exit(json_encode($error));
}

function action(){
        $action = $_GET['action'];
        if(!$action){ error(1, "Missing action"); }
        return $action;
}

function what(){
        $what = $_GET['what'];
        if(!$what){ error(1, "Missing what"); }
        return $what;
}

//End of Common functions

//get action
$action = action();

//Common actions

//new
if($action=="new"){
        $what=what();
        error(1, "Invalid what: ".$what);
} //end new

//update

//end update

//delete

//end delete

//select
if($action=="select"){
        $what=what();
        if($what=="user"){
                $stmt = $db->query('SELECT * FROM users WHERE ID=1');
                $users = json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
                exit($users);
        } //what = user

        error(1, "Invalid what: ".$what);
}
//end select

echo get_query('[{"ID":"1","username":"maxb"}]');

error(1, "Invalid action");