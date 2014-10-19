<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Typo3.' . $_EXTKEY,
	'seriesList',
	array(
		'Series' => 'list'
	),
	array(
		'Series' => 'list'
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Typo3.' . $_EXTKEY,
	'moviesList',
	array(
		'Movies' => 'list'
	),
	array(
		'Movies' => 'list'
	)
);