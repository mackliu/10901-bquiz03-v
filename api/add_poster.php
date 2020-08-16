<?php
include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
    $data['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$data['img']);
    $data['name']=$_POST['name'];
    $data['sh']=1;
    $data['rank']=$Poster->q("select max(`id`) from `poster`")[0][0]+1;
    $data['ani']=rand(1,3);
    $Poster->save($data);

}

to('../admin.php?do=poster');
?>