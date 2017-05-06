<?php 
include("connect.php");
$SearchContent= addslashes($_REQUEST["SearchContent"]);
?>

<div class="table-responsive" id="table_result">
	<table class="table table-bordered" >
		<tr style="text-align:center">
			<th >Mã Nhân Viên</th>
			<th >Họ Tên</th>                                    
			<th >Địa Chỉ</th>
			<th >Phòng Ban</th>
		</tr>
		<?php
		$query= mysqli_query($conn,"select * from nhanvien inner join phongban on nhanvien.MaPhongBan=phongban.MaPhongBan where (nhanvien.MaNhanVien='$SearchContent') or (nhanvien.DiaChi=N'$SearchContent') or (nhanvien.HoTen=N'$SearchContent')");
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
</div>

