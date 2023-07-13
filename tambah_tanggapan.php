<?php 
session_start();
date_default_timezone_set("Asia/Bangkok");
require 'koneksi.php';
		$tanggapan = $_POST['tanggapan'];
		$tgl=date('Y/m/d h:i:s');
		$id_user = $_SESSION['id_user'];
		$id_pengaduan = $_POST['id_pengaduan'];
		$sql = mysqli_query($koneksi,"INSERT INTO tanggapan (id_user,id_pengaduan,tanggapan,tanggal_tanggapan) VALUES ('$id_user','$id_pengaduan','$tanggapan','$tgl');");
		if($sql){
			 ?>
		    <script type="text/javascript">
		        alert ('Berhasil Menanggapi');
		        window.location="siswa.php?url=detail_pengaduan&id=<?php echo $id_pengaduan; ?>";
		    </script>
<?php
		}


 ?>