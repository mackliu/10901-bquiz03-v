<style>
.header,.list{
    display:flex;
    width:100%;
    justify-content:center;
    align-items:center;
}
.header > div ,.list > div{
    width:25%;
    text-align:center;
    color:black;
}
.header > div {
background:#ccc;
}
.list{
    background:white;
    margin:2px 0;
}

</style>
<div>
    <div class="ct">預告片清單</div>
<div class="header">
    <div>預告片海報</div>
    <div>預告片片名</div>
    <div>預告片排序</div>
    <div>操作</div>
</div>
<form action="api/edit_poster.php" method="post">
<div style="overflow:auto;height:200px;">
<?php
    $posters=$Poster->all([]," order by rank");
    foreach($posters as $key => $po){
        $prev=($key!=0)?$posters[$key-1]['id']:$po['id'];
        $next=(($key+1)==count($posters))?$po['id']:$posters[$key+1]['id'];
?>
    <div class="list">
        <div>
            <img src="img/<?=$po['img'];?>" style="width:60px;height:80">
        </div>
        <div>

            <input type="text" name="name[]" value="<?=$po['name'];?>">
        </div>
        <div>
            <button type="button" class="rank" data-rank="<?=$po['id'].'-'.$prev;?>">往上</button>
            <button type="button" class="rank" data-rank="<?=$po['id'].'-'.$next;?>">往下</button>

        </div>
        <div>
            <input type="checkbox" name="sh[]" value="<?=$po['id'];?>" <?=($po['sh']==1)?'checked':'';?>>顯示
            <input type="checkbox" name="del[]" value="<?=$po['id'];?>">刪除
            <select name="ani[]" >
                <option value="1" <?=($po['ani']==1)?'selected':'';?>>淡入淡出</option>
                <option value="2" <?=($po['ani']==2)?'selected':'';?>>滑入滑出</option>
                <option value="3" <?=($po['ani']==3)?'selected':'';?>>縮放</option>
            </select> 
            <input type="hidden" name="id[]" value="<?=$po['id'];?>">
        </div>
    </div>

  <?php
  }
  ?>
  </div>
    <div class="ct"><input type="submit" value="編輯確定"><input type="reset" value="重置"></div>
</form>
</div>
<hr>
<div>
<div class="ct">新增預告片海報</div>
<form action="api/add_poster.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>預告片海報: <input type="file" name="img" id="img"></td>
            <td>預告片片名: <input type="text" name="name" id="name"></td>
        </tr>
    </table>
    <div class="ct"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>
</div>

<script>
$(".rank").on("click",function(){
    let id=$(this).data('rank').split("-");
    $.post("api/sw.php",{id,'table':'poster'},function(){
        location.reload();
    })
})


</script>