<?php

return [
    'models' => [
        'translation' => Mguinea\Translatable\Models\Translation::class,
    ],

    'table_names' => [
        'translatables' => 'translatables',
        'translations' => 'translations',
    ],

    'column_names' => [
        'model_morph_key' => 'model_id',
    ],

    'locales' => [
        'en', 
        'es'
    ]
];
