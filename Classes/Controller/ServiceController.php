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
use JWeiland\Jobcenter\Domain\Model\Contact;
use JWeiland\Jobcenter\Traits\InjectContactRepositoryTrait;
use TYPO3\CMS\Core\Messaging\AbstractMessage;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for granting of benefits (DE: Leistungsgewaehrung)
 */
class ServiceController extends ActionController
{
    use InjectContactRepositoryTrait;

    public function searchAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    public function listAction(string $name, bool $selfReliance = false): ResponseInterface
    {
        $service = $this->contactRepository->findService(
            $name,
            (int)$this->settings['pidForService'],
            $selfReliance
        );
        if (!$service instanceof Contact) {
            $this->addFlashMessage(
                'Currently, there is no person defined which is responsible for this request.',
                'No contact found',
                AbstractMessage::NOTICE
            );
        }

        $this->view->assign('service', $service);
        $this->view->assign('name', $name);
        $this->view->assign('selfReliance', $selfReliance);

        return $this->htmlResponse();
    }
}
