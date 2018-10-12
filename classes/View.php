<?php

abstract class View
{
    //private members
    protected $title = "Home";
    protected $css = [];
    protected $js = [];

    /**
     * View constructor.
     * @param null $title
     */
    function __construct($title=NULL) {
        if($title) {
            $this->title = $title;
        }
    }

    /**
     * Add JavaScript
     * @param $fileName
     */
    function addJs($fileName) {
        $this->js[] = $fileName;
    }

    /**
     * Set title
     * @param $title
     */
    function setTitle($title){
        $this->title = $title;
    }

    /**
     * Add Stylesheet.
     * @param $fileName
     */
    function addCss($fileName) {
        $this->css[] = $fileName;
    }

    /**
     * Dump Page.
     * @return mixed
     */
    abstract function dumpView();

}