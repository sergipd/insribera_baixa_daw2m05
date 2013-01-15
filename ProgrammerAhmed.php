<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Programmer
 *
 * @author starmed
 * @link hhtp://en.wikipedia.org/wiki/programmer article de wikipedia
 * 
 */
class ProgrammerAhmed {
            /**
             *
             * @var string $name nombre de programador
             */
           var $name; 
           /**
            *
            * @var string $experience experiencia de programador
            */
           var $experience;
           /**
            *
            * @var string $lang idiomas
            */
           var $lang; 
           /**
            *
            * @var string $education nivel de programador
            */
           var $education;    

           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }


           function get_name() {
               /**
                * @return string getname
                */
                return $this->name;
           }
           /**
            * 
            * @param string $newname
            */
           function set_name($newname) {
               
                $this->name = $newname;
           }
           function get_experience() {
               /**
                * @return string experiencia
                */
                return $this->experience;
           }
           /**
            * 
            * @param string $newexperience
            */
           function set_experience($newexperience) {
                $this->experience = $newexperience;
           }
           function get_lang() {
               /**
                * @return string getlang
                */
                return $this->lang;
           }
           /**
            * 
            * @param string $newlang
            */
           function set_lang($newlang) {
                $this->lang = $newlang;
           }
           function get_education() {
               /**
                * @return string geteducation
                */
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
            * esta funcion se imprime los datos del programador
            */
           function output() {
                echo "Programmer Name: ".$this->name."<br>";
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
 

