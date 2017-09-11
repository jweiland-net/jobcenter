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
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use JWeiland\Jobcenter\Domain\Model\Contact;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;

/**
 * Class ServiceController
 *
 * @package JWeiland\Jobcenter\Controller
 */
class ServiceController extends ActionController
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
     * action search
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
     * @return void
     * @throws InvalidQueryException
     */
    public function listAction(string $name)
    {
        $service = $this->contactRepository->findService($name, $this->settings['pidForService']);
        if (!$service instanceof Contact) {
            $service = $this->contactRepository->findFallbackForService($this->settings['pidForService']);
        }
        $this->view->assign('service', $service);
        $this->view->assign('name', $name);
    }
}
