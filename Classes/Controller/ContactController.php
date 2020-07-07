<?php
declare(strict_types=1);
namespace JWeiland\Jobcenter\Controller;

/**
 * This file is part of the "jobcenter" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use JWeiland\Jobcenter\Domain\Repository\ContactRepository;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use JWeiland\Jobcenter\Domain\Model\Contact;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;

/**
 * Controller to show contacts
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
