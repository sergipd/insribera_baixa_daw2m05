<?php


/**
 * Description of Espinacas
 *
 * @author professor
 */
class Espinaca extends Verdura {

   var $concinada = false;
   var $_corpas;
   
   function Espinaca() 
   {
       $this->Verdura(true, "Dani_Mahedero");
   }

   function cocinarla() 
   {
       $this->concinada = true;
   }

   function esta_cocinada() 
   {
       return $this->concinada;
   }
   
   function DaniM() 
   {
       return $this->concinada;
   }
   
 
} 

?>