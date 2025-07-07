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

use JWeiland\Jobcenter\Controller\ContactController;
use JWeiland\Jobcenter\Controller\EmployerContactController;
use JWeiland\Jobcenter\Controller\ServiceController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'Jobcenter',
    'Contact',
    [
        ContactController::class => 'search, list',
    ],
    // non-cacheable actions
    [
        ContactController::class => 'list',
    ],
);

ExtensionUtility::configurePlugin(
    'Jobcenter',
    'EmployerContact',
    [
        EmployerContactController::class => 'search, list',
    ],
    // non-cacheable actions
    [
        EmployerContactController::class => 'list',
    ],
);

ExtensionUtility::configurePlugin(
    'Jobcenter',
    'Service',
    [
        ServiceController::class => 'search, list',
    ],
    // non-cacheable actions
    [
        ServiceController::class => 'list',
    ],
);
