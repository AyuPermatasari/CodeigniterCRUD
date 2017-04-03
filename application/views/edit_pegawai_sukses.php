<?php 

	echo "Sukses Update Data";
	echo "</br>";
	echo "Update Data Lagi ?";
	echo "</br>";
	echo anchor('pegawai/update/'.$this->uri->segment(3), 'Ya   ');
	echo anchor('pegawai/', 'Tidak');
 ?>