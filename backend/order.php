<div class="ct">訂單清單</div>
<hr>
<div>快速刪除:
<input type="radio" name="type" value="date" checked>依日期
<input type="text" name="date" id="date">
<input type="radio" name="type" value="movie">依電影
<select name="movie" id="movie">

<?php
$movies=$Ord->all([]," group by `movie`");
foreach($movies as $movie){
    echo "<option value='".$movie['movie']."'>".$movie['movie']."</option>";
}
?>
</select>
<button onclick="qDel()">刪除</button>
</div>

<div style="display:flex;width:100%;text-align:center">
    <div style="width:15%">訂單編號</div>
    <div style="width:15%">電影名稱</div>
    <div style="width:15%">日期</div>
    <div style="width:15%">場次時間</div>
    <div style="width:13%">訂購數量</div>
    <div style="width:14%">訂購位置</div>
    <div style="width:13%">操作</div>
</div>
<div style="overflow:auto;height:420px;;width:100%">
<?php
$ords=$Ord->all([]," order by no desc");
foreach($ords as $ord){
?>
<div style="display:flex;text-align:center;background:#ccc;margin:2px 0;color:black;align-items:center">
    <div style="width:15%"><?=$ord['no'];?></div>
    <div style="width:15%"><?=$ord['movie'];?></div>
    <div style="width:15%"><?=$ord['date'];?></div>
    <div style="width:15%"><?=$ord['session'];?></div>
    <div style="width:13%"><?=$ord['qt'];?></div>
    <div style="width:14%">
    <?php
        $seats=unserialize($ord['seats']);
        foreach($seats as $seat){
            echo (floor($seat/5)+1)."排".($seat%5+1)."號<br>";
        }
    ?>
    </div>
    <div style="width:13%"><button onclick="del('ord',<?=$ord['id'];?>)">刪除</button></div>
</div>


<?php
}
?>
</div>


<script>
function qDel(){
    let type=$("input[name='type']:checked").val();
    let target;
    switch(type){
        case "date":
            target=$("#date").val()

        break;
        case "movie":
            target=$("#movie").val()
        break;
    }

    if(confirm("你確定要刪除全部"+target+"的訂單嗎?")){
        $.post("api/q_del.php",{type,target},function(){
            location.reload()
        })
    }
}


function del(table,id){
    if(confirm("你確定要刪除此筆訂單資料嗎?")){
            $.post('api/del.php',{table,id},function(){
        location.reload();
    })
    }

}


</script>