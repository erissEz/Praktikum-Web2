<?php 
class Motor {
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc) {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }
  public function getInfo()
   {
        echo "<hr>Merk: " . $this->merk;
        echo "<br>Bensin: " . $this->bensin;
        echo "<br>TopSpeed: " . $this->topSpeed;
        echo "<br>CC: " . $this->cc;
   }


  public function jalan($jarak) {
    $bensinDibutuhkan = $jarak / 30; // 1 liter bensin untuk 30km
    $this->bensin -= $bensinDibutuhkan;
  }
}
$motor = new Motor("Honda", 10, 120, 150);
echo "Bensin awal: ".$motor->bensin." liter\n"; // output: Bensin awal: 10 liter

$motor->jalan(90);
echo "Bensin setelah jalan 90 km: ".$motor->bensin." liter\n"; // output: Bensin setelah jalan 90 km: 7 liter


$motor->getInfo();


