<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fluidcontent".
 *
 * Auto generated 18-10-2014 02:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Fluid Content Engine',
	'description' => 'Fluid Content Element engine - integrates extremely compact and highly dynamic content element templates written in Fluid. See: https://github.com/FluidTYPO3/fluidcontent',
	'category' => 'misc',
	'version' => '4.1.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => false,
	'author' => 'FluidTYPO3 Team',
	'author_email' => 'claus@namelesscoder.net',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.1.0-6.2.99',
			'cms' => '',
			'flux' => '7.1.0-7.1.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

