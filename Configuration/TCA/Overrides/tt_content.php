<?php

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

if (!defined('TYPO3')) {
    die('Access denied.');
}

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::registerPlugin(
    'Jobcenter',
    'Contact',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.contact.title',
);

ExtensionUtility::registerPlugin(
    'Jobcenter',
    'EmployerContact',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.employerContact.title',
);

ExtensionUtility::registerPlugin(
    'Jobcenter',
    'Service',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.service.title',
);
