<?php include_once "../base.php";

$movie=$Movie->find($_GET['movie']);
$date=$_GET['date'];
$session=$sess[$_GET['session']];

$ords=$Ord->all([
    'movie'=>$movie['name'],
    'date'=>$date,
    'session'=>$session
]);

$seats=[];

foreach($ords as $ord){
    $seats=array_merge($seats,unserialize($ord['seats']));
}

?>
<style>
.board{
    background:url("icon/03D04.png");
    width:540px;
    height:370px;
    margin:auto;
    box-sizing:border-box;
    padding-top:20px;
}
.seats{
    width:320px;
    height:340px;
    margin:auto;
    display:flex;
    flex-wrap:wrap;
}
.seat{
    
    width:64px;
    height:85px;
    position:relative;
    text-align:center
}
.null{
    background:url('icon/03D02.png') no-repeat center;
}
.checked{
    background:url('icon/03D03.png') no-repeat center;
}
.chk{
    position:absolute;
    right:5px;
    bottom:5px;
    width:15px;
    height:15px;
}
.info{
    width:540px;
    margin:auto;
    background:#ccc;
    padding:10px 0;
}
.info div:not(:nth-last-child(1)){
    padding-left:100px;
}
</style>
<div class="board">
    <div class="seats">
    <?php
    for($i=0;$i<20;$i++){
        if(in_array($i,$seats)){
            echo "<div class='seat checked'>";
        }else{
            echo "<div class='seat null'>";
            echo "<input type='checkbox' name='seat' value='$i' class='chk'>";

        }
        echo  (floor($i/5)+1)."排".($i%5+1)."號";
        echo "</div>";
    }

    ?>
    </div>
</div>
<div class="info">
<div>您選擇的電影是:<?=$movie['name'];?></div>
<div>您選擇的時刻是:<?=$date;?> <?=$session;?></div>
<div>您己經勾選<span id='tickets'></span>張票，最多可以購買四張票</div>
<div class="ct" style="margin-top:10px;">
    <button onclick="prev()">上一步</button>
    <button onclick="checkout()">訂購</button>
</div>
</div>
