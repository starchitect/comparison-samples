<?php

namespace Starchitect\ComparisonSamples;

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{	

	/**
     * @var Queue $sut system under test
     */
    protected $sut;
	
    /**
	 * @return Queue system under test
	 */
	protected function createNew()
	{
	    return new Queue();
	}
	
	protected function setUp()
    {
        parent::setUp();
        $this->sut = $this->createNew();
    }

    public function testNewShouldSuccess()
    {
		$actual = $this->sut;
		
        $this->assertNotNull($actual);
    }
	
    public function testEnqueueShouldSuccess()
    {
        $object = new \stdClass();
        
		$this->sut->enqueue($object);
    }
	
}