
        $(document).ready(function() {
              $("#trangchu").click(function() {
                $("#noidung").load('module/trangchu.php')
              });
              $("#xemnhanvien").click(function() {
                $("#noidung").load('module/xemnhanvien.php')
              });   
               $("#xemphongban").click(function() {
                $("#noidung").load('module/xemphongban.php')
              });
            });