<?php
if ($_POST){
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$alamat=$_POST['alamat'];
	$username=$_POST['username'];
	$password=PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);

	if(empty($nama)){
		echo "<script>alert('nama mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	}elseif(empty($nim)){
		echo "<script>alert('nim tidak boleh kosong');location.href='tambah_mahasisiwa.php';</script>";

	}elseif (empty($alamat)){
		echo "<script>alert('alamat mahasisiwa tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>";
	}else{
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into mahasiswa (nama,nim,alamat,username,password)
		value ('".$nama."','".$nim."','".$alamat."','".$username."','".$password."')") or die (mysql_error($koneksi));
		
		if($insert){
			echo "<script>alert('sukses menambahkan data mahasiswa');location.href='datamahasiswa.php';</script>";
		} else {
			echo "<script>alert('gagal menambahkan siswa');location.href='tambah_mahasiswa.php;</script>";                                                                                                                                      
		}
	}
}
?>