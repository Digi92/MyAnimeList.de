<?php
namespace Typo3\Myanimelist\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Sascha Zander <saschakhs@gmx.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * FeUser
 */
class FrontendUser extends \In2\Femanager\Domain\Model\User {

	/**
	 * series
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\FeuserSeriesData>
	 */
	protected $seriesData;

	/**
	 * movies
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Movies>
	 */
	protected $movies = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->seriesData = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->movies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a seriesData
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\FeuserSeriesData $seriesData
	 * @return void
	 */
	public function addSeriesData(\Typo3\Myanimelist\Domain\Model\FeuserSeriesData $seriesData) {
		$this->seriesData->attach($seriesData);
	}

	/**
	 * Removes a seriesData
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\FeuserSeriesData $seriesDataToRemove The Mm to be removed
	 * @return void
	 */
	public function removeSeriesData(\Typo3\Myanimelist\Domain\Model\FeuserSeriesData $seriesDataToRemove) {
		$this->seriesData->detach($seriesDataToRemove);
	}

	/**
	 * Returns the seriesData
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\FeuserSeriesData> $seriesData
	 */
	public function getSeriesData() {
		return $this->seriesData;
	}

	/**
	 * Sets the seriesData
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\FeuserSeriesData> $seriesData
	 * @return void
	 */
	public function setSeriesData(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $seriesData) {
		$this->seriesData = $seriesData;
	}

	/**
	 * Adds a Movies
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Movies $movie
	 * @return void
	 */
	public function addMovie(\Typo3\Myanimelist\Domain\Model\Movies $movie) {
		$this->movies->attach($movie);
	}

	/**
	 * Removes a Movies
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Movies $movieToRemove The Movies to be removed
	 * @return void
	 */
	public function removeMovie(\Typo3\Myanimelist\Domain\Model\Movies $movieToRemove) {
		$this->movies->detach($movieToRemove);
	}

	/**
	 * Returns the movies
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Movies> $movies
	 */
	public function getMovies() {
		return $this->movies;
	}

	/**
	 * Sets the movies
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Movies> $movies
	 * @return void
	 */
	public function setMovies(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $movies) {
		$this->movies = $movies;
	}

}