<?php
session_start();
$bu_id = $_SESSION['bu_id'];


$wherebu = 'where bu_id = '.$bu_id.'';

if($bu_id == 0){
    $wherebu = '';
}




    $autoId = "select MAX(id) as id  from tb_repair";
?>




