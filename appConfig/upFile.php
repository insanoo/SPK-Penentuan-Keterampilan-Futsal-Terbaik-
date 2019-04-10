<?php
function upPetani($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/petani_img/height/";
  $upDir_m = "../../../gambar/petani_img/medium/";
  $upDir_s = "../../../gambar/petani_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}
function upPenyuluh($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/penyuluh_img/height/";
  $upDir_m = "../../../gambar/penyuluh_img/medium/";
  $upDir_s = "../../../gambar/penyuluh_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}
function upKetua($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/ketua_img/height/";
  $upDir_m = "../../../gambar/ketua_img/medium/";
  $upDir_s = "../../../gambar/ketua_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}
function upAgen($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/agen_img/height/";
  $upDir_m = "../../../gambar/agen_img/medium/";
  $upDir_s = "../../../gambar/agen_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}
function upPengguna($upImage_name){
  //direktori gambar
  $upDir_h = "../../gambar/pengguna_img/height/";
  $upDir_m = "../../gambar/pengguna_img/medium/";
  $upDir_s = "../../gambar/pengguna_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upPelanggan($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/pelanggan_img/height/";
  $upDir_m = "../../../gambar/pelanggan_img/medium/";
  $upDir_s = "../../../gambar/pelanggan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upProduk($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/produk_img/height/";
  $upDir_m = "../../../gambar/produk_img/medium/";
  $upDir_s = "../../../gambar/produk_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarSidemenu($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/sidemenu_img/height/";
  $upDir_m = "../../../gambar/sidemenu_img/medium/";
  $upDir_s = "../../../gambar/sidemenu_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upJasa($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/jasapengiriman_img/height/";
  $upDir_m = "../../../gambar/jasapengiriman_img/medium/";
  $upDir_s = "../../../gambar/jasapengiriman_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upMetode($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/metode_img/height/";
  $upDir_m = "../../../gambar/metode_img/medium/";
  $upDir_s = "../../../gambar/metode_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upKatering($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/katering_img/height/";
  $upDir_m = "../../../gambar/katering_img/medium/";
  $upDir_s = "../../../gambar/katering_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upProdukUmum($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/umum_img/height/";
  $upDir_m = "../../../gambar/umum_img/medium/";
  $upDir_s = "../../../gambar/umum_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarSlider($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/slider_img/height/";
  $upDir_m = "../../../gambar/slider_img/medium/";
  $upDir_s = "../../../gambar/slider_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarIklan($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/iklan_img/height/";
  $upDir_m = "../../../gambar/iklan_img/medium/";
  $upDir_s = "../../../gambar/iklan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarBrand($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/brand_img/height/";
  $upDir_m = "../../../gambar/brand_img/medium/";
  $upDir_s = "../../../gambar/brand_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarKategori($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/kategori_img/height/";
  $upDir_m = "../../../gambar/kategori_img/medium/";
  $upDir_s = "../../../gambar/kategori_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}
?>
