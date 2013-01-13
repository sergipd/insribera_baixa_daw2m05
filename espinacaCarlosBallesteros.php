<?php

/**
 * Description of Espinacas
 *
 * @author victor
 */
class EspinacaCarlosBallesteros extends Verdura {

   var $concinada = false;

   function Espinaca() 
   {
       $this->Verdura(true, "Ballesteros");
   }

   function cocinarla() 
   {
       $this->concinada = true;
   }

   function esta_cocinada() 
   {
       return $this->concinada;
   }
   
   function CarlosBallesteros()
   {
       $this->concinada = "Ballesteros";
   }

      function Ricardo()
   {
       $this->concinada = "Ballesteros";
   }
}
