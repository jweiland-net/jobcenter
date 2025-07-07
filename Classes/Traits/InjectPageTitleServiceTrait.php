<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Traits;

use JWeiland\Jobcenter\Service\PageTitleService;

/**
 * Trait to inject the page title service
 */
trait InjectPageTitleServiceTrait
{
    protected PageTitleService $pageTitleService;

    public function injectPageTitleService(PageTitleService $pageTitleService): void
    {
        $this->pageTitleService = $pageTitleService;
    }
}
