<?php

/**
 * Description of ProgrammerMahedero
 *
 * @author danymr
 * @link http://en.wikipedia.org/wiki/Programmer
 */
class ProgrammerMahedero
{
           /**
            *
            * @var string guarda el nombre del objeto
            * @var string guarda la experiencia del objeto
            * @var string guarda el lenguaje/idioma del objeto
            * @var string guarda la educacion del objeto
            */
           var $name;        
           var $experience;  
           var $lang;         
           var $education;    

           /**
            * 
            * @param string $name
            * @param string $experience
            * @param string $lang
            * @param string $education
            */
           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }

           /**
            * 
            * @return string devuelve el nombre
            */
           function get_name() {
                return $this->name;
           }
           
           /**
            * 
            * @param string $newname el parametro que recibe será el nuevo nombre
            */
           function set_name($newname) {
                $this->name = $newname;
           }
           /**
            * 
            * @return string devuelve la experiencia
            */
           function get_experience() {
                return $this->experience;
           }
           /**
            * 
            * @param string $newexperience
            */
           function set_experience($newexperience) {
                $this->experience = $newexperience;
           }
           /**
            * 
            * @return string devuelve el lenguaje
            */
           function get_lang() {
                return $this->lang;
           }
           /**
            * 
            * @param string $newlang nuevo lenguaje
            */
           function set_lang($newlang) {
                $this->lang = $newlang;
           }
           /**
            * 
            * @return string devuelve la educacion
            */
           function get_education() {
                return $this->education;
           }
           /**
            * 
            * @param string $neweducation
            */
           function set_education($neweducation) {
                $this->education = $neweducation;
           }

           /**
            * Imprimimos por pantalla el nombre del programador
            * los años que tiene de experiencia programando
            * su lenguaje favorito
            * y la educación que ha tenido
            */
           function output() {
                echo "Programmer Name: ".$this->name."<br>";
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
 ?>
