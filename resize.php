<?php 

$file_gambar = 'Koala.jpg';

$src 	= imagecreatefromjpeg($file_gambar);

$src_width 	= imageSX($src); // dapatkan lebar gambar
$src_height = imageSY($src); // dapatkan tinggi gambar


$dst_width 	= 300; // set lebar = 300px
$dst_height = ($dst_width/$src_width) * $src_height; // tinggi menyesuaikan

// buat gambar baru
$img_temp = imagecreatetruecolor($dst_width,$dst_height);
imagecopyresampled($img_temp, $src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);


// Simpan gambar hasil resize
imagejpeg($img_temp, 'thumb_'.$file_gambar); 

// Hapus gambar dari memori komputer
imagedestroy($img_temp);
imagedestroy($src);

echo 'Berhasil...';

?>