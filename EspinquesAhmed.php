<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EspinquesAhmed
 *
 * @author ahmed
 */
class EspinquesAhmed extends Verdura {

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
   
   function rubenCorpas()
   {
       $this->concinada = "Cooorpas";
   }

   function AhmedChtebat()
   {
       $this->concinada = "ahmed chtebat";
   }
}

