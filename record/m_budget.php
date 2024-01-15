
<?php

session_start();
$bu_id = $_SESSION['bu_id'];
$where = 'where bu_id = '.$bu_id.'';

if($bu_id == 0){
    $where = '';
}

$whereb = 'AND bu_id = '.$bu_id.'';

if($bu_id == 0){
    $whereb = '';
}


   $fetch  = 'SELECT * FROM v_budget WHERE status_id = 1 '.$whereb.'';
?>
