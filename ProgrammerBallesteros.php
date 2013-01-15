<?php
/**
 * @author cballesteros1989
 * @link http://en.wikipedia.org/wiki/Programmer
 *
 */

      class Programmer {
          
          /**
           *
           * @var string name guarda nombre
           * @var string experience guarda experiencia
           * @var string lang guarda lenguaje
           * @var string education guarda la educación
           */
           var $name;        
           var $experience;  
           var $lang;         
           var $education;    

           /**
            * 
            * @param string $name recibe nombre
            * @param string $experience recibe experiencia
            * @param string $lang recibe lenguaje
            * @param type $education recibe educación
            */
           
           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }

           /**
            * 
            * @return string nombre
            */
           function get_name() {
                return $this->name;
           }
           /**
            * 
            * @param string $newname inserta nombre
            */
           function set_name($newname) {
                $this->name = $newname;
           }
           /**
            * 
            * @return string devuelve experiencia
            */
           function get_experience() {
                return $this->experience;
           }
           /**
            * 
            * @param string $newexperience establece la experiencia
            */
           function set_experience($newexperience) {
                $this->experience = $newexperience;
           }
           /**
            * 
            * @return string $lang devuelve lenguaje
            */
           function get_lang() {
                return $this->lang;
           }
           /**
            * 
            * @param string $newlang establece lenguaje
            */
           function set_lang($newlang) {
                $this->lang = $newlang;
           }
           /**
            * 
            * @return string $education devuelve educacion
            */
           function get_education() {
                return $this->education;
           }
           /**
            * 
            * @param string $neweducation establece educación
            */
           function set_education($neweducation) {
                $this->education = $neweducation;
           }

           /**
            * Funcion que imprime por pantalla.
            * Imprime Nombre Programador
            * Imrpime los años de experiencia un programador
            * Imprime lenguaje favorito de un programador
            * Imprime educación de un programador
            */
           function output() {
                echo "Programmer Name: ".$this->name."<br>";
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
 ?>

