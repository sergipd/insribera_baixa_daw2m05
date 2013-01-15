<?php
/**
 * @author mrtnzrcrd <mrtnz.rcrd@gmail.com>
 * @link http://en.wikipedia.org/wiki/Programmer From Wikipedia, the free encyclopedia
 */



 
      class Programmer {
          /**
           *
           * @var $name Description 
           * @var $globalVariableName
           * @
           */
           var $name;        
           var $experience;  
           var $lang;         
           var $education;    

           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }

            /**
            * Devuelve el nombre del Programador.
            *
            * @return String con el nombre del programador
            */
           function get_name() {
                return $this->name;
           }
           
           /**
            * Modifica el nombre del programador.
            * 
            * @access public
            * @param string $newname Nombre del programador
            */
           function set_name($newname) {
                $this->name = $newname;
           }
           
            /**
            * Devuelve la experiencia del Programador.
            *
            * @return String con la experiencia del programador
            */
           function get_experience() {
                return $this->experience;
           }
           
           /**
            * Modifica la experiencia del programador.
            * 
            * @access public
            * @param string $newexperience Experiencia del programador
            */
           function set_experience($newexperience) {
                $this->experience = $newexperience;
           }
           
            /**
            * Devuelve el lenaguaje del Programador.
            *
            * @return String con el lenguaje del programador
            */
           function get_lang() {
                return $this->lang;
           }
           
           /**
            * Modifica el lenguaje del programador.
            * 
            * @access public
            * @param string $newlang Lenguaje del programador
            */
           function set_lang($newlang) {
                $this->lang = $newlang;
           }
           
             /**
            * Devuelve la educacion del Programador.
            *
            * @return String con la educacion del programador
            */
           function get_education() {
                return $this->education;
           }
           
           /**
            * Modifica la educacion del programador.
            * 
            * @access public
            * @param string $neweducation Educacion del programador
            */
           function set_education($neweducation) {
                $this->education = $neweducation;
           }

           /**
            * Imprime toda la informacion del programador.
            */
           function output() {
                echo "Programmer Name: ".$this->name."<br>";
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
 ?>

