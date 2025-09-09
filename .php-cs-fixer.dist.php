<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->exclude('var')
    ->exclude('.docker')
    ->exclude('vendor')
    ->in(__DIR__)
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@PSR12' => true,
        'blank_line_before_statement' => true,
        'encoding' => true,
        'function_typehint_space' => true,
        'lowercase_cast' => true,
        'magic_constant_casing' => true,
        'phpdoc_separation' => true,
        'native_function_casing' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_short_bool_cast' => true,
        'no_spaces_around_offset' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unused_imports' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'object_operator_without_whitespace' => true,
        'phpdoc_indent' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_scalar' => true,
        'phpdoc_single_line_var_spacing' => true,
        'return_type_declaration' => true,
        'short_scalar_cast' => true,
        'single_blank_line_before_namespace' => true,
        'single_quote' => true,
        'space_after_semicolon' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'phpdoc_summary' => false,
        'blank_line_after_opening_tag' => true,
        'concat_space' => ['spacing' => 'one'],
        'array_syntax' => ['syntax' => 'short'],
        'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
        'declare_strict_types' => true,
    ])
    ->setFinder($finder);
