<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Controller;

use JWeiland\Jobcenter\Domain\Model\EmployerContact;
use JWeiland\Jobcenter\Domain\Repository\EmployerContactRepository;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for employee contacts
 */
class EmployerContactController extends ActionController
{
    /**
     * @var EmployerContactRepository
     */
    protected $employerContactRepository;

    public function injectEmployerContactRepository(EmployerContactRepository $employerContactRepository): void
    {
        $this->employerContactRepository = $employerContactRepository;
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
     * @param string $zip
     */
    public function listAction(string $zip): void
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
     * @param int $pid
     * @return string
     */
    protected function getPagetitle(int $pid): string
    {
        $page = BackendUtility::getRecord('pages', $pid, 'title');
        return $page['title'] ?: '';
    }
}
