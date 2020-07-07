<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'JWeiland.jobcenter',
    'Contact',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.contact.title'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'JWeiland.jobcenter',
    'EmployerContact',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.employerContact.title'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'JWeiland.jobcenter',
    'Service',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.service.title'
);
