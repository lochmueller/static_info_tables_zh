<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') or die();

$additionalFields = [
	'tr_name_en' => 'tr_name_zh'
];
foreach ($additionalFields as $sourceField => $destField) {
	$additionalColumns = [];
	$additionalColumns[$destField] = $GLOBALS['TCA']['static_territories']['columns'][$sourceField];
	$additionalColumns[$destField]['label'] = 'LLL:EXT:static_info_tables_de/Resources/Private/Language/locallang_db.xlf:static_territories_item.' . $destField;
	ExtensionManagementUtility::addTCAcolumns('static_territories', $additionalColumns);
	ExtensionManagementUtility::addToAllTCAtypes('static_territories', $destField, '', 'after:' . $sourceField);
	// Add as search field
	$GLOBALS['TCA']['static_territories']['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);
