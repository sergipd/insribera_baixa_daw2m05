<?php


/**
 * Description of Espinacas
 *
 * @author professor
 */
class Espinaca extends Verdura {

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
   
} 

?>