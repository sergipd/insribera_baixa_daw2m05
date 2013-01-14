<?php


class espinguestamayo extends Verdura {

   var $cocinada = false;

   function Espinaca()
   {

       $this->Verdura(true, "vtamayo");

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
   
    function vtamayo() {
        $this->cocinada = "vtamayo";
   }
}