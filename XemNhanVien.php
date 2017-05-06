
<?php
include('connect.php');

?>
<div class="boxGeneral">
    <div class="boxTitle">
        <span class="glyphicon glyphicon-qrcode"></span>
        Xem Nhân Viên
    </div>
    <div class="boxContent">
        <form action="" method="post">
            <div class="table-responsive">
                <table class="table table-bordered" >
                    <tr style="text-align:center">
                        <th >Mã Nhân Viên</th>
                        <th >Họ Tên</th>                                    
                        <th >Địa Chỉ</th>
                        <th >Phòng Ban</th>
                    </tr>
                    <?php
                    $query= mysqli_query($conn,"select * from nhanvien inner join phongban on nhanvien.MaPhongBan=phongban.MaPhongBan");
                    while($row = mysqli_fetch_assoc($query))
                    {
                        ?>
                        <tr>
                          <td><?php echo $row["MaNhanVien"]; ?></td>
                          <td><?php echo $row['HoTen']; ?></td>                                  
                          <td><?php echo $row['DiaChi']; ?></td>
                          <td><?php echo $row['TenPhongBan']; ?></td>
                      </tr>
                      <?php }?>
                  </table>

              </form>
          </div>
      </div>
      