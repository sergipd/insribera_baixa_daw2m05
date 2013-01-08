<?php



class Verdura {
   var $comestible;
   var $color;
   
   function Verdura($comestible, $color="verde") 
   {
       $this->comestible = $comestible;
       $this->color = $color;
   }

   
   function es_comestible() 
   {
       return $this->comestible;
   }

   function que_color() 
   {
       return $this->color;
   }
   
} 

?>