<?php

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Static Info Tables (zh)',
    'description'      => 'Chinese (zh) language pack for the Static Info Tables providing localized names for countries, currencies and so on. Dev on: https://github.com/lochmueller/static_info_tables_zh',
    'category'         => 'misc',
    'version'          => '7.0.1',
    'state'            => 'stable',
    'clearcacheonload' => true,
    'author'           => 'Tim Lochmüller',
    'author_email'     => 'tim@fruit-lab.de',
    'author_company'   => '',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.3.99',
            'typo3' => '12.4.0-12.4.99',
            'static_info_tables' => '12.4.0-12.4.99',
        ],
    ],
];
