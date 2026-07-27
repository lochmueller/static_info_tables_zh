<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (HU)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * 2026 Ephraim Härer <ephraim.haerer@renolit.com>, RENOLIT SE
 */

namespace RENOLIT\StaticInfoTablesZh;

use Exception;
use SJBR\StaticInfoTables\Cache\ClassCacheManager;
use SJBR\StaticInfoTables\Utility\DatabaseUpdateUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class ext_update
{
    /**
     * @throws Exception
     */
    public function main(): string
    {
        $content = '';

        // Clear the class cache
        /** @var ClassCacheManager $classCacheManager */
        $classCacheManager = GeneralUtility::makeInstance(ClassCacheManager::class);
        $classCacheManager->reBuild();

        // Update the database
        /** @var DatabaseUpdateUtility $databaseUpdateUtility */
        $databaseUpdateUtility = GeneralUtility::makeInstance(DatabaseUpdateUtility::class);
        $databaseUpdateUtility->doUpdate(Extension::EXTENSION_KEY);

        $updateLanguageLabels = LocalizationUtility::translate('updateLanguageLabels', 'StaticInfoTables');
        $content .= '<p>' . $updateLanguageLabels . ' ' . Extension::EXTENSION_KEY . '</p>';
        return $content;
    }

    public function access(): bool
    {
        return true;
    }
}
