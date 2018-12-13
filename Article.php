<?php
/**
 * Created by PhpStorm.
 * User: edwin
 * Date: 2018-12-09
 * Time: 14:52
 */

/*
 * Class Article
 *
 * 2 variables string -> title
 *                    -> text
 *
 */
class Article
{
    private $_title;
    private  $_text;

    //CONSTRUCTEUR
    function __construct($_title, $_text)
    {
        $this->_title = $_title;
        $this->_text = $_text;
    }

    //SETTER
    public function set_title($_title)
    {
        $this->_title = $_title;
    }

    public function  set_text($_text)
    {
        $this->_text = $_text;
    }

    //GETTER
    public function get_title()
    {
        return $this->_title;
    }

    public function get_text()
    {
        return $this->_text;
    }
}