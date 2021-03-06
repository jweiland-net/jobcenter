<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Controller;

use JWeiland\Jobcenter\Domain\Model\Contact;
use JWeiland\Jobcenter\Domain\Repository\ContactRepository;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;

/**
 * Controller to show contacts
 */
class ContactController extends ActionController
{
    /**
     * @var ContactRepository
     */
    protected $contactRepository;

    public function injectContactRepository(ContactRepository $contactRepository): void
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Add some global available markers to the view
     *
     * @param ViewInterface $view The view to be initialized
     */
    public function initializeView(ViewInterface $view): void
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
     */
    public function searchAction(): void
    {
    }

    /**
     * action list
     *
     * @param string $name
     * @param int $pid
     * @param bool $handicapped
     * @throws InvalidQueryException
     */
    public function listAction(string $name, int $pid, bool $handicapped): void
    {
        $this->contactRepository->setStoragePids([$pid]);
        $contact = $this->contactRepository->findContact($name, $handicapped);
        if (!$contact instanceof Contact) {
            $contact = $this->contactRepository->findFallback($handicapped);
        }
        $this->view->assign('contact', $contact);
        $this->view->assign('name', $name);
        $this->view->assign('pid', $pid);
        $this->view->assign('handicapped', $handicapped);
    }

    /**
     * get page title from a given page
     *
     * @param int $pid
     * @return string
     */
    protected function getPagetitle(int $pid): string
    {
        $page = BackendUtility::getRecord('pages', $pid, 'title');
        return $page['title'] ?: '';
    }
}
