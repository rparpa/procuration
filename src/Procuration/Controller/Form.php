<?php


namespace Procuration\Controller;

/**
 * Class Form
 * @package Procuration\Controller
 */
class Form
{
    public function __invoke()
    {
        echo \Template::instance()->render('form.htm');
    }
}