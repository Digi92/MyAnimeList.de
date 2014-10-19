<?php
namespace Typo3\Myanimelist\Tests\Unit\Controller;
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
 * Test case for class Typo3\Myanimelist\Controller\MoviesController.
 *
 * @author Sascha Zander <saschakhs@gmx.de>
 */
class MoviesControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Typo3\Myanimelist\Controller\MoviesController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Typo3\\Myanimelist\\Controller\\MoviesController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllMoviessFromRepositoryAndAssignsThemToView() {

		$allMoviess = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$moviesRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$moviesRepository->expects($this->once())->method('findAll')->will($this->returnValue($allMoviess));
		$this->inject($this->subject, 'moviesRepository', $moviesRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('moviess', $allMoviess);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenMoviesToView() {
		$movies = new \Typo3\Myanimelist\Domain\Model\Movies();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('movies', $movies);

		$this->subject->showAction($movies);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenMoviesToView() {
		$movies = new \Typo3\Myanimelist\Domain\Model\Movies();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newMovies', $movies);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($movies);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenMoviesToMoviesRepository() {
		$movies = new \Typo3\Myanimelist\Domain\Model\Movies();

		$moviesRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$moviesRepository->expects($this->once())->method('add')->with($movies);
		$this->inject($this->subject, 'moviesRepository', $moviesRepository);

		$this->subject->createAction($movies);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenMoviesToView() {
		$movies = new \Typo3\Myanimelist\Domain\Model\Movies();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('movies', $movies);

		$this->subject->editAction($movies);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenMoviesInMoviesRepository() {
		$movies = new \Typo3\Myanimelist\Domain\Model\Movies();

		$moviesRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$moviesRepository->expects($this->once())->method('update')->with($movies);
		$this->inject($this->subject, 'moviesRepository', $moviesRepository);

		$this->subject->updateAction($movies);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenMoviesFromMoviesRepository() {
		$movies = new \Typo3\Myanimelist\Domain\Model\Movies();

		$moviesRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$moviesRepository->expects($this->once())->method('remove')->with($movies);
		$this->inject($this->subject, 'moviesRepository', $moviesRepository);

		$this->subject->deleteAction($movies);
	}
}
