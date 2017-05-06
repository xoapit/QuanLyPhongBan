
<?php
include('connect.php');

?>

<script type="text/javascript">/*
  $(document).ready(function() {
    $("#btnSearch").click(function (){
      var searchContent; //=$("input[name='SearchContent']").val();
      //lay tat ca du lieu trong form login
      var data = $('form#form_search').serialize();
        //su dung ham $.ajax()
        $.ajax({
          type : 'POST', //kiểu post
          url  : 'timkiem.php', //gửi dữ liệu sang trang timkiem.php
          data : data     
        });
        $("#WebContent").load("timkiem.php");
    }); 
  });*/
</script>
<script language="javascript">
  function load_ajax()
  {
    $.post(
      'timkiem.php', 
      { SearchContent : $('#SearchContent').val()},  
            function(result){ // Success
              $('#WebContent').html(timkiem.php);
            }, 
            'text' 
            );
  }
</script>

<div class="boxGeneral" id="boxTimKiem">
  <div class="boxTitle">
    <span class="glyphicon glyphicon-qrcode"></span>
    Tìm Kiếm
  </div>
  <div class="boxContent">
    <form id="form_search" class="form">
      <div class="form-group">
        <label for="">Nhập Thông Tin Tìm Kiếm: </label>
        <input type="text" name="SearchContent" id="SearchContent" class="form-control" placeholder="Mã Nhân Viên, Họ Tên, Địa Chỉ Hay Phòng Ban">
      </div>
      <button type="button" name="btnSearch" id="btnSearch" onclick="loadSearch()" class="btn btn-primary">Search</button>
    </form>
    <hr>
    <div class="" id="result"></div>

    <script type="text/javascript">
      function loadSearch(){
        var http = new XMLHttpRequest();
        http.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200 ) {
            $("#result").html(this.responseText);
          }
        }

        link="xulytimkiem.php?SearchContent="+document.getElementById("SearchContent").value;

        http.open("POST",link,true);
        http.send();
      }
    </script>
