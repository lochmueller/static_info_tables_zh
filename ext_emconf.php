<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_de".
 *
 * Auto generated 24-03-2015 14:46
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title'            => 'Static Info Tables (zh)',
    'description'      => 'Chinese (zh) language pack for the Static Info Tables providing localized names for countries, currencies and so on. Dev on: https://github.com/lochmueller/static_info_tables_zh',
    'category'         => 'misc',
    'version'          => '6.2.0',
    'state'            => 'stable',
    'clearcacheonload' => true,
    'author'           => 'Tim Lochmüller',
    'author_email'     => 'tim@fruit-lab.de',
    'author_company'   => '',
    'constraints'      => array(
        'depends' => array(
            'typo3'              => '6.2.0-7.99.99',
            'static_info_tables' => '6.2.0-0.0.0',
        ),
    ),
);
