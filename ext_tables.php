<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'JWeiland.' . $_EXTKEY,
    'Contact',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.contact.title'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'JWeiland.' . $_EXTKEY,
    'EmployerContact',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.employerContact.title'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'JWeiland.' . $_EXTKEY,
    'Service',
    'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:plugin.service.title'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Jobcenter');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_jobcenter_domain_model_contact',
    'EXT:jobcenter/Resources/Private/Language/locallang_csh_tx_jobcenter_domain_model_contact.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobcenter_domain_model_contact');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_jobcenter_domain_model_employer_contact',
    'EXT:jobcenter/Resources/Private/Language/locallang_csh_tx_jobcenter_domain_model_employer_contact.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_jobcenter_domain_model_employer_contact'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_jobcenter_domain_model_letter',
    'EXT:jobcenter/Resources/Private/Language/locallang_csh_tx_jobcenter_domain_model_letter.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobcenter_domain_model_letter');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_jobcenter_domain_model_zip',
    'EXT:jobcenter/Resources/Private/Language/locallang_csh_tx_jobcenter_domain_model_zip.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobcenter_domain_model_zip');
