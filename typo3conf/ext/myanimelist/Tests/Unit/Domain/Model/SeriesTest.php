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
 * Test case for class \Typo3\Myanimelist\Domain\Model\Series.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Sascha Zander <saschakhs@gmx.de>
 */
class SeriesTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Typo3\Myanimelist\Domain\Model\Series
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Typo3\Myanimelist\Domain\Model\Series();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNameJpReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNameJp()
		);
	}

	/**
	 * @test
	 */
	public function setNameJpForStringSetsNameJp() {
		$this->subject->setNameJp('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nameJp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEpisodesReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getEpisodes()
		);
	}

	/**
	 * @test
	 */
	public function setEpisodesForIntegerSetsEpisodes() {
		$this->subject->setEpisodes(12);

		$this->assertAttributeEquals(
			12,
			'episodes',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getReleaseDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getReleaseDate()
		);
	}

	/**
	 * @test
	 */
	public function setReleaseDateForDateTimeSetsReleaseDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setReleaseDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'releaseDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEndingDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getEndingDate()
		);
	}

	/**
	 * @test
	 */
	public function setEndingDateForDateTimeSetsEndingDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setEndingDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'endingDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStatusReturnsInitialValueForStatus() {
		$this->assertEquals(
			NULL,
			$this->subject->getStatus()
		);
	}

	/**
	 * @test
	 */
	public function setStatusForStatusSetsStatus() {
		$statusFixture = new \Typo3\Myanimelist\Domain\Model\Status();
		$this->subject->setStatus($statusFixture);

		$this->assertAttributeEquals(
			$statusFixture,
			'status',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGenreReturnsInitialValueForGenre() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getGenre()
		);
	}

	/**
	 * @test
	 */
	public function setGenreForObjectStorageContainingGenreSetsGenre() {
		$genre = new \Typo3\Myanimelist\Domain\Model\Genre();
		$objectStorageHoldingExactlyOneGenre = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneGenre->attach($genre);
		$this->subject->setGenre($objectStorageHoldingExactlyOneGenre);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneGenre,
			'genre',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addGenreToObjectStorageHoldingGenre() {
		$genre = new \Typo3\Myanimelist\Domain\Model\Genre();
		$genreObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$genreObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($genre));
		$this->inject($this->subject, 'genre', $genreObjectStorageMock);

		$this->subject->addGenre($genre);
	}

	/**
	 * @test
	 */
	public function removeGenreFromObjectStorageHoldingGenre() {
		$genre = new \Typo3\Myanimelist\Domain\Model\Genre();
		$genreObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$genreObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($genre));
		$this->inject($this->subject, 'genre', $genreObjectStorageMock);

		$this->subject->removeGenre($genre);

	}
}
