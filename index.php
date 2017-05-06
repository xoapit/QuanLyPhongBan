<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Quản Lý Phòng Ban</title>

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $("#WebContent").load('trangchu.php');
            $("#trangchu").click(function() {
                $("#WebContent").load('trangchu.php')
            });
            $("#xemnhanvien").click(function() {
                $("#WebContent").load('xemnhanvien.php')
            });
            $("#xemphongban").click(function() {
                $("#WebContent").load('xemphongban.php')
            });
            $("#timkiem").click(function() {
                $("#WebContent").load('timkiem.php')
            });
            $("#capnhatthongtin").click(function() {
                $("#WebContent").load('capnhatthongtin.php')
            });
            $("#xoathongtin").click(function() {
                $("#WebContent").load('xoathongtin.php')
            });
            $("#xoatatca").click(function() {
                $("#WebContent").load('xoatatca.php')
            });
            $("#trogiupchuongtrinh").click(function() {
                $("#WebContent").load('trogiupchuongtrinh.php')
            });

        });
    </script>
</head>

<body>
    <frameset>
    <!--header-->
    <div class="header" style="background-image: url(image/banner.png)">
      <div class="nameWeb">
        <center>CÔNG NGHỆ WEB
            <br>
            <p>Chương Trình Quản Lý Phòng Ban</p>
        </center>
    </div>
</div>
<!--header-->
<!--body container-->
<div class="container">
    <!--boxLeft-->
    <div class="col-md-3">
        <div class="boxGeneral">
            <div class="boxTitle">
                <span class="glyphicon glyphicon-tasks"></span>
                Chức Năng
            </div>
            <div class="boxContent">
                <ul>
                    <li id="trangchu">Trang chủ</li>
                    <li id="xemnhanvien">Xem nhân viên</li>
                    <li id="xemphongban">Xem phòng ban</li>
                    <li id="timkiem">Tìm kiếm</li>
                    <li id="capnhatthongtin">Cập nhật thông tin</li>
                    <li id="xoathongtin">Xóa thông tin</li>
                    <li id="xoatatca">Xóa tất cả</li>
                    <li id="trogiupchuongtrinh">Trợ giúp chương trình</li>
                </ul>
            </div>
        </div>
    </div>
    <!--boxLeft-->
    <!--boxRight-->
    <div class="col-md-9" id="WebContent">
        <div class="boxGeneral">
            <div class="boxTitle">
                <span class="glyphicon glyphicon-qrcode"></span>
                Nội Dung
            </div>
            <div class="boxContent">
                noi dung
            </div>
        </div>
    </div>
    <!--boxRight-->
</div>
<!--body container-->
<!--footer-->
<div class="footer">
    <center>Copyright 2017 by Xoapit 13T1 BKDN</center> 
</div>
<!--footer-->
</frameset>
</body>