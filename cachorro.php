<?php
  class cachorro{
    public $raca;

    public function __construct($raca){
      $this -> raca = $raca;
      echo("Cachorro nasceu \n");
    }
    
    public function latir(){
        echo("AUAU \n");
    }

  }
  $bob = new cachorro("Pudle");
  $bob->latir();
  ?>
