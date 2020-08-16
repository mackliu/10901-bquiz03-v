<?php
include_once "../base.php";

switch($_POST['table']){
    case "poster":
        $db=$Poster;
    break;
    case "movie":
        $db=$Movie;
    break;
}

$row1=$db->find($_POST['id'][0]);
$row2=$db->find($_POST['id'][1]);
$tmp=$row1;
$row1['rank']=$row2['rank'];
$row2['rank']=$tmp['rank'];

$db->save($row1);
$db->save($row2);
?>