<?php 



     $mysql = mysqli_query($koneksi, "DELETE FROM USER WHERE id_user='$_GET[id_user]'");
     if ($mysql) {
        echo "<script>alert('Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=user/index'></script>";
     }else{
      echo "<script>alert('Terjadi kessalahan, coba ulangi kembali')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=user/index'></script>";
     }



 ?>