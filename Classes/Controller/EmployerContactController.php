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
use JWeiland\Jobcenter\Traits\InjectEmployerContactRepositoryTrait;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for employee contacts
 */
class EmployerContactController extends ActionController
{
    use InjectEmployerContactRepositoryTrait;

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
}
