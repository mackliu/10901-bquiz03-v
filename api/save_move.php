<?php include_once "../base.php";


$_POST['ondate']=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
unset($_POST['year']);
unset($_POST['month']);
unset($_POST['day']);
if(!isset($_POST['id'])){
    $_POST['rank']=$Movie->q("select max(`id`) from `movie`")[0][0]+1;
    $_POST['sh']=1;
}

if(!empty($_FILES['trailer']['tmp_name'])){
    $_POST['trailer']=$_FILES['trailer']['name'];
    move_uploaded_file($_FILES['trailer']['tmp_name'],"../img/".$_POST['trailer']);
}

if(!empty($_FILES['poster']['tmp_name'])){
    $_POST['poster']=$_FILES['poster']['name'];
    move_uploaded_file($_FILES['poster']['tmp_name'],"../img/".$_POST['poster']);
}

$Movie->save($_POST);

to("../admin.php?do=movie");

?>