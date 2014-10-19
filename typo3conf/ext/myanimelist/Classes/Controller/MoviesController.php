<?php
namespace Typo3\Myanimelist\Controller;


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
 * MoviesController
 */
class MoviesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \Typo3\Myanimelist\Domain\Repository\FrontendUserRepository
	 * @inject
	 */
	protected $feUserRepository;

	/**
	 * MoviesRepository
	 *
	 * @var \Typo3\Myanimelist\Domain\Repository\MoviesRepository
	 * @inject
	 */
	protected $moviesRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$movies = $this->moviesRepository->findAll();
		$this->view->assign('movies', $movies);


		$user = $GLOBALS['TSFE']->fe_user->user['uid'];
		if(empty($user) === FALSE){
			$user = $this->feUserRepository->findByUid($user);

			$movie = $this->moviesRepository->findByUid(1);



			$user->addMovie($movie);
			\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($user);
			$this->feUserRepository->update($user);
		} else {
			die('ERROR: Bitte erst einloggen.');
		}


	}

	/**
	 * action show
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Movies $movies
	 * @return void
	 */
	public function showAction(\Typo3\Myanimelist\Domain\Model\Movies $movies) {
		$this->view->assign('movie', $movies);
	}

	/**
	 * action new
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Movies $newMovies
	 * @ignorevalidation $newMovies
	 * @return void
	 */
	public function newAction(\Typo3\Myanimelist\Domain\Model\Movies $newMovies = NULL) {
		$this->view->assign('movie', $newMovies);
	}

	/**
	 * action create
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Movies $newMovies
	 * @return void
	 */
	public function createAction(\Typo3\Myanimelist\Domain\Model\Movies $newMovies) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->moviesRepository->add($newMovies);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Movies $movies
	 * @ignorevalidation $movies
	 * @return void
	 */
	public function editAction(\Typo3\Myanimelist\Domain\Model\Movies $movies) {
		$this->view->assign('movie', $movies);
	}

	/**
	 * action update
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Movies $movies
	 * @return void
	 */
	public function updateAction(\Typo3\Myanimelist\Domain\Model\Movies $movies) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->moviesRepository->update($movies);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \Typo3\Myanimelist\Domain\Model\Movies $movies
	 * @return void
	 */
	public function deleteAction(\Typo3\Myanimelist\Domain\Model\Movies $movies) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->moviesRepository->remove($movies);
		$this->redirect('list');
	}

}