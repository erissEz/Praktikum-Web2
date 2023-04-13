<?php
class Hero{
    /*accses modifier oop pada php ada 3:
    *1. public
    *2. private
    *3. protected
    */
    //atribut/property
   public $nama;
   public $health;
   public $damage;
   public $level = 1;

   //contructor method yang jalan otomatiis saat object dibuat
   public function __construct($nama, $health, $damage)
   {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }

   public function getInfo()
   {
        echo "<hr>Nama: " . $this->nama;
        echo "<br>Hp: " . $this->health;
        echo "<br>Damage: " . $this->damage;
        echo "<br>Level: " . $this->level;
   }

   public function levelUp(){
        $this->level = $this->level +1;
   }

   //method untuk menyerang: kurangi hp target berdasarkan damage dari penyerang
   public function attack($target){
        $target->health = $target->health - $this->damage;

   }

}

//membuat objek/instansiasi
$hero1 = new Hero("Alucard", 3200, 250);
$hero2 = new Hero("Franco", 5000, 50);


$hero1->levelUp();
$hero1->levelUp();
$hero1->levelUp();

$hero1->attack($hero2);

$hero1->getInfo();
$hero2->getInfo();