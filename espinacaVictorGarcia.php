<?php


/**
 * Description of Espinacas
 *
 * @author victor garcia
 */
class EspinacaVictorGarcia extends Verdura {

   var $concinada = false;

   function Espinaca() 
   {
       $this->Verdura(true, "Vgarcia");
   }

   function cocinarla() 
   {
       $this->concinada = true;
   }

   function esta_cocinada() 
   {
       return $this->concinada;
   }
   function JonathanPrado() {
        $this->cocinada = "Jonathan Prado";
   }
   
   function Vgarcia() {
        $this->cocinada = "Vgarcia";
   }
} 

?>
