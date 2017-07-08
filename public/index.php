<?php

require_once __DIR__ . '/../vendor/autoload.php';

$f3 = \Base::instance();

$pdfFiller = new \Procuration\ProcurationFiller;

$f3->route('GET /',
    function() use ($pdfFiller) {
        $pdf = $pdfFiller->fill();
        $pdf->send();
    }
);
$f3->run();