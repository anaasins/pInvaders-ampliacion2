<?php
/**
 * Creacion de la clase ia. Ana Asins.
 */
class ia
{
    //Propiedades Fila, columna y naves
  public $mapaCol=4;
  public $mapaFil=3;
  public $numNaves=3;

  //Arrays
  public $navesHumano=[];

  public $navesIA=[];

  //Setters fila, columna y naves
  public function setmapaCol($mapaCol){
    if ($mapaCol<0) {
      $this->mapaCol=0;
    }elseif ($mapaCol>3) {
      $this->mapaCol=3;
    }else {
      $this->mapaCol=$mapaCol;
    }
  }

  public function setmapaFil($mapaFil){
    if ($mapaFil<0) {
      $this->mapaFil=0;
    }elseif ($mapaFil>3) {
      $this->mapaFil=3;
    }else {
      $this->mapaFil=$mapaFil;
    }
  }

  public function setNaveHumana($id, $tipo, $col, $fil){
    $this->navesHumano[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "fil"=>$fil,
      "col"=>$col,
    ];
  }

  public function setNavesIA($navesIA){
    return $this->navesIA = $navesIA;
  }

    public function setNaveIA($id, $tipo, $col, $fil){
      $this->navesIA[]=[
        "id"=>$id,
        "tipo"=>$tipo,
        "fil"=>$fil,
        "col"=>$col,
      ];
    }

    //getters columna, fila y naves
    public function getColumna(){
      return $this->mapaCol;
    }

    public function getFila(){
      return $this->mapaFil;
    }

    public function gatNave(){
      return $this->numNaves;
    }

    public function getNaveHumano(){
      return $this->navesHumano;
    }

    public function getNavesIA(){
      $podemosMover=1;

      foreach ($this->navesIA as $key => &$nave) {
        if ($nave["tipo"]=="tipo1") {

          foreach ($this->navesHumano as $key => $naveH) {
            if (($nave["fil"]-1)==$naveH["fil"] && $nave["col"]==$naveH["col"]) {
              $podemosMover=0;
            }
          }
          if ($podemosMover==1) {
            $nave["fil"]=$nave["fil"]-1;
          }
        }
      }
      return $this->navesIA;
    }

//moviendo las naves de forma aleatoria
  public function randomPos(){
    $this->columna=rand(0,3);
    $this->fila=rand(0,3);
  }
}
 ?>
