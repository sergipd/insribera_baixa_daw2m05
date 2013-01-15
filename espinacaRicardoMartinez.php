<?php


/**
 * Description of Espinacas
 *
 * @author professor
 */
class espinacaRicardoMartinez extends Verdura {

   var $concinada = false;

   function espinacaRicardoMartinez() 
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