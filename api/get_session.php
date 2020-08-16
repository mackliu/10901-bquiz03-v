<?php include_once "../base.php";

$movie=$Movie->find($_GET['movie']);
$date=$_GET['date'];

$h=date("H");

if($date==date("Y-m-d")){
    $start=(($h-14)<0)?1:floor(($h-12)/2)+1;
}else{
    $start=1;
}

for($i=$start;$i<=5;$i++){
    $seats=$Ord->q("SELECT sum(qt) FROM `ord` WHERE `movie`='".$movie['name']."' && `date`='$date' && `session`='".$sess[$i]."'")[0][0];
    echo "<option value='$i'>".$sess[$i]." 剩餘座位 ".(20-$seats)."</option>";
}

?>