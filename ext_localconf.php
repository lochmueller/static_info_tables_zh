<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(function(string $extensionKey)
{
    ExtensionManagementUtility::addTypoScriptSetup(
        '@import "EXT:static_info_tables_zh/Configuration/TypoScript/Extbase/setup.typoscript"'
    );
}, 'static_info_tables_zh');
