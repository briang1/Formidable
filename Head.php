<?php

namespace Gregwar\DSD;

/**
 * En-tête du formulaire (<form>)
 *
 * @author Grégoire Passault <g.passault@gmail.com>
 */
class Head
{
    /**
     * Attributs
     */
    private $attributes = array();

    public function push($name, $value)
    {
        $this->set($name, $value);
    }

    public function set($name, $value) 
    {
        $this->attributes[$name] = $value;
    }

    public function getHTML()
    {
        $html = '<form';
        foreach ($this->attributes as $name => $value) {
            $html.= ' '.$name.'="'.$value.'"';
        }
        $html.= '>';

        return $html;
    }

    public function needJs()
    {
        return false;
    }
}