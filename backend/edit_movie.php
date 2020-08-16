<?php
$row=$Movie->find($_GET['id']);
?>

<div class="ct">編輯院線片</div>
<hr>
<form action="api/save_move.php" method="post" enctype="multipart/form-data">
    <div style="width:80%;margin:auto">
    
    <div style="display:flex">
        <div>影片資料</div>
        <div>
            <div class="form">片名:<input type="text" name="name" value="<?=$row['name'];?>"></div>
            <div class="form">分級:
                <select name="level" >
                    <option value="1" <?=($row['level']==1)?"selected":"";?>>普遍級</option>
                    <option value="2" <?=($row['level']==2)?"selected":"";?>>輔導級</option>
                    <option value="3" <?=($row['level']==3)?"selected":"";?>>保護級</option>
                    <option value="4" <?=($row['level']==4)?"selected":"";?>>限制級</option>
                </select>
            </div>
            <div class="form">片長:<input type="text" name="length" value="<?=$row['length'];?>"></div>
            <div class="form">上映日期:
                <select name="year">
                    <option value="2020" <?=(mb_substr($row['ondate'],0,4,'utf8')==2020)?'selected':'';?>>2020</option>
                    <option value="2021" <?=(mb_substr($row['ondate'],0,4,'utf8')==2021)?'selected':'';?>>2021</option>
                </select>
                <select name="month">
                    <option value="1" <?=(mb_substr($row['ondate'],5,2,'utf8')==1)?'selected':'';?>>1</option>
                    <option value="2" <?=(mb_substr($row['ondate'],5,2,'utf8')==2)?'selected':'';?>>2</option>
                    <option value="3" <?=(mb_substr($row['ondate'],5,2,'utf8')==3)?'selected':'';?>>3</option>
                    <option value="4" <?=(mb_substr($row['ondate'],5,2,'utf8')==4)?'selected':'';?>>4</option>
                    <option value="5" <?=(mb_substr($row['ondate'],5,2,'utf8')==5)?'selected':'';?>>5</option>
                    <option value="6" <?=(mb_substr($row['ondate'],5,2,'utf8')==6)?'selected':'';?>>6</option>
                    <option value="7" <?=(mb_substr($row['ondate'],5,2,'utf8')==7)?'selected':'';?>>7</option>
                    <option value="8" <?=(mb_substr($row['ondate'],5,2,'utf8')==8)?'selected':'';?>>8</option>
                    <option value="9" <?=(mb_substr($row['ondate'],5,2,'utf8')==9)?'selected':'';?>>9</option>
                    <option value="10" <?=(mb_substr($row['ondate'],5,2,'utf8')==10)?'selected':'';?>>10</option>
                    <option value="11" <?=(mb_substr($row['ondate'],5,2,'utf8')==11)?'selected':'';?>>11</option>
                    <option value="12" <?=(mb_substr($row['ondate'],5,2,'utf8')==12)?'selected':'';?>>12</option>
                </select>
                <select name="day">
                    <option value="1" <?=(mb_substr($row['ondate'],8,2,'utf8')==1)?'selected':'';?>>1</option>
                    <option value="2" <?=(mb_substr($row['ondate'],8,2,'utf8')==2)?'selected':'';?>>2</option>
                    <option value="3" <?=(mb_substr($row['ondate'],8,2,'utf8')==3)?'selected':'';?>>3</option>
                    <option value="4" <?=(mb_substr($row['ondate'],8,2,'utf8')==4)?'selected':'';?>>4</option>
                    <option value="5" <?=(mb_substr($row['ondate'],8,2,'utf8')==5)?'selected':'';?>>5</option>
                    <option value="6" <?=(mb_substr($row['ondate'],8,2,'utf8')==6)?'selected':'';?>>6</option>
                    <option value="7" <?=(mb_substr($row['ondate'],8,2,'utf8')==7)?'selected':'';?>>7</option>
                    <option value="8" <?=(mb_substr($row['ondate'],8,2,'utf8')==8)?'selected':'';?>>8</option>
                    <option value="9" <?=(mb_substr($row['ondate'],8,2,'utf8')==9)?'selected':'';?>>9</option>
                    <option value="10" <?=(mb_substr($row['ondate'],8,2,'utf8')==10)?'selected':'';?>>10</option>
                    <option value="11" <?=(mb_substr($row['ondate'],8,2,'utf8')==11)?'selected':'';?>>11</option>
                    <option value="12" <?=(mb_substr($row['ondate'],8,2,'utf8')==12)?'selected':'';?>>12</option>
                    <option value="13" <?=(mb_substr($row['ondate'],8,2,'utf8')==13)?'selected':'';?>>13</option>
                    <option value="14" <?=(mb_substr($row['ondate'],8,2,'utf8')==14)?'selected':'';?>>14</option>
                    <option value="15" <?=(mb_substr($row['ondate'],8,2,'utf8')==15)?'selected':'';?>>15</option>
                    <option value="16" <?=(mb_substr($row['ondate'],8,2,'utf8')==16)?'selected':'';?>>16</option>
                    <option value="17" <?=(mb_substr($row['ondate'],8,2,'utf8')==17)?'selected':'';?>>17</option>
                    <option value="18" <?=(mb_substr($row['ondate'],8,2,'utf8')==18)?'selected':'';?>>18</option>
                    <option value="19" <?=(mb_substr($row['ondate'],8,2,'utf8')==19)?'selected':'';?>>19</option>
                    <option value="20" <?=(mb_substr($row['ondate'],8,2,'utf8')==20)?'selected':'';?>>20</option>
                    <option value="21" <?=(mb_substr($row['ondate'],8,2,'utf8')==21)?'selected':'';?>>21</option>
                    <option value="22" <?=(mb_substr($row['ondate'],8,2,'utf8')==22)?'selected':'';?>>22</option>
                    <option value="23" <?=(mb_substr($row['ondate'],8,2,'utf8')==23)?'selected':'';?>>23</option>
                    <option value="24" <?=(mb_substr($row['ondate'],8,2,'utf8')==24)?'selected':'';?>>24</option>
                    <option value="25" <?=(mb_substr($row['ondate'],8,2,'utf8')==25)?'selected':'';?>>25</option>
                    <option value="26" <?=(mb_substr($row['ondate'],8,2,'utf8')==26)?'selected':'';?>>26</option>
                    <option value="27" <?=(mb_substr($row['ondate'],8,2,'utf8')==27)?'selected':'';?>>27</option>
                    <option value="28" <?=(mb_substr($row['ondate'],8,2,'utf8')==28)?'selected':'';?>>28</option>
                    <option value="29" <?=(mb_substr($row['ondate'],8,2,'utf8')==29)?'selected':'';?>>29</option>
                    <option value="30" <?=(mb_substr($row['ondate'],8,2,'utf8')==30)?'selected':'';?>>30</option>
                    <option value="31" <?=(mb_substr($row['ondate'],8,2,'utf8')==31)?'selected':'';?>>31</option>
                </select>
            </div>
            <div class="form">發行商:<input type="text" name="publish" value="<?=$row['publish'];?>"></div>
            <div class="form">導演:<input type="text" name="director" value="<?=$row['director'];?>"></div>
            <div class="form">預告影片: <input type="file" name="trailer" ></div>
            <div class="form">電影海報: <input type="file" name="poster" ></div>
        
        </div>
    </div>
    <div style="display:flex">
        <div>劇情簡介</div>
        <div>
                <textarea name="intro" style="width:95%"><?=$row['intro'];?></textarea>
        </div>
    </div>
    </div>
    <hr>
    <div class="ct">
    <input type="hidden" name="id" value="<?=$row['id'];?>">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
    </div>
</form>