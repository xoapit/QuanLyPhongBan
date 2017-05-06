<?php 
include("connect.php");

$maNhanVien= addslashes($_REQUEST["MaNhanVien"]);
$hoTen= addslashes($_REQUEST["HoTen"]);
$diaChi= addslashes($_REQUEST["DiaChi"]);

$sql="update nhanvien set HoTen=N'$hoTen', DiaChi=N'$diaChi' where MaNhanVien='$maNhanVien'";
$sl= mysqli_query($conn,$sql);

echo "<hr>";
echo "Cập nhật thành công";
?>