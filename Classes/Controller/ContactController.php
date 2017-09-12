<?php
declare(strict_types=1);
namespace JWeiland\Jobcenter\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use JWeiland\Jobcenter\Domain\Repository\ContactRepository;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use JWeiland\Jobcenter\Domain\Model\Contact;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;

/**
 * Class ContactController
 *
 * @package JWeiland\Jobcenter\Controller
 */
class ContactController extends ActionController
{
    /**
     * contactRepository
     *
     * @var ContactRepository
     */
    protected $contactRepository;

    /**
     * inject contactRepository
     *
     * @param ContactRepository $contactRepository
     * @return void
     */
    public function injectContactRepository(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * initialize view
     * add some global available markers to the view
     *
     * @param ViewInterface $view The view to be initialized
     *
     * @return void
     */
    public function initializeView(ViewInterface $view)
    {
        $pids = [];
        $pids[$this->settings['pidForManagement15_24']]
            = $this->getPagetitle((int)$this->settings['pidForManagement15_24']);
        $pids[$this->settings['pidForManagement25_49']]
            = $this->getPagetitle((int)$this->settings['pidForManagement25_49']);

        $this->view->assign('pids', $pids);
    }

    /**
     * action search
     * shows the search form
     *
     * @return void
     */
    public function searchAction()
    {
    }

    /**
     * action list
     *
     * @param string $name
     * @param integer $pid
     * @param bool $handicapped
     * @return void
     * @throws InvalidQueryException
     */
    public function listAction(string $name, int $pid, bool $handicapped)
    {
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
     * @return string|null
     */
    protected function getPagetitle(int $pid)
    {
        $page = BackendUtility::getRecord('pages', $pid, 'title');
        return $page['title'];
    }
}
