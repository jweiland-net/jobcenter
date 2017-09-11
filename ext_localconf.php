<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.' . $_EXTKEY,
    'Contact',
    array(
        'Contact' => 'search, list',
    ),
    // non-cacheable actions
    array(
        'Contact' => 'list',
    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.' . $_EXTKEY,
    'EmployerContact',
    array(
        'EmployerContact' => 'search, list',
    ),
    // non-cacheable actions
    array(
        'EmployerContact' => 'list',
    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.' . $_EXTKEY,
    'Service',
    array(
        'Service' => 'search, list',
    ),
    // non-cacheable actions
    array(
        'Service' => 'list',
    )
);
