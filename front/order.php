<div class="order-form">
<h4 class="ct">線上訂票</h4>
<table style="width:50%;margin:auto">
    <tr>
        <td>電影：</td>
        <td>
            <select name="movie" id="movie"></select>
        </td>
    </tr>
    <tr>
        <td>日期：</td>
        <td>
            <select name="date" id="date"></select>
        </td>
    </tr>
    <tr>
        <td>場次：</td>
        <td>
            <select name="session" id="session"></select>
        </td>
    </tr>
</table>
<div class="ct">
<button onclick="order()">確定</button>
<button onclick="getMovie()">重置</button>
</div>
</div>

<div class="booking" style="display:none">
<button onclick="prev()">上一步</button>
</div>

<script>

function order(){
    $(".order-form").hide()
    $(".booking").show();
    getBoard()
}

function prev(){
    $(".order-form").show()
    $(".booking").hide();
    $(".booking").html("")
    seats.length=0;
}

function getBoard(){
    let movie=$("#movie").val();
    let date=$("#date").val();
    let session=$("#session").val();
    $.get("api/get_board.php",{movie,date,session},function(board){
        $(".booking").html(board)
        booking()

    })
}
let seats=new Array();
function booking(){
    $(".chk").on("change",function(){
        let status=$(this).prop("checked");
        switch(status){
            case true:
                if(seats.length<4){
                    seats.push($(this).val())
                    $("#tickets").html(seats.length)
                }else{
                    alert("最多只能選四張票")
                    $(this).prop('checked',false)
                }
            break;
            case false:
                seats.splice(seats.indexOf($(this).val()),1);
            break;
        }
    })
}

function checkout(){
    let movie=$("#movie").val();
    let date=$("#date").val();
    let session=$("#session").val();
    $.post("api/save_order.php",{movie,date,session,seats},function(no){
        location.href=`?do=result&no=${no}`
    })
}

getMovie()

$("#movie").on("change",function(){
    getDate()
})

$("#date").on("change",function(){
    getSession()
})

function getMovie(){
    let id=<?=(!empty($_GET['id']))?$_GET['id']:0;?>;
    
    $.get("api/get_movie.php",{id},function(movies){
        $("#movie").html(movies)
        getDate()
    })

}

function getDate(){
    let movie=$("#movie").val();
    $.get("api/get_date.php",{movie},function(days){
        $("#date").html(days)
        getSession()
    })

}

function getSession(){
    let movie=$("#movie").val();
    let date=$("#date").val();
    $.get("api/get_session.php",{movie,date},function(sessions){
        $("#session").html(sessions)
    })
}

</script>