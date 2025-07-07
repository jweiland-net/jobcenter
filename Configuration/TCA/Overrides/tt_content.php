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
    'ext-jobcenter-icon',
    'Job Center',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.contact.description',
);

ExtensionUtility::registerPlugin(
    'Jobcenter',
    'EmployerContact',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.employerContact.title',
    'ext-jobcenter-icon',
    'Job Center',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.employerContact.description',
);

ExtensionUtility::registerPlugin(
    'Jobcenter',
    'Service',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.service.title',
    'ext-jobcenter-icon',
    'Job Center',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.service.description',
);
