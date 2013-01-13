<?php


/**
 * Description of Espinacas
 *
 * @author mon
 */
class EspinacaJuanRa extends Verdura {

   var $cocinada = false;

   function Espinaca() 
   {

       $this->Verdura(true, "JuanRa");

   }

   function cocinarla() 
   {
       $this->cocinada = true;
   }

   function esta_cocinada() 
   {
       return $this->cocinada;
   }
   function JonathanPrado() {
        $this->cocinada = "Jonathan Prado";
   }
   
   function Vgarcia() {
        $this->cocinada = "Vgarcia";
   }    
   
   function JuanRa() {
        $this->cocinada = "JuanRa";
   }
} 

?>
