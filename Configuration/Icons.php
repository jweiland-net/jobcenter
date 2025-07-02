<?php

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'ext-jobcenter-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:jobcenter/Resources/Public/Icons/Extension.svg'
    ],
    'ext-jobcenter-contact-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:jobcenter/Resources/Public/Icons/tx_jobcenter_domain_model_contact.svg'
    ],
    'ext-jobcenter-employercontact-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:jobcenter/Resources/Public/Icons/tx_jobcenter_domain_model_employer_contact.svg'
    ],
    'ext-jobcenter-letter-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:jobcenter/Resources/Public/Icons/tx_jobcenter_domain_model_letter.svg'
    ],
    'ext-jobcenter-zip-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:jobcenter/Resources/Public/Icons/tx_jobcenter_domain_model_zip.svg'
    ],
];
