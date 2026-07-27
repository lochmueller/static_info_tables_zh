<?php

declare(strict_types=1);

use SJBR\StaticInfoTables\Domain\Model\Country;
use SJBR\StaticInfoTables\Domain\Model\Territory;

return [
    Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameZh' => [
                'fieldName' => 'cn_short_zh',
            ],
        ],
    ],
    Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameZh' => [
                'fieldName' => 'tr_name_zh',
            ],
        ],
    ],
];
