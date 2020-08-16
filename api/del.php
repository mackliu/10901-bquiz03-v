<?php
include_once "../base.php";

switch($_POST['table']){
    case "movie":
        $db=$Movie;
    break;
    case "ord":
        $db=$Ord;
    break;
}

$db->del($_POST['id']);

?>