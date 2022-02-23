<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();

return $config->setRules([
        '@PSR12' => true,
        '@PHP81Migration' => true,
        '@Symfony' => true,
        'concat_space' => ['spacing' => 'one'],
        'not_operator_with_successor_space' => true,
    ])
    ->setFinder($finder)
;
