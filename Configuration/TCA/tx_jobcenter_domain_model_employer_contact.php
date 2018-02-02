<?php
if (\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('7.6')) {
    $ttContentLanguageFile = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf';
} else {
    $ttContentLanguageFile = 'LLL:EXT:cms/locallang_ttc.xlf';
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact',
        'label' => 'last_name',
        'label_alt' => 'first_name',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        ],
        'searchFields' => 'salutation,name,address,room_number,telephone,letters,',
        'iconfile' => 'EXT:jobcenter/Resources/Public/Icons/tx_jobcenter_domain_model_employer_contact.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, salutation, first_name, last_name, address, zip, room_number, telephone, email, image, is_fallback'
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => [
            'exclude' => 1,
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0
                    ]
                ],
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,0)',
                'default' => 0
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '255'
            ]
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0'
                    ]
                ]
            ]
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'eval' => 'datetime',
                'default' => 0
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'salutation' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.salutation',
            'config' => [
                'type' => 'select',
                'size' => 1,
                'items' => [
                    [
                        'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.salutation.mr',
                        0
                    ],
                    [
                        'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.salutation.mrs',
                        1
                    ]
                ]
            ]
        ],
        'first_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'last_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.last_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'address' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'zip' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.zip',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_jobcenter_domain_model_zip',
                'foreign_field' => 'employer_contact',
                'minitems' => 0,
                'maxitems' => 99
            ]
        ],
        'room_number' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.room_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'telephone' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.telephone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'email' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'image' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', [
                    'minitems' => 0,
                    'maxitems' => 1
            ]
            )
        ],
        'is_fallback' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.is_fallback',
            'config' => [
                'type' => 'check'
            ]
        ]
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, salutation, first_name, last_name, address, zip, room_number, telephone, email, image, is_fallback,--div--;' . $ttContentLanguageFile . ':tabs.access,starttime, endtime']
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ]
];
