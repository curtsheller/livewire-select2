<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Select2 Configuration
    |--------------------------------------------------------------------------
    |
    | These options will be applied to all Select2 instances created by the
    | livewire-select2 component. You can override individual options by
    | passing them as attributes to the component.
    |
    */

    'theme' => 'tailwindcss-4',

    'placeholder' => 'Select an option...',

    'tags' => true,

    'token_separators' => [',', ' '],

    'allow_clear' => true,

    'close_on_select' => true,

    'width' => '100%',

    /*
    |--------------------------------------------------------------------------
    | Advanced Options
    |--------------------------------------------------------------------------
    |
    | Additional Select2 configuration options that can be customized.
    | These are passed directly to the Select2 JavaScript initialization.
    |
    */

    'dropdown_auto_width' => false,

    'escape_markup' => true,

    'minimum_input_length' => 0,

    'minimum_results_for_search' => 0,

    'maximum_selection_length' => 0, // 0 = unlimited

    /*
    |--------------------------------------------------------------------------
    | Custom CSS Classes
    |--------------------------------------------------------------------------
    |
    | Additional CSS classes to apply to the Select2 container.
    |
    */

    'container_css_class' => '',

    'dropdown_css_class' => '',

    /*
    |--------------------------------------------------------------------------
    | Language Settings
    |--------------------------------------------------------------------------
    |
    | Localization settings for Select2 text and messages.
    |
    */

    'language' => [
        'error_loading' => 'The results could not be loaded.',
        'input_too_long' => 'Please delete {overChars} character(s).',
        'input_too_short' => 'Please enter {minChars} or more characters.',
        'loading_more' => 'Loading more results…',
        'maximum_selected' => 'You can only select {maximum} item(s).',
        'no_results' => 'No results found',
        'searching' => 'Searching…',
        'remove_all_items' => 'Remove all items',
    ],
];