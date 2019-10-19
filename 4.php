function hitungParkir($kriteria){
  if($kriteria<3){
    $biaya = 2000;
  }elseif($kriteria=3){
    $biaya = 6000;
  }elseif($kriteria=4){
    $biaya = 7000;
  }elseif($kriteria=5){
    $biaya = 8000;
  }elseif($kriteria=6){
    $biaya = 9000;
  }else{
    $biaya = 10000;
  }
  echo "biaya: ".$biaya; 
}
