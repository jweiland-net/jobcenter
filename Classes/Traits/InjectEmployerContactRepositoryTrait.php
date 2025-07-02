<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/maps2.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Traits;

use JWeiland\Jobcenter\Domain\Repository\EmployerContactRepository;

/**
 * Trait to inject the employer contact repository
 */
trait InjectEmployerContactRepositoryTrait
{
    protected EmployerContactRepository $employerContactRepository;

    public function injectEmployerContactRepository(EmployerContactRepository $employerContactRepository): void
    {
        $this->employerContactRepository = $employerContactRepository;
    }
}
