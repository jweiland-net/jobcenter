<?php
namespace JWeiland\Jobcenter\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Stefan Froemken <projects@jweiland.net>, jweiland.net
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
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use JWeiland\Jobcenter\Domain\Model\Contact;

/**
 * @package jobcenter
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class ContactController extends ActionController {

    /**
     * contactRepository
     *
     * @var \JWeiland\Jobcenter\Domain\Repository\ContactRepository
     */
    protected $contactRepository;

    /**
     * inject contactRepository
     *
     * @param \JWeiland\Jobcenter\Domain\Repository\ContactRepository $contactRepository
     * @return void
     */
    public function injectContactRepository(\JWeiland\Jobcenter\Domain\Repository\ContactRepository $contactRepository) {
        $this->contactRepository = $contactRepository;
    }

    /**
     * initialize view
     * add some global available markers to the view
     *
     * @return void
     */
    public function initializeView() {
        $pids = array();
        $pids[$this->settings['pidForManagement15_24']] = $this->getPagetitle($this->settings['pidForManagement15_24']);
        $pids[$this->settings['pidForManagement25_49']] = $this->getPagetitle($this->settings['pidForManagement25_49']);

        $this->view->assign('pids', $pids);
    }

    /**
     * action search
     * shows the search form
     *
     * @return void
     */
    public function searchAction() {
    }

    /**
     * action list
     *
     * @param string $name
     * @param integer $pid
     * @param boolean $handicapped
     * @return void
     */
    public function listAction($name, $pid, $handicapped) {
        $contact = $this->contactRepository->findContact($name, $pid, $handicapped);
        if (!$contact instanceof Contact) {
            $contact = $this->contactRepository->findFallback($pid, $handicapped);
        }
        $this->view->assign('contact', $contact);
        $this->view->assign('name', $name);
        $this->view->assign('pid', $pid);
        $this->view->assign('handicapped', $handicapped);
    }

    /**
     * get page title from a given page
     *
     * @param integer $pid
     * @return string
     */
    protected function getPagetitle($pid) {
        $page = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('pages', $pid, 'title');
        return $page['title'];
    }

}