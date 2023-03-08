<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact',
        'label' => 'name',
        'label_alt' => 'salutation',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'salutation,name,address,room_number,telephone,letters,',
        'iconfile' => 'EXT:jobcenter/Resources/Public/Icons/tx_jobcenter_domain_model_contact.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '--palette--;LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:palette.language_hidden;language_hidden,
                --palette--;;salutation_name,
                --palette--;;address_roomnumber,
                telephone,
                --palette--;;handicapped_fallback,
                letters,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access',
        ],
    ],
    'palettes' => [
        'language_hidden' => ['showitem' => 'sys_language_uid, l10n_parent, hidden'],
        'salutation_name' => ['showitem' => 'salutation, name'],
        'address_roomnumber' => ['showitem' => 'address, room_number'],
        'handicapped_fallback' => ['showitem' => 'handicapped, is_fallback, self_reliance'],
        'access' => [
            'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple',
                    ],
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_jobcenter_domain_model_contact',
                'foreign_table_where' => 'AND tx_jobcenter_domain_model_contact.pid=###CURRENT_PID### AND tx_jobcenter_domain_model_contact.sys_language_uid IN (-1,0)',
                'showIconTable' => false,
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => '',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
        ],
        'salutation' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.salutation',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'size' => 1,
                'items' => [
                    ['LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.salutation.mr', 0],
                    ['LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.salutation.mrs', 1],
                ],
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'room_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.room_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'telephone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.telephone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'handicapped' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.handicapped',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'self_reliance' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.self_reliance',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'is_fallback' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_contact.is_fallback',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'letters' => [
            'exclude' => true,
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
                    'showAllLocalizationLink' => 1,
                ],
            ],
        ],
    ],
];
