<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Traits;

use JWeiland\Jobcenter\Domain\Repository\ContactRepository;

/**
 * Trait to inject the contact repository
 */
trait InjectContactRepositoryTrait
{
    protected ContactRepository $contactRepository;

    public function injectContactRepository(ContactRepository $contactRepository): void
    {
        $this->contactRepository = $contactRepository;
    }
}
