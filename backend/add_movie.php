<div class="ct">新增院線片</div>
<hr>
<form action="api/save_move.php" method="post" enctype="multipart/form-data">
    <div style="width:80%;margin:auto">
    
    <div style="display:flex">
        <div>影片資料</div>
        <div>
            <div class="form">片名:<input type="text" name="name" value=""></div>
            <div class="form">分級:
                <select name="level" >
                    <option value="1">普遍級</option>
                    <option value="2">輔導級</option>
                    <option value="3">保護級</option>
                    <option value="4">限制級</option>
                </select>
            </div>
            <div class="form">片長:<input type="text" name="length" value=""></div>
            <div class="form">上映日期:
                <select name="year">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
                <select name="month">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select name="day">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <div class="form">發行商:<input type="text" name="publish" value=""></div>
            <div class="form">導演:<input type="text" name="director" value=""></div>
            <div class="form">預告影片: <input type="file" name="trailer" ></div>
            <div class="form">電影海報: <input type="file" name="poster" ></div>
        
        </div>
    </div>
    <div style="display:flex">
        <div>劇情簡介</div>
        <div>
                <textarea name="intro" style="width:95%"></textarea>
        </div>
    </div>
    </div>
    <hr>
    <div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    </div>
</form>