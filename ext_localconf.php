<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.jobcenter',
    'Contact',
    [
        'Contact' => 'search, list'
    ], // non-cacheable actions
    [
        'Contact' => 'list'
    ]
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.jobcenter',
    'EmployerContact',
    [
        'EmployerContact' => 'search, list'
    ], // non-cacheable actions
    [
        'EmployerContact' => 'list'
    ]
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.jobcenter',
    'Service',
    [
        'Service' => 'search, list'
    ], // non-cacheable actions
    [
        'Service' => 'list'
    ]
);
