<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_myanimelist_domain_model_feuserseriesdata'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_myanimelist_domain_model_feuserseriesdata']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, viewed, series',
	),
	'types' => array(
		'1' => array('showitem' => 'viewed, series, fe_user,'),
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
				'foreign_table' => 'tx_myanimelist_domain_model_feuserseriesdata',
				'foreign_table_where' => 'AND tx_myanimelist_domain_model_feuserseriesdata.pid=###CURRENT_PID### AND tx_myanimelist_domain_model_feuserseriesdata.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),

		'viewed' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_feuserseriesdata.viewed',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'int,trim,required'
			),
		),
		'series' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_feuserseriesdata.serie',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_myanimelist_domain_model_series',
				'minitems' => 1,
				'maxitems' => 1,
				'multiple' => 0,
			),
		),

		'fe_user' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
