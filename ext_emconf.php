<?php

$EM_CONF['static_info_tables_zh'] = [
    'title' => 'Static Info Tables (zh)',
    'description' => 'Chinese (zh) language pack for the Static Info Tables providing localized names for countries and territories.',
    'version' => '14.3.1',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.3.99',
            'php' => '8.2.0-8.5.99',
            'static_info_tables' => '14.3.0-14.3.99',
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
