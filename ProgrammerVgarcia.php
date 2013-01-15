<?php

/**
 * @author Victor Garcia
 * @link http://en.wikipedia.org/wiki/Programmer
 */
      class ProgrammerVgarcia {
          
          /**
           *
           * @var string nombre del programador 
           */
           var $name;  
           
           /**
            *
            * @var int años de experiencia que tiene la persona
            */
           var $experience;
           
           /**
            *
            * @var string lenguaje favorito del programador
            */
           var $lang;   
           
           /**
            *
            * @var string nivel de educacion de la persona 
            */
           var $education;    

           
           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }

           /**
            * devuelve el nombre del programador
            * 
            * @return string nombre del programador
            */
           function get_name() {
                return $this->name;
           }
           
           /**
            * establece un nombre nuevo para el programador
            * 
            * @param string $newname nuevo nombre del programador
            */
           function set_name($newname) {
                $this->name = $newname;
           }
           
           /**
            * devuelve el numero de años de experiencia
            * 
            * @return int años de experiencia del programador
            */
           function get_experience() {
                return $this->experience;
           }
           
           /**
            * establece un nuevo numero de años de experiencia
            * 
            * @param int $newexperience nuevo numero de años de experiencia
            */
           function set_experience($newexperience) {
                $this->experience = $newexperience;
           }
           
           /**
            * devuelve el lenguaje preferido del programador
            * 
            * @return string lenguaje preferido del programador
            */
           function get_lang() {
                return $this->lang;
           }
           
           /**
            * establece un nuevo lenguaje preferido del programador
            * 
            * @param string $newlang nuevo lenguaje preferido
            */
           function set_lang($newlang) {
                $this->lang = $newlang;
           }
           
           /**
            * devuelve el nivel de educacion del programador
            * 
            * @return string nivel de educacion del programador
            */
           function get_education() {
                return $this->education;
           }
           
           /**
            * establece un nuevo nivel de educacion del programdor
            * 
            * @param string $neweducation nuevo nivel de educacion del programador
            */
           function set_education($neweducation) {
                $this->education = $neweducation;
           }

           /**
            * muestra por pantalla los datos introducidos en programmer
            * 
            */
           function output() {
                echo "Programmer Name: ".$this->name."<br>";
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
 ?>
