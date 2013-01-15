<?php
/**
 * @author Corpas
 * 
 * @link http://en.wikipedia.org/wiki/Programmer
 */


      class Programmer {
           var $name;/**
 * @var indica el nom
 */        
           var $experience;  
           /**
 * @var l'experiencia
 */
           var $lang;     
           /**
 * @var el lenguatge
 */
           var $education; 
           /**
 * @var Indica els estudis
 */

           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }
                /**
 * @var boolean introduce nombre
 */
           function get_name() {
                return $this->name;
                /**
 * @var boolean pon nombre
 */
           }
           function set_name($newname) {
                $this->name = $newname;
                /**
 * @var boolean pon experiencia
 */
           }
           function get_experience() {
                return $this->experience;
                /**
 * @var boolean pide experiencia
 */
           }
           function set_experience($newexperience) {
                $this->experience = $newexperience;
                /**
 * @var boolean pon experiencia
 */
           }
           function get_lang() {
                return $this->lang;
                /**
 * @var boolean pide lenguaje
 */
           }
           function set_lang($newlang) {
                $this->lang = $newlang;
                
                /**
 * @var boolean introduce
 */
           }
           function get_education() {
                return $this->education;
           }
           /**
 * @param boolean
 */
           function set_education($neweducation) {
                $this->education = $neweducation;
           }

/**
 * @param  nos muestra la salida de todos los atributos del programador.
 */
           function output() {
                echo "Programmer Name: ".$this->name."<br>";
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
 ?>

