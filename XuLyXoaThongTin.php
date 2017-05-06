<?php 
include("connect.php");

$maNhanVien= addslashes($_REQUEST["MaNhanVien"]);

$sql="delete from nhanvien where MaNhanVien='$maNhanVien'";
$sl= mysqli_query($conn,$sql);

echo "<hr>";
echo "Đã xóa thành công";
?>