function hitungKembalian($hargaTotal=110500, $uangbayar=200000){
$hasil = $uangbayar - $hargaTotal;

// cek kembalian uang 50000
if($hasil>=50000){
  $hasil = $hasil - 50000;
  $limapuluh = "1 x 50000";
}else{
  $limapuluh = "";
}

// cek kembalian uang 20000
if($hasil>=20000){
  $duapuluh = "1 x 20000";
  $hasil = $hasil - 20000;
}else{
  $duapuluh = "";
}

// cek kembalian uang 10000
if($hasil>=10000){
  $sepuluh = "1 x 10000";
  $hasil = $hasil - 10000;
}else{
  $sepuluh = "";
}

// cek kembalian uang 10000
if($hasil>=10000){
  $sepuluh = "1 x 10000";
  $hasil = $hasil - 10000;
}else{
  $sepuluh = "";
}

// cek kembalian uang 5000
if($hasil>=5000){
  $lima = "1 x 5000";
  $hasil = $hasil - 5000;
}else{
  $lima = "";
}

// cek kembalian uang sumbangan
if($hasil<5000){
  $sumbangan = $hasil " Disumbangkan";
}else{
  $sumbangan = "";
}

echo $limapuluh."\n".$duapuluh."\n".$sepuluh."\n".$lima."\n".$sumbangan;



}
