<?php

$EM_CONF['static_info_tables_zh'] = [
    'title' => 'Static Info Tables (zh)',
    'description' => 'Chinese (zh) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'version' => '13.4.0',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'php' => '8.2.0-8.5.99',
            'static_info_tables' => '13.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'stable',
    'author' => 'Ephraim Härer',
    'author_email' => 'ephraim.haerer@renolit.com',
    'author_company' => 'RENOLIT SE',
    'autoload' => [
        'psr-4' => [
            'RENOLIT\\StaticInfoTablesZh\\' => 'Classes',
        ],
    ],
];
