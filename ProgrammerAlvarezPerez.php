<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgrammerAlvarezPerez
 *
 * @author victor
 * @link http://en.wikipedia.org/wiki/Programmer description
 * 
 */
class ProgrammerAlvarezPerez
{
    /**
     *
     * @var string guardarem el nom
     */
    var $name;
    /**
     *
     * @var integer anys d'esperiencia
     */
    var $experience;
    /**
     *
     * @var string guardaremos los lenguajes de programacion
     */
    var $lang;
    /**
     *
     * @var int guardarem els estudis
     */
    var $education;

    /**
     * 
     * @param string $name asignamos el nombre
     * @param int $experience la experiencia
     * @param string $lang los lenguajes
     * @param string $education y la eduacicion
     */
    function Programmer($name, $experience, $lang, $education)
    {
        $this->name = $name;
        $this->experience = $experience;
        $this->lang = $lang;
        $this->education = $education;
    }
    
    /**
     * 
     * @return string devuelve el nombre
     */

    function get_name()
    {
        return $this->name;
    }
    
    /**
     * 
     * @param string $newname asignamos el nombre
     */

    function set_name($newname)
    {
        $this->name = $newname;
    }

    /**
     * 
     * @return int devuelve la experiencia
     */
    
    function get_experience()
    {
        return $this->experience;
    }
    
    /**
     * 
     * @param int $newexperience asignamos la experiencia
     */
    
    function set_experience($newexperience)
    {
        $this->experience = $newexperience;
    }

    /**
     * 
     * @return string devuelve los lenguajes
     */
    
    function get_lang()
    {
        return $this->lang;
    }

    /**
     * 
     * @param string $newlang asignamos los lenguajes
     */
    
    function set_lang($newlang)
    {
        $this->lang = $newlang;
    }

    /**
     * 
     * @return string retorna los estudios
     */
    
    function get_education()
    {
        return $this->education;
    }
    
    /**
     * 
     * @param string $neweducation asigna los estudios
     */

    function set_education($neweducation)
    {
        $this->education = $neweducation;
    }
    
    /**
     * Mostramos por pantalla el contenido de las variables.
     */

    function output()
    {
        echo "Programmer Name: " . $this->name . "<br>";
        echo $this->name . " has " . $this->experience . " years of programming experience.<br>";
        echo $this->lang . " is " . $this->name . "'s favorite programming language.<br>";
        echo $this->name . " holds the degree: " . $this->education . "<br><br>";
    }

}