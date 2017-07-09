<?php

namespace Procuration\Controller;

use Procuration\Filler;

/**
 * Class Create
 * @package Procuration\Controller
 */
class Create
{
    /**
     * @var \Procuration\Filler
     */
    private $filler;

    public function __construct()
    {
        $this->filler = new Filler;
    }

    public function __invoke()
    {
        $pdf = $this->filler->fill();
        $pdf->send();
    }
}