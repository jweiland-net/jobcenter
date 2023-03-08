<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Jobcenter',
    'Contact',
    [
        \JWeiland\Jobcenter\Controller\ContactController::class => 'search, list',
    ], // non-cacheable actions
    [
        \JWeiland\Jobcenter\Controller\ContactController::class => 'list',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Jobcenter',
    'EmployerContact',
    [
        \JWeiland\Jobcenter\Controller\EmployerContactController::class => 'search, list',
    ], // non-cacheable actions
    [
        \JWeiland\Jobcenter\Controller\EmployerContactController::class => 'list',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Jobcenter',
    'Service',
    [
        \JWeiland\Jobcenter\Controller\ServiceController::class => 'search, list',
    ], // non-cacheable actions
    [
        \JWeiland\Jobcenter\Controller\ServiceController::class => 'list',
    ]
);
