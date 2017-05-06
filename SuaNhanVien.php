<?php 
include("connect.php");
$MaNhanVien="";
if(isset($_GET["MaNhanVien"])){
	$MaNhanVien=$_GET["MaNhanVien"];
}
$query= mysqli_query($conn,"select * from nhanvien inner join phongban on nhanvien.MaPhongBan=phongban.MaPhongBan where nhanvien.MaNhanVien='".$MaNhanVien."'");
$row = mysqli_fetch_assoc($query);
?>
<div class="boxGeneral">
	<div class="boxTitle">
		<span class="glyphicon glyphicon-qrcode"></span>
		Cập Nhật Thông Tin
	</div>
	<div class="boxContent">
		<form action="" method="post" class="form">
			<div class="form-group">
				<label for="">Mã Nhân Viên: </label>
				<input type="text" readonly="true" name="MaNhanVien" id="MaNhanVien" class="form-control" value="<?php echo $row["MaNhanVien"]; ?>">
			</div>
			<div class="form-group">
				<label for="">Họ Tên: </label>
				<input type="text"  name="HoTen" id="HoTen" class="form-control" value="<?php echo $row["HoTen"]; ?>">
			</div>
			<div class="form-group">
				<label for="">Địa Chỉ: </label>
				<input type="text"  name="DiaChi" id="DiaChi" class="form-control" value="<?php echo $row["DiaChi"]; ?>">
			</div>
			<div class="form-group">
				<label for="">Phòng Ban: </label>
				<input type="text" readonly="true" name="PhongBan" id="PhongBan" class="form-control" value="<?php echo $row["TenPhongBan"]; ?>">
			</div>
			<button type="button" name="btnSave" id="btnSave" onclick="updateNhanVienInfo()" class="btn btn-primary">Lưu Thay Đổi</button>
		</form>
		<label id="thongbao"> </label>
	</div>
</div>

<script type="text/javascript">
	function updateNhanVienInfo(){
		var http = new XMLHttpRequest();
		http.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200 ) {
				//document.write(this.responseText);
				$("#thongbao").html(this.responseText);
			}
		}

		link="xulycapnhatnhanvien.php?MaNhanVien="+document.getElementById("MaNhanVien").value+"&HoTen="+document.getElementById("HoTen").value+"&DiaChi="+document.getElementById("DiaChi").value;

		http.open("POST",link,true);
		http.send();
	}
</script>