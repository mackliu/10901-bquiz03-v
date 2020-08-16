<style>
.lists{
  width:216px;
  height:310px;
  overflow:hidden;
  position:relative;
  left:102px;
}
.po{
  position:absolute;
  text-align:center;
  display:none;
}
.controls{
  display:flex;
  justify-content:center;
  align-items:center;
  margin-top:10px;
}
.controls > div:nth-child(1),
.controls > div:nth-child(3){
  width:20px
}
.controls .btns{
  width:320px;
  overflow:hidden;
  height:90px;
  display:flex;
}
.controls .btns .icon{
  text-align:center;
  width:80px;
  flex-shrink: 0;
  font-size:12px;
  position:relative;
}
.controls .btns .icon img{
  width:70%;
  border:1px solid white;
}
</style>

<div class="half" style="vertical-align:top">
      <h1>預告片介紹</h1>
      <div class="rb tab" style="width:95%;height:410px">
        <div>
          <div class="lists">
            
          <?php
          $pos=$Poster->all(['sh'=>1]," order by rank");
          foreach($pos as $po){
          ?>
          <div class="po" id="p<?=$po['id'];?>" data-ani="<?=$po['ani'];?>">
            <img src="img/<?=$po['img'];?>" style="width:210px;height:280px;border:3px solid white;">
            <div><?=$po['name'];?></div>
          </div>
          
          <?php
          }
          ?>
          </div>



          <div class="controls">
            <div class="left"><img src="icon/left.png" alt=""></div>
            <div class='btns'>
            <?php
          $pos=$Poster->all(['sh'=>1]," order by rank");
          foreach($pos as $po){
          ?>
          <div class="icon" id="i<?=$po['id'];?>">
            <img src="img/<?=$po['img'];?>">
            <div><?=$po['name'];?></div>
          </div>
          
          <?php
          }
          ?>
            </div>
            <div class="right"><img src="icon/right.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  <script>
    $(".po").eq(0).show();

    let auto=setInterval(slider, 3000);      

    function slider(){
        let now=$(".po:visible");
        let next;
        if($(now).next().length>0){
           next=$(now).next();
        }else{
            next=$(".po").eq(0)
        }
        let ani=$(".po:visible").data('ani');
      console.log(ani)
      switch(ani){
        case 1:
          $(now).fadeOut(1000,()=>{
            $(next).fadeIn(1000)
          })
        break;
        case 2:
          $(now).slideUp(1000,()=>{
            $(next).slideDown(1000);
          });
        break;
        case 3:
          $(now).hide(1000,()=>{
            $(next).show(1000);
          });
        break;
      }
    }      

    $(".icon").on("click",function(){
        let id=$(this).attr("id").replace("i","");
        $(".po").hide();
        $("#p"+id).show();
    })

    $(".btns").hover(
      function(){
        clearInterval(auto);
    },
      function(){
        auto=setInterval(slider, 3000)
    }
    )

    let total=<?=$Poster->count(['sh'=>1]);?>;
    let p=0;
    $(".left,.right").on("click",function(){
      console.log($(this).attr('class'))
      switch($(this).attr('class')){
        case "left":
          if(p>0){
            p--;
            $(".icon").animate({'right':80*p});
          }
        break;
        case "right":
          if(p<(total-4)){
            p++;
            $(".icon").animate({'right':80*p});
          }
        break;
      }
    })



  </script>

    <div class="half">
<style>

.block{
  display:inline-flex;
  width:48%;
  margin:0.5%;
  border:1px solid #999;
  border-radius:10px;
  padding:3px;
  box-sizing:border-box;
  flex-wrap:wrap;
}

.block > div:nth-child(1){
  width:33%;
}
.block > div:nth-child(2){
  width:66%;
}
.block > div:nth-child(3){
  width:100%;
}
a{
  text-decoration:none;
}

</style>

      <h1>院線片清單</h1>
      <div class="rb tab" style="width:95%;">
      <?php

        $today=date("Y-m-d");
        $startDay=date("Y-m-d",strtotime("-2 days"));
        $total=$Movie->count(['sh'=>1]," && ondate>='$startDay' && ondate <='$today'");
        $div=4;
        $pages=ceil($total/$div);
        $now=(!empty($_GET['p']))?$_GET['p']:1;
        $start=($now-1)*$div;
        $movies=$Movie->all(['sh'=>1]," && ondate>='$startDay' && ondate <='$today' order by rank limit $start,$div");
        foreach($movies as $movie){
       ?>
        <div class="block">
          <div onclick="location.href='?do=intro&id=<?=$movie['id'];?>'"><img src="img/<?=$movie['poster'];?>" style="width:50px;height:80%;cursor:pointer"></div>
          <div>
          <div><?=$movie['name'];?></div>
          <div style="font-size:14px;">分級: <img src="icon/03C0<?=$movie['level'];?>.png" style="width:15px;"> <?=$lv[$movie['level']];?> </div>
          <div style="font-size:14px;">上映日期:<?=$movie['ondate'];?></div>
          </div>
          <div class="ct">
            <button onclick="location.href='?do=intro&id=<?=$movie['id'];?>'">劇情簡介</button>
            <button onclick="location.href='?do=order&id=<?=$movie['id'];?>'">線上訂票</button>
          </div>
        </div>
       <?php   
        }

      ?>

        <div class="ct"> 
        <?php
          if(($now-1)>0){
            echo "<a href='?p=".($now-1)."'> < </a>";
          }
          for($i=1;$i<=$pages;$i++){
            $fontsize=($now==$i)?"24px":"18px";

            echo "<a href='?p=$i' style='font-size:$fontsize'> $i </a>";
          }

          if((($now+1))<=$pages){
            echo "<a href='?p=".($now+1)."'> > </a>";
          }



        ?>  
        
        </div>
      </div>
    </div>