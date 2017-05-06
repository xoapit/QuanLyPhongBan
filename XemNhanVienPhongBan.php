
    <?php
        include('connect.php');
        $MaPhongBan="";
        if(isset($_GET["MaPhongBan"])){
            $MaPhongBan= $_GET["MaPhongBan"];
        }
        $query= mysqli_query($conn,"select * from phongban where MaPhongBan='".$MaPhongBan."'");
        $row=mysqli_fetch_assoc($query);
        
    ?>
    <div class="boxGeneral">
        <div class="boxTitle">
            <span class="glyphicon glyphicon-qrcode"></span>
            Nhân Viên Phòng <?php echo $row["TenPhongBan"] ;?>
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
                        $query= mysqli_query($conn,"select * from nhanvien inner join phongban on nhanvien.MaPhongBan=phongban.MaPhongBan where nhanvien.MaPhongBan='".$MaPhongBan."'");
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
                      </div>
                  </form>
              </div>
          </div>
