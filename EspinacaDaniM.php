<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EspinacaDaniM
 *
 * @author danymr
 */
class EspinacaDaniM extends Verdura
{
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
