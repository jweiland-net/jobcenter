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
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for granting of benefits (DE: Leistungsgewaehrung)
 */
class ServiceController extends ActionController
{
    use InjectContactRepositoryTrait;

    public function searchAction(): void
    {
    }

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
