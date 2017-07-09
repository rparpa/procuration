<?php

require_once __DIR__ . '/../vendor/autoload.php';

$f3 = \Base::instance();
$f3->set('UI', realpath(__DIR__ . '/../src/Procuration/view') . '/');

$pdfFiller = new \Procuration\Filler;

$f3->route('GET /', [new \Procuration\Controller\Form, '__invoke']);
$f3->route('POST /procuration', [new \Procuration\Controller\Create, '__invoke']);
$f3->run();