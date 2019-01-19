<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'blank_line_before_statement' => false,
        'array_syntax' => ['syntax' => 'short'],
        'PedroTroller/line_break_between_method_arguments' => [ "max-args" => 4, "max-length" => 100 ],
    ])
    ->registerCustomFixers(new PedroTroller\CS\Fixer\Fixers())
    ->setFinder($finder)
;
