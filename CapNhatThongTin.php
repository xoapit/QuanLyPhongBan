
<?php
include('connect.php');

?>
<script type="text/javascript">
    $(document).ready(function() {

      $('#table_NhanVien tr td a').click(function (){
        $("#WebContent").load(this.id);
      }); 
    });
  </script>
<div class="boxGeneral">
    <div class="boxTitle">
        <span class="glyphicon glyphicon-qrcode"></span>
        Cập Nhật Thông Tin
    </div>
    <div class="boxContent">
        <form action="" method="post">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_NhanVien">
                    <tr style="text-align:center">
                        <th >Mã Nhân Viên</th>
                        <th >Họ Tên</th>                                    
                        <th >Địa Chỉ</th>
                        <th >Phòng Ban</th>
                        <th >Cập Nhật Thông Tin</th>
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
                          <td><a id="suanhanvien.php?MaNhanVien=<?php echo $row['MaNhanVien']; ?>" href="#"> <center>Sửa</center> </a></td>
                      </tr>
                      <?php }?>
                  </table>
                </div>
              </form>
          </div>
      </div>
      