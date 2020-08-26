<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') or die();

$additionalFields = [
    'cn_short_en' => 'cn_short_zh'
];
foreach ($additionalFields as $sourceField => $destField) {
    $additionalColumns = [];
    $additionalColumns[$destField] = $GLOBALS['TCA']['static_countries']['columns'][$sourceField];
    $additionalColumns[$destField]['label'] = 'LLL:EXT:static_info_tables_zh/Resources/Private/Language/locallang_db.xlf:static_countries_item.' . $destField;
    ExtensionManagementUtility::addTCAcolumns('static_countries', $additionalColumns);
    ExtensionManagementUtility::addToAllTCAtypes('static_countries', $destField, '', 'after:' . $sourceField);
    // Add as search field
    $GLOBALS['TCA']['static_countries']['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);
