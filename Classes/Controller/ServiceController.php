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
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use JWeiland\Jobcenter\Domain\Model\Contact;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;

/**
 * Controller for granting of benefits (DE: Leistungsgewaehrung)
 */
class ServiceController extends ActionController
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
     * action search
     */
    public function searchAction():void
    {
    }

    /**
     * action list
     *
     * @param string $name
     * @param bool $selfReliance
     * @throws InvalidQueryException
     */
    public function listAction(string $name, bool $selfReliance = false): void
    {
        $this->contactRepository->setStoragePids([$this->settings['pidForService']]);
        $service = $this->contactRepository->findService($name, $selfReliance);
        if (!$service instanceof Contact) {
            $service = $this->contactRepository->findFallbackForService();
        }
        $this->view->assign('service', $service);
        $this->view->assign('name', $name);
        $this->view->assign('selfReliance', $selfReliance);
    }
}
