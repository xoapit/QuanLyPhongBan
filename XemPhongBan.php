  <?php
  include('connect.php');
  ?>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#table_PhongBan tr td a').click(function (){
        $("#WebContent").load(this.id);
      }); 
    });
  </script>

  <div class="boxGeneral">
    <div class="boxTitle">
      <span class="glyphicon glyphicon-qrcode"></span>
      Xem Phòng Ban
    </div>
    <div class="boxContent">
      <form action="" method="post">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="table_PhongBan">
            <tr style="text-align:center">
              <th >Mã Phòng Ban</th>
              <th >Tên Phòng Ban</th>                                    
              <th >Thời Gian</th>
              <th >Xem Nhân Viên</th>
            </tr>
            <?php
            $query= mysqli_query($conn,"select * from phongban");
            while($row = mysqli_fetch_assoc($query))
            {
              ?>
              <tr>
                <td><?php echo $row["MaPhongBan"]; ?></td>
                <td><?php echo $row['TenPhongBan']; ?></td>                                  
                <td><?php echo $row['ThoiGian']; ?></td>
                <td><a id="xemnhanvienphongban.php?MaPhongBan=<?php echo $row['MaPhongBan']; ?>" href="#"> Xem </a></td>
              </tr>
              <?php }?>
            </table>
            </div>
          </form>
        </div>
      </div>
