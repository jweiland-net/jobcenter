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
use JWeiland\Jobcenter\Traits\InjectContactRepositoryTrait;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Messaging\AbstractMessage;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;

/**
 * Controller to show contacts
 */
class ContactController extends ActionController
{
    use InjectContactRepositoryTrait;

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
     * Shows the search form
     */
    public function searchAction(): void
    {
    }

    public function listAction(string $name, int $pid, bool $handicapped, bool $selfReliance = false): void
    {
        $contact = $this->contactRepository->findContact($name, $pid, $handicapped, $selfReliance);
        if (!$contact instanceof Contact) {
            $this->addFlashMessage(
                'Currently, there is no person defined which is responsible for this request.',
                'No contact found',
                AbstractMessage::NOTICE
            );
        }

        $this->view->assign('contact', $contact);
        $this->view->assign('name', $name);
        $this->view->assign('pid', $pid);
        $this->view->assign('handicapped', $handicapped);
        $this->view->assign('selfReliance', $selfReliance);
    }

    /**
     * Get page title from a given page
     */
    protected function getPagetitle(int $pid): string
    {
        return BackendUtility::getRecord('pages', $pid, 'title')['title'] ?: '';
    }
}
