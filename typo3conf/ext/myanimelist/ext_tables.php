<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'MyAnimeList');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myanimelist_domain_model_series', 'EXT:myanimelist/Resources/Private/Language/locallang_csh_tx_myanimelist_domain_model_series.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myanimelist_domain_model_series');
$GLOBALS['TCA']['tx_myanimelist_domain_model_series'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_series',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,name_jp,image,episodes,release_date,ending_date,description,status,genre,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Series.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myanimelist_domain_model_series.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myanimelist_domain_model_feuserseriesdata', 'EXT:myanimelist/Resources/Private/Language/locallang_csh_tx_myanimelist_domain_model_feuserseriesdata.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myanimelist_domain_model_feuserseriesdata');
$GLOBALS['TCA']['tx_myanimelist_domain_model_feuserseriesdata'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_feuserseriesdata',
		'label' => 'series',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'hideTable' => TRUE,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'viewed,serie,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/FeuserSeriesData.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myanimelist_domain_model_feuserseriesdata.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myanimelist_domain_model_movies', 'EXT:myanimelist/Resources/Private/Language/locallang_csh_tx_myanimelist_domain_model_movies.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myanimelist_domain_model_movies');
$GLOBALS['TCA']['tx_myanimelist_domain_model_movies'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_movies',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,image,lenght,relase_date,description,series,genre,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Movies.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myanimelist_domain_model_movies.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myanimelist_domain_model_status', 'EXT:myanimelist/Resources/Private/Language/locallang_csh_tx_myanimelist_domain_model_status.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myanimelist_domain_model_status');
$GLOBALS['TCA']['tx_myanimelist_domain_model_status'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_status',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Status.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myanimelist_domain_model_status.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myanimelist_domain_model_genre', 'EXT:myanimelist/Resources/Private/Language/locallang_csh_tx_myanimelist_domain_model_genre.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myanimelist_domain_model_genre');
$GLOBALS['TCA']['tx_myanimelist_domain_model_genre'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_genre',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Genre.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myanimelist_domain_model_genre.gif'
	),
);

if (!isset($GLOBALS['TCA']['fe_users']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$GLOBALS['TCA']['fe_users']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(),
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumns, 1);
}

$tmp_myanimelist_columns = array(

	'series_data' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_feuser.series',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_myanimelist_domain_model_feuserseriesdata',
			'foreign_field' => 'fe_user',
			'maxitems'      => 9999,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
	'movies' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_feuser.movies',
		'config' => array(
			'type' => 'select',
			'allowed' => '*',
			'foreign_table' => 'tx_myanimelist_domain_model_movies',
			'MM' => 'tx_myanimelist_feuser_movies_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'renderMode' => 'tree',
			'treeConfig' => array(
				'parentField' => 'parent',
				'appearance' => array(
					'expandAll' => TRUE,
					'showHeader' => TRUE,
				),
			),
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',$tmp_myanimelist_columns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'fe_users',
	'--div--;LLL:EXT:myanimelist/Resources/Private/Language/locallang_db.xlf:tx_myanimelist_domain_model_feuser;;;;1-1-1, movies, series_data'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'seriesList',
	'Series List'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'moviesList',
	'Movies List'
);