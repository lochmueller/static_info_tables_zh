<?php
declare(strict_types=1);

defined('TYPO3') || die;

/*
 * This file is part of the "Static Info Tables (ZH)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * 2026 Ephraim Härer <ephraim.haerer@renolit.com>, RENOLIT SE
 */

use RENOLIT\StaticInfoTablesZh\Provider\TcaProvider;

call_user_func(
    function ($additionalFields, $dataSetName) {
        TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['tr_name_en' => 'tr_name_zh'],
    'static_territories'
);
