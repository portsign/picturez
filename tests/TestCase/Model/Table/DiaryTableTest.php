<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiaryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiaryTable Test Case
 */
class DiaryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiaryTable
     */
    public $Diary;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.diary'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Diary') ? [] : ['className' => 'App\Model\Table\DiaryTable'];
        $this->Diary = TableRegistry::get('Diary', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Diary);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
