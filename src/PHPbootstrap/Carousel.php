<?php

/*
 * File: Carousel.php
 * File Created: Wednesday, 14th October 2020 10:35:29 am
 * Author: Oscar Lin (oscar@des13.com)
 * Copyright (c) 2020 esangtek
 */

namespace PHPbootstrap;

class Carousel
{
    protected $isInitialized = false;
    protected $idPrefix = '';
    protected $items = array();

    protected $showIndicators = true;
    protected $showControl = true;
    protected $carouselInterval = null;

    public function __construct()
    {
    }

    public function init($idPrefix)
    {
        if ($this->isInitialized()) {
            throw new BadMethodCallException('This object from class ' . __CLASS__ . ' is already initialized.');
        }
        $this->isInitialized = true;

        $this->idPrefix = $idPrefix;
        return $this;
    }

    public function isInitialized()
    {
        return $this->isInitialized;
        return $this;
    }

    public function showIndicators($setIndicators)
    {
        $this->showIndicators = $setIndicators;
        return $this;
    }

    public function showControl($setControl)
    {
        $this->showControl = $setControl;
        return $this;
    }

    public function setCarouselInterval($setCarouselInterval)
    {
        $this->carouselInterval = $setCarouselInterval;
        return $this;
    }

    public function add($img, $title = null, $content = null)
    {
        array_push($this->items, array('img' => $img, 'title' => $title, 'content' => $content));
        return $this;
    }

    public function display()
    {
        $smarty = new \Smarty;
        $smarty->assign('idPrefix', $this->idPrefix);
        $smarty->assign('showIndicators', $this->showIndicators);
        $smarty->assign('showControl', $this->showControl);
        $smarty->assign('carouselInterval', $this->carouselInterval);
        $smarty->assign('items', $this->items);

        $smarty->display(__DIR__ . './../templates/bootstrap/carousel.tpl');
        return $this;
    }
}
