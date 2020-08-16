<?php include_once "../base.php";

$id=$_GET['id'];

$today=date("Y-m-d");
$startDay=date("Y-m-d",strtotime("-2 days"));
$movies=$Movie->all(['sh'=>1]," && ondate>='$startDay' && ondate <='$today'");

foreach($movies as $movie){
    $selected=($id==$movie['id'])?"selected":"";
    echo "<option value='".$movie['id']."' $selected>".$movie['name']."</option>";
}

?>