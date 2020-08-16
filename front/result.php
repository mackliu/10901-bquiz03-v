<div class="result">
<?php

$ord=$Ord->find(['no'=>$_GET['no']]);

?>
<style>
table td{
    border:1px solid #999;
    padding:5px;

}
table td:nth-child(1){
    width:100px;
}
</style>
<table style="width:50%;padding:20px;background:#eee;margin:auto">
    <tr>
        <td colspan='2'>感謝您的訂購，您的訂單編號是：<?=$_GET['no'];?></td>
    </tr>
    <tr>
        <td>電影名稱：</td>
        <td><?=$ord['movie'];?></td>
    </tr>
    <tr>
        <td>日　　期：</td>
        <td><?=$ord['date'];?></td>
    </tr>
    <tr>
        <td>場次時間：</td>
        <td><?=$ord['session'];?></td>
    </tr>
    <tr>
        <td colspan="2">座位：<br>
        <?php 
            $seats=unserialize($ord['seats']);
            foreach($seats as $seat){
                echo (floor($seat/5)+1)."排".($seat%5+1)."號<br>";
            }
        ?>
        
        </td>
    </tr>
    <tr>
        <td colspan="2" class='ct'>
            <button onclick="location.href='index.php'">確認</button>
        </td>
    </tr>
</table>

</div>