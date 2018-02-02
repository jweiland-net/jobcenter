<?php
if (\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('7.6')) {
    $ttContentLanguageFile = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf';
} else {
    $ttContentLanguageFile = 'LLL:EXT:cms/locallang_ttc.xlf';
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact',
        'label' => 'name',
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
        'iconfile' => 'EXT:jobcenter/Resources/Public/Icons/tx_jobcenter_domain_model_contact.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, salutation, name, address, room_number, telephone, handicapped, letters, is_fallback'
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
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.salutation',
            'config' => [
                'type' => 'select',
                'size' => 1,
                'items' => [
                    ['LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.salutation.mr', 0],
                    ['LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.salutation.mrs', 1]
                ]
            ]
        ],
        'name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'address' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'room_number' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.room_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'telephone' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.telephone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'handicapped' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.handicapped',
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
        'letters' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.letters',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_jobcenter_domain_model_letter',
                'foreign_field' => 'contact',
                'maxitems'      => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ]
            ]
        ],
        'is_fallback' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.is_fallback',
            'config' => [
                'type' => 'check'
            ]
        ]
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, salutation, name, address, room_number, telephone, handicapped, letters, is_fallback,--div--;' . $ttContentLanguageFile . ':tabs.access,starttime, endtime']
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ]
];
