<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Controller;

use Psr\Http\Message\ResponseInterface;
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
     * Shows the search form
     */
    public function searchAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    public function listAction(string $zip): ResponseInterface
    {
        $contact = $this->employerContactRepository->findContact($zip);
        if (!$contact instanceof EmployerContact) {
            $contact = $this->employerContactRepository->findFallback();
        }

        $this->view->assign('contact', $contact);
        $this->view->assign('zip', $zip);

        return $this->htmlResponse();
    }

    /**
     * Get page title from a given page
     */
    protected function getPagetitle(int $pid): string
    {
        return BackendUtility::getRecord('pages', $pid, 'title')['title'] ?: '';
    }
}
