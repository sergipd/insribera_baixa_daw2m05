<?php

/**
 * Description of Espinacas
 *
 * @author victor
 */
class EspinacaVictorAlvarez extends Verdura {

   var $concinada = false;

   function Espinaca() 
   {
       $this->Verdura(true, "verde");
   }

   function cocinarla() 
   {
       $this->concinada = true;
   }

   function esta_cocinada() 
   {
       return $this->concinada;
   }
   
   function victorAlvarez()
   {
       $this->concinada = "Alvarez";
   }

}
