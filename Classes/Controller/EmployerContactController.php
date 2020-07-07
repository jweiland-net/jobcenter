<?php
declare(strict_types=1);
namespace JWeiland\Jobcenter\Controller;

/**
 * This file is part of the "jobcenter" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use JWeiland\Jobcenter\Domain\Repository\EmployerContactRepository;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use JWeiland\Jobcenter\Domain\Model\EmployerContact;

/**
 * Controller for employee contacts
 */
class EmployerContactController extends ActionController
{
    /**
     * @var EmployerContactRepository
     */
    protected $employerContactRepository;

    public function injectEmployerContactRepository(EmployerContactRepository $employerContactRepository)
    {
        $this->employerContactRepository = $employerContactRepository;
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
     * @param string $zip
     */
    public function listAction(string $zip)
    {
        $contact = $this->employerContactRepository->findContact($zip);
        if (!$contact instanceof EmployerContact) {
            $contact = $this->employerContactRepository->findFallback();
        }
        $this->view->assign('contact', $contact);
        $this->view->assign('zip', $zip);
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
