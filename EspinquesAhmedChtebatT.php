<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EspinquesAhmedChtebatT
 *
 * @author ahmed
 */
class EspinquesAhmedChtebatT extends Verdura {

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
function AhmedChtebat()
   {
    $this->concinada= "chtebat";
    
    }
   
 }

?>

