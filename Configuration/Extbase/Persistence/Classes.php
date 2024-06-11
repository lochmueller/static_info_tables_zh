<?php

declare(strict_types=1);

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameZh' => [
                'fieldName' => 'cn_short_zh',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameZh' => [
                'fieldName' => 'tr_name_zh',
            ],
        ],
    ],
];
