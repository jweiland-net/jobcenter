<?php
return array(
    'ctrl' => array(
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
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        ),
        'searchFields' => 'salutation,name,address,room_number,telephone,letters,',
        'iconfile' => 'EXT:jobcenter/Resources/Public/Icons/tx_jobcenter_domain_model_employer_contact.gif'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, salutation, first_name, last_name, address, zip, room_number, telephone, email, image, is_fallback'
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                )
            )
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0)
                ),
                'foreign_table' => 'tx_jobcenter_domain_model_employer_contact',
                'foreign_table_where' => 'AND tx_jobcenter_domain_model_employer_contact.pid=###CURRENT_PID### AND tx_jobcenter_domain_model_employer_contact.sys_language_uid IN (-1,0)'
            )
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check'
            )
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                )
            )
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                )
            )
        ),
        'salutation' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.salutation',
            'config' => array(
                'type' => 'select',
                'size' => 1,
                'items' => array(
                    array(
                        'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.salutation.mr',
                        0
                    ),
                    array(
                        'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.salutation.mrs',
                        1
                    )
                )
            )
        ),
        'first_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.first_name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            )
        ),
        'last_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.last_name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            )
        ),
        'address' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.address',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            )
        ),
        'zip' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.zip',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_jobcenter_domain_model_zip',
                'foreign_field' => 'employer_contact',
                'minitems' => 0,
                'maxitems' => 99
            )
        ),
        'room_number' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.room_number',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            )
        ),
        'telephone' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.telephone',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            )
        ),
        'email' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.email',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            )
        ),
        'image' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
                    'minitems' => 0,
                    'maxitems' => 1
                ))
        ),
        'is_fallback' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:jobcenter/Resources/Private/Language/locallang_db.xlf:tx_jobcenter_domain_model_employer_contact.is_fallback',
            'config' => array(
                'type' => 'check'
            )
        )
    ),
    'types' => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, salutation, first_name, last_name, address, zip, room_number, telephone, email, image, is_fallback,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
