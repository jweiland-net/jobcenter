<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/maps2.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Service;

use TYPO3\CMS\Backend\Utility\BackendUtility;

class PageTitleService
{
    public function getTitle(?int $pid): string
    {
        if (empty($pid)) {
            return '';
        }

        $record = BackendUtility::getRecord('pages', $pid, 'title');

        return $record['title'] ?? '';
    }
}
