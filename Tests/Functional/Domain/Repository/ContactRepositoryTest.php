<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Tests\Functional\Domain\Repository;

use JWeiland\Jobcenter\Domain\Repository\ContactRepository;
use Nimut\TestingFramework\TestCase\FunctionalTestCase;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Test ContactRepository
 */
class ContactRepositoryTest extends FunctionalTestCase
{
    /**
     * @var ContactRepository
     */
    protected $subject;

    /**
     * @var array
     */
    protected $testExtensionsToLoad = [
        'typo3conf/ext/jobcenter',
    ];

    protected function setUp(): void
    {
        parent::setUp();

        $this->importDataSet('ntf://Database/pages.xml');
        $this->importDataSet(__DIR__ . '/../../Fixtures/tx_jobcenter_domain_model_contact.xml');
        $this->importDataSet(__DIR__ . '/../../Fixtures/tx_jobcenter_domain_model_letter.xml');

        // Use GeneralUtility because of all these inject methods and the constructor
        $this->subject = GeneralUtility::makeInstance(ContactRepository::class);
    }

    protected function tearDown(): void
    {
        unset(
            $this->subject
        );

        parent::tearDown();
    }

    public function contactDataProvider(): array
    {
        return [
            'Find U25 contact for Birgit H0 SR0 will return Anton' => ['Birgit', 10, false, false, 'Anton'],
            'Find U25 contact for Ingrid H0 SR0 will return Igor' => ['Ingrid', 10, false, false, 'Igor'],
            'Find U25 contact for Paul H0 SR0 will return Igor' => ['Paul', 10, false, false, 'Igor'],
            'Find U25 contact for Werner H0 SR0 will return Stefan' => ['Werner', 10, false, false, 'Stefan'],
            'Find U25 contact for Christian H1 SR0 will return August' => ['Christian', 10, true, false, 'August'],
            'Find U25 contact for Udo H1 SR0 will return Theodor' => ['Udo', 10, true, false, 'Theodor'],
            'Find U25 contact for Doris H0 SR1 will return Andy' => ['Doris', 10, false, true, 'Andy'],
            'Find U25 contact for Norbert H0 SR1 will return Lars' => ['Norbert', 10, false, true, 'Lars'],
            'Find U25 contact for Emil H1 SR1 will return Andrea' => ['Emil', 10, true, true, 'Andrea'],
            'Find U25 contact for Viktor H1 SR1 will return Udo' => ['Viktor', 10, true, true, 'Udo'],
            'Find U25 fallback contact for Gustav H0 SR0' => ['Gustav', 10, false, false, 'Dieter'],
            'Find U25 fallback contact for Heinrich H1 SR0' => ['Heinrich', 10, true, false, 'Erik'],
            'Find U25 fallback contact for Jens H0 SR1' => ['Jens', 10, false, true, 'Joachim'],
            'Find U25 fallback contact for Sven H1 SR1' => ['Sven', 10, true, true, 'Tanja'],

            'Find Ü25 contact for Birgit H0 SR0 will return Anton' => ['Birgit', 11, false, false, 'Anton'],
            'Find Ü25 contact for Ingrid H0 SR0 will return Igor' => ['Ingrid', 11, false, false, 'Igor'],
            'Find Ü25 contact for Paul H0 SR0 will return Igor' => ['Paul', 11, false, false, 'Igor'],
            'Find Ü25 contact for Werner H0 SR0 will return Stefan' => ['Werner', 11, false, false, 'Stefan'],
            'Find Ü25 contact for Christian H1 SR0 will return August' => ['Christian', 11, true, false, 'August'],
            'Find Ü25 contact for Udo H1 SR0 will return Theodor' => ['Udo', 11, true, false, 'Theodor'],
            'Find Ü25 contact for Doris H0 SR1 will return Andy' => ['Doris', 11, false, true, 'Andy'],
            'Find Ü25 contact for Norbert H0 SR1 will return Lars' => ['Norbert', 11, false, true, 'Lars'],
            'Find Ü25 contact for Emil H1 SR1 will return Andrea' => ['Emil', 11, true, true, 'Andrea'],
            'Find Ü25 contact for Viktor H1 SR1 will return Udo' => ['Viktor', 11, true, true, 'Udo'],
            'Find Ü25 fallback contact for Gustav H0 SR0' => ['Gustav', 11, false, false, 'Dieter'],
            'Find Ü25 fallback contact for Heinrich H1 SR0' => ['Heinrich', 11, true, false, 'Erik'],
            'Find Ü25 fallback contact for Jens H0 SR1' => ['Jens', 11, false, true, 'Joachim'],
            'Find Ü25 fallback contact for Sven H1 SR1' => ['Sven', 11, true, true, 'Tanja'],
        ];
    }

    /**
     * @test
     *
     * @dataProvider contactDataProvider
     */
    public function findContact(string $name, int $pid, bool $handicapped, bool $selfReliance, string $expected): void
    {
        self::assertStringContainsString(
            $expected,
            $this->subject->findContact($name, $pid, $handicapped, $selfReliance)->getName()
        );
    }

    public function serviceDataProvider(): array
    {
        return [
            'Find Service contact for Friedrich SR0 will return Andy' => ['Friedrich', 12, false, 'Andy'],
            'Find Service contact for Martina SR0 will return Lars' => ['Martina', 12, false, 'Lars'],
            'Find Service contact for Daniel SR1 will return Andrea' => ['Daniel', 12, true, 'Andrea'],
            'Find Service contact for Wolfgang SR1 will return Udo' => ['Wolfgang', 12, true, 'Udo'],
            'Find Service fallback contact for Klaus SR0' => ['Klaus', 12, false, 'Manuel'],
            'Find Service fallback contact for Jens SR1' => ['Jens', 12, true, 'Petra'],
        ];
    }

    /**
     * @test
     *
     * @dataProvider serviceDataProvider
     */
    public function findService(string $name, int $pid, bool $selfReliance, string $expected): void
    {
        self::assertStringContainsString(
            $expected,
            $this->subject->findService($name, $pid, $selfReliance)->getName()
        );
    }
}
