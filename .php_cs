<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('somedir')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'full_opening_tag' => false,
        'method_chaining_indentation' => true,
        'multiline_comment_opening_closing' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_order' => true,
        'phpdoc_scalar' => true,
        'trailing_comma_in_multiline_array' => true,
        'whitespace_after_comma_in_array' => true,
        'phpdoc_line_span' => ['property' => 'single']
    ])
    ->setFinder($finder)
;
