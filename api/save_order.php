<?php include_once "../base.php";

$data['movie']=$Movie->find($_POST['movie'])['name'];
$data['date']=$_POST['date'];
$data['session']=$sess[$_POST['session']];
$data['qt']=count($_POST['seats']);
$no=sprintf("%04d",($Ord->q("select max(`id`) from `ord`")[0][0]+1));
$data['no']=date("Ymd").$no;
sort($_POST['seats']);
$data['seats']=serialize($_POST['seats']);

$Ord->save($data);

echo $data['no'];

?>