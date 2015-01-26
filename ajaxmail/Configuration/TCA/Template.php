<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_ajaxmail_domain_model_template'] = array(
	'ctrl' => $TCA['tx_ajaxmail_domain_model_template']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, subject, receiver, sender,sender_name cc, bcc, message, attachment, confirmation_receiver, confirmation_subject,confirmation_message',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, subject, receiver, sender,sender_name, cc, bcc, message, attachment, confirmation_receiver, confirmation_subject, confirmation_message,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_ajaxmail_domain_model_template',
				'foreign_table_where' => 'AND tx_ajaxmail_domain_model_template.pid=###CURRENT_PID### AND tx_ajaxmail_domain_model_template.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'subject' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.subject',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'receiver' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.receiver',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'sender' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.sender',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
        'sender_name' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.sender_name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
		'cc' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.cc',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bcc' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.bcc',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'message' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.message',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
            'defaultExtras' => 'richtext[]'
		),
        'confirmation_receiver' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.confirmation_receiver',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'confirmation_subject' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.confirmation_subject',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'confirmation_message' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.confirmation_message',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ),
            'defaultExtras' => 'richtext[]'
        ),
		'attachment' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ajaxmail/Resources/Private/Language/locallang_db.xml:tx_ajaxmail_domain_model_template.attachment',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_ajaxmail',
				'allowed' => '*',
				'disallowed' => 'php',
				'size' => 5,
			),
		),
	),
);
?>