
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
    Xóa Thông Tin
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
            <th >Xóa Nhân Viên</th>
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
              <td><center><input type="button" name="" onclick="deleteNhanVien(<?php echo "'".$row["MaNhanVien"]."'"; ?>)" value="Xóa" class="btn btn-primary" /></center></td>
            </tr>
            <?php }?>
          </table>
        </div>
      </form>
      <label id="thongbao"> </label>
    </div>
  </div>

  <script type="text/javascript">
    function deleteNhanVien($MaNhanVien){
      if(confirm('Are you sure that you want to delete Nhan Vien '+$MaNhanVien)){
        var http = new XMLHttpRequest();
        http.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200 ) {
            $("#WebContent").load("xoathongtin.php");
          }
        }

        link="xulyxoathongtin.php?MaNhanVien="+$MaNhanVien;
        http.open("POST",link,true);
        http.send();
      }
    }
</script>    