<?php include_once "../base.php";

$movie=$Movie->find($_GET['movie']);
$ondate=strtotime($movie['ondate']);
$today=strtotime(date("Y-m-d"));

for($i=0;$i<3;$i++){
    $date=strtotime("+$i days",$ondate);
    if($date>=$today){
        echo "<option value='".date("Y-m-d",$date)."'>".date("m月d日 l",$date)."</option>";
    }
}

?>