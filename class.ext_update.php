<?php

use SJBR\StaticInfoTables\Cache\ClassCacheManager;
use SJBR\StaticInfoTables\Utility\DatabaseUpdateUtility;

class ext_update {

	/**
	 * Main function, returning the HTML content
	 *
	 * @return string HTML
	 */
	function main() {
		$content = '';
		$objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');

		/** @var ClassCacheManager $classCacheManager */
		$classCacheManager = $objectManager->get('SJBR\\StaticInfoTables\\Cache\\ClassCacheManager');
		$classCacheManager->reBuild();

		/** @var DatabaseUpdateUtility $databaseUpdateUtility */
		$databaseUpdateUtility = $objectManager->get('SJBR\\StaticInfoTables\\Utility\\DatabaseUpdateUtility');
		$databaseUpdateUtility->doUpdate('static_info_tables_zh');

		$content .= '<p>' . \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('updateLanguageLabels', 'StaticInfoTables', ['static_info_tables_zh']) . '.</p>';
		return $content;
	}

	function access() {
		return TRUE;
	}
}
