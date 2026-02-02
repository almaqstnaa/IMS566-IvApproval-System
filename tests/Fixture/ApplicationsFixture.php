<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicationsFixture
 */
class ApplicationsFixture extends TestFixture
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
                'user_id' => 1,
                'faculty_id' => 1,
                'program_id' => 1,
                'semester_id' => 1,
                'branch_id' => 1,
                'application_date' => '2026-01-27',
                'phone' => 'Lorem ipsum d',
                'nric' => 'Lorem ipsu',
                'matrix' => 'Lorem ip',
                'pic_name' => 'Lorem ipsum dolor sit amet',
                'pic_email' => 'Lorem ipsum dolor sit amet',
                'company_name' => 'Lorem ipsum dolor sit amet',
                'company_street_1' => 'Lorem ipsum dolor sit amet',
                'company_street_2' => 'Lorem ipsum dolor sit amet',
                'company_poscode' => 'Lorem ip',
                'company_city' => 'Lorem ipsum dolor sit amet',
                'company_state' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2026-01-27',
                'end_date' => '2026-01-27',
                'status' => 1,
                'approval_name' => 'Lorem ipsum dolor sit amet',
                'approval_post' => 'Lorem ipsum dolor sit amet',
                'approval_status' => 1,
                'ref_no' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-01-27 00:48:35',
                'modified' => '2026-01-27 00:48:35',
            ],
        ];
        parent::init();
    }
}
