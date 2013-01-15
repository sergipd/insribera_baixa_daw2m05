<?php

/**
 * 
 * @author Jonathan Prado
 * @link http://en.wikipedia.org/wiki/Programmer Enlace con wikipedia
 * 
 */
      class Programmer {
          /**
           *
           * @var string Guarda el nombre. 
           */
           var $name;    
           
           /**
            *
            * @var string Guarda la experiencia.
            */
           var $experience;  
           
           /**
            *
            * @var string Guarda el idioma.
            */
           var $lang;    
           
           /**
            *
            * @var string Guarda la educacion.
            */
           var $education;    
           
           /**
            * 
            * @param string $name Nombre
            * @param string $experience Experiencia
            * @param string $lang Idioma
            * @param string $education Educacion
            */
           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }
            
           /**
            * 
            * @return string Devuelve el nombre.
            */
           function get_name() {
                return $this->name;
           }
           
           /**
            * 
            * @param string $newname El nuevo nombre.
            */
           function set_name($newname) {
                $this->name = $newname;
           }
           
           /**
            * 
            * @return string Muestra la experiencia.
            */
           function get_experience() {
                return $this->experience;
           }
           
           /**
            * 
            * @param string $newexperience Nueva experiencia.
            */
           function set_experience($newexperience) {
                $this->experience = $newexperience;
           }
           
           /**
            * 
            * @return string Devuelve el idioma.
            */
           function get_lang() {
                return $this->lang;
           }
           
           /**
            * 
            * @param string $newlang Nuevo idioma.
            */
           function set_lang($newlang) {
                $this->lang = $newlang;
           }
           
           /**
            * 
            * @return string Devuelve la educacion.
            */
           function get_education() {
                return $this->education;
           }
           
           /**
            * 
            * @param string $neweducation Nueva educacion.
            */
           function set_education($neweducation) {
                $this->education = $neweducation;
           }

           function output() {
               //Muestra el nombre del programador.
                echo "Programmer Name: ".$this->name."<br>";
                //Muestra el nombre del programador y los años que lleva programando. 
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                //Muestra la lengua en que programa cierto programador.
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                //Muestra el nombre del programador y su educacion.
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
 ?>

