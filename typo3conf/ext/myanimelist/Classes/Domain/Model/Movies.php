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
 * Movies
 */
class Movies extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * titleJp
	 *
	 * @var string
	 */
	protected $titleJp = '';

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * lenght
	 *
	 * @var integer
	 */
	protected $lenght = 0;

	/**
	 * relaseDate
	 *
	 * @var \DateTime
	 */
	protected $relaseDate = NULL;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * series
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Series>
	 */
	protected $series = NULL;

	/**
	 * genre
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Genre>
	 * @lazy
	 */
	protected $genre = NULL;

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
		$this->series = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->genre = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the titleJp
	 *
	 * @return string $titleJp
	 */
	public function getTitleJp() {
		return $this->titleJp;
	}

	/**
	 * Sets the titleJp
	 *
	 * @param string $titleJp
	 * @return void
	 */
	public function setTitleJp($titleJp) {
		$this->titleJp = $titleJp;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Returns the lenght
	 *
	 * @return integer $lenght
	 */
	public function getLenght() {
		return $this->lenght;
	}

	/**
	 * Sets the lenght
	 *
	 * @param integer $lenght
	 * @return void
	 */
	public function setLenght($lenght) {
		$this->lenght = $lenght;
	}

	/**
	 * Returns the relaseDate
	 *
	 * @return \DateTime $relaseDate
	 */
	public function getRelaseDate() {
		return $this->relaseDate;
	}

	/**
	 * Sets the relaseDate
	 *
	 * @param \DateTime $relaseDate
	 * @return void
	 */
	public function setRelaseDate(\DateTime $relaseDate) {
		$this->relaseDate = $relaseDate;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Adds a Series
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Series $series
	 * @return void
	 */
	public function addSeries(\Typo3\Myanimelist\Domain\Model\Series $series) {
		$this->series->attach($series);
	}

	/**
	 * Removes a Series
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Series $seriesToRemove The Series to be removed
	 * @return void
	 */
	public function removeSeries(\Typo3\Myanimelist\Domain\Model\Series $seriesToRemove) {
		$this->series->detach($seriesToRemove);
	}

	/**
	 * Returns the series
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Series> $series
	 */
	public function getSeries() {
		return $this->series;
	}

	/**
	 * Sets the series
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Series> $series
	 * @return void
	 */
	public function setSeries(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $series) {
		$this->series = $series;
	}

	/**
	 * Adds a Genre
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Genre $genre
	 * @return void
	 */
	public function addGenre(\Typo3\Myanimelist\Domain\Model\Genre $genre) {
		$this->genre->attach($genre);
	}

	/**
	 * Removes a Genre
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Genre $genreToRemove The Genre to be removed
	 * @return void
	 */
	public function removeGenre(\Typo3\Myanimelist\Domain\Model\Genre $genreToRemove) {
		$this->genre->detach($genreToRemove);
	}

	/**
	 * Returns the genre
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Genre> $genre
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * Sets the genre
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Typo3\Myanimelist\Domain\Model\Genre> $genre
	 * @return void
	 */
	public function setGenre(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $genre) {
		$this->genre = $genre;
	}

}