<style>
.list{
    display:flex;
    width:100%;
    align-items:center;
    padding:3px 0;
}
.list > div:nth-child(1),
.list > div:nth-child(2){
    width:15%;
    text-align:center;
    color:black;
}
.list > div:nth-child(3){
    width:70%;
    color:black;
}

.list{
    background:white;
    margin:2px 0;
}

</style>
<div>
<button onclick="location.href='?do=add_movie'">新增電影</button>
<hr>

<div style="overflow:auto;height:400px;">
<?php
    $movies=$Movie->all([]," order by rank");
    foreach($movies as $key => $mo){
        $prev=($key!=0)?$movies[$key-1]['id']:$mo['id'];
        $next=(($key+1)==count($movies))?$mo['id']:$movies[$key+1]['id'];
?>
    <div class="list">
        <div>
            <img src="img/<?=$mo['poster'];?>" style="width:80px;height:100">
        </div>
        <div>分級: <img src="icon/03C0<?=$mo['level'];?>.png" style="width:20px"></div>
        <div>
            <div>
                <div style="display:inline-block;width:30%">片名:<?=$mo['name'];?></div>
                <div style="display:inline-block;width:30%">片長:<?=$mo['length'];?></div>
                <div style="display:inline-block;width:30%">上映時間:<?=$mo['ondate'];?></div>
            </div>
            <div>
                <button class="sh" data-sh="<?=$mo['sh'];?>" data-id="<?=$mo['id'];?>"><?=($mo['sh']==1)?"顯示":"隱藏";?></button>
                <button class="rank" data-rank="<?=$mo['id'].'-'.$prev;?>">往上</button>
                <button class="rank" data-rank="<?=$mo['id'].'-'.$next;?>">往下</button>
                <button onclick="location.href='?do=edit_movie&id=<?=$mo['id'];?>'">編輯電影</button>
                <button onclick="del('movie',<?=$mo['id'];?>)">刪除電影</button>
            </div>
            <div>
                <?=$mo['intro'];?>
            </div>
        
        </div>
    </div>

  <?php
  }
  ?>
  </div>
    
</div>


<script>
$(".rank").on("click",function(){
    let id=$(this).data('rank').split("-");
    $.post("api/sw.php",{id,'table':'movie'},function(){
        location.reload();
    })
})


$(".sh").on("click",function(){
    let sh=$(this).data('sh');
    let id=$(this).data('id');
    let _this=$(this)    
    switch(sh){
        case 1:
            $.post("api/sh.php",{id},function(){
                _this.html('隱藏')
                _this.data('sh',0)
            })
        break;
        case 0:
            $.post("api/sh.php",{id},function(){
                _this.html('顯示')
                _this.data('sh',1)
            })
        break;
    }
})

function del(table,id){
    $.post('api/del.php',{table,id},function(){
        location.reload();
    })
}
</script>