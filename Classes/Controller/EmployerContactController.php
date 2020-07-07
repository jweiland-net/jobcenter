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
     * employerContactRepository
     *
     * @var EmployerContactRepository
     */
    protected $employerContactRepository;

    /**
     * inject employerContactRepository
     *
     * @param EmployerContactRepository $employerContactRepository
     * @return void
     */
    public function injectEmployerContactRepository(EmployerContactRepository $employerContactRepository)
    {
        $this->employerContactRepository = $employerContactRepository;
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
     * @param string $zip
     * @return void
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
