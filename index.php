<!DOCTYPE html>
<!-- GOAL: Provare a immaginare una classe come quella vista a lezione, definendo le variabili d'ambiente per disegnare un ipotetico prodotto di magazzino;
Definire anche costruttore completo (tutti le variabili che avete creato) + printMe per fare il log, nell'ottica di quanto visto questa mattina a lezione -->
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Magazzino</title>
  </head>
  <body>
    <?php
      class Prodotto{
        // variables
        public $nome, $peso, $larghezza, $altezza, $profondita, $colore;
        public function __construct($nome, $peso, $larghezza, $altezza, $profondita, $colore){
          $this -> nome = $nome;
          $this -> peso = $peso;
          $this -> larghezza = $larghezza;
          $this -> altezza = $altezza;
          $this -> profondita = $profondita;
          $this -> colore = $colore;
        }

        // functions
        public function getName(){
          return $this -> nome;
        }
        public function getWeight(){
          return $this -> peso;
        }
        public function getHeight(){
          return $this -> altezza;
        }
        public function getWidth(){
          return $this -> larghezza;
        }
        public function getDepth(){
          return $this -> profondita;
        }
        public function getColor(){
          return $this -> colore;
        }
        // functions that do calculations..
        public function getSize(){
          return $this -> larghezza * $this -> profondita;
        }
        public function getVolume(){
          return $this -> larghezza * $this -> profondita * $this -> altezza;
        }
        // functions that print something..
        public function printSize(){
          echo 'La superficie che occupa il prodotto è di: ' . $this -> larghezza * $this -> profondita . "cm^2 <br>";
        }
        public function printVolume(){
          echo 'Il volume del prodotto è di: ' . $this -> getVolume() . 'cm^3 <br>';
        }
        public function printColor(){
          echo 'Il colore del prodotto è: ' . $this -> getColor() . ". <br>";
        }
        public function printAllInfo(){
          echo 'Prodotto scelto: ' . $this -> nome
             . '<br> Peso: ' . $this -> peso
             . 'kg<br>Larghezza: ' . $this -> larghezza
             . 'cm <br>Altezza: ' . $this -> altezza
             . 'cm <br>Profondità: ' . $this -> profondita
             . 'cm <br> Colore scelto: ' . $this -> colore
             . '<br> Ha una superficie di: ' . $this -> getSize() . "cm^2"
             . '<br> Ha un volume di: ' . $this -> getVolume() . "cm^3 <br>";
        }
      }

      // exec
      $prodotto1 = new Prodotto('Pesetto da 5kg',5,30,7,10,"Blue");
      $prodotto1 -> printAllInfo();
      echo '<br>--------------------------------------<br><br>';
      $prodotto2 = new Prodotto('Tastiera PC',0.5,40,2.5,14, "Black");
      $prodotto2 -> printAllInfo();


    ?>
  </body>
</html>
