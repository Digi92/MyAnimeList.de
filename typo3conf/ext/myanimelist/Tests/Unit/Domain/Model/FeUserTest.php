<?php

namespace Typo3\Myanimelist\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Sascha Zander <saschakhs@gmx.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Typo3\Myanimelist\Domain\Model\FeUser.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Sascha Zander <saschakhs@gmx.de>
 */
class FeUserTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Typo3\Myanimelist\Domain\Model\FeUser
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Typo3\Myanimelist\Domain\Model\FeUser();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getSeriesReturnsInitialValueForSeries() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getSeries()
		);
	}

	/**
	 * @test
	 */
	public function setSeriesForObjectStorageContainingSeriesSetsSeries() {
		$series = new \Typo3\Myanimelist\Domain\Model\Series();
		$objectStorageHoldingExactlyOneSeries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneSeries->attach($series);
		$this->subject->setSeries($objectStorageHoldingExactlyOneSeries);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneSeries,
			'series',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addSeriesToObjectStorageHoldingSeries() {
		$series = new \Typo3\Myanimelist\Domain\Model\Series();
		$seriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$seriesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($series));
		$this->inject($this->subject, 'series', $seriesObjectStorageMock);

		$this->subject->addSeries($series);
	}

	/**
	 * @test
	 */
	public function removeSeriesFromObjectStorageHoldingSeries() {
		$series = new \Typo3\Myanimelist\Domain\Model\Series();
		$seriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$seriesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($series));
		$this->inject($this->subject, 'series', $seriesObjectStorageMock);

		$this->subject->removeSeries($series);

	}

	/**
	 * @test
	 */
	public function getMoviesReturnsInitialValueForMovies() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getMovies()
		);
	}

	/**
	 * @test
	 */
	public function setMoviesForObjectStorageContainingMoviesSetsMovies() {
		$movie = new \Typo3\Myanimelist\Domain\Model\Movies();
		$objectStorageHoldingExactlyOneMovies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneMovies->attach($movie);
		$this->subject->setMovies($objectStorageHoldingExactlyOneMovies);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneMovies,
			'movies',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addMovieToObjectStorageHoldingMovies() {
		$movie = new \Typo3\Myanimelist\Domain\Model\Movies();
		$moviesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$moviesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($movie));
		$this->inject($this->subject, 'movies', $moviesObjectStorageMock);

		$this->subject->addMovie($movie);
	}

	/**
	 * @test
	 */
	public function removeMovieFromObjectStorageHoldingMovies() {
		$movie = new \Typo3\Myanimelist\Domain\Model\Movies();
		$moviesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$moviesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($movie));
		$this->inject($this->subject, 'movies', $moviesObjectStorageMock);

		$this->subject->removeMovie($movie);

	}
}
