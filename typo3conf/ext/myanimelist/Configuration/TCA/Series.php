<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_myanimelist_domain_model_series'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_myanimelist_domain_model_series']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, title_jp, image, episodes, release_date, ending_date, description, status, genre',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, title_jp, image, episodes, release_date, ending_date, description, status, genre,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
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
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_myanimelist_domain_model_series',
				'foreign_table_where' => 'AND tx_myanimelist_domain_model_series.pid=###CURRENT_PID### AND tx_myanimelist_domain_model_series.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
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
				),
			),
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
				),
			),
		),

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'title_jp' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.title_jp',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 1),
				'*'
			),
		),
		'episodes' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.episodes',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'release_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.release_date',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'ending_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.ending_date',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'status' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.status',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_myanimelist_domain_model_status',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'genre' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series.genre',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_myanimelist_domain_model_genre',
				'MM' => 'tx_myanimelist_series_genre_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_myanimelist_domain_model_genre',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);
