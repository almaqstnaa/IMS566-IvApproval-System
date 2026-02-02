<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SemestersFixture
 */
class SemestersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'code' => 'Lorem ipsum dolor sit amet',
                'session' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2026-01-27 00:42:57',
                'modified' => '2026-01-27 00:42:57',
            ],
        ];
        parent::init();
    }
}
