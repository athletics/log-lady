<?php

namespace Athletics\Manifest\LogLady;

class LogLadyTest extends \PHPUnit_Framework_TestCase {

    protected $logLady = null;

    /**
     * Perform test setup
     */
    public function setUp() {

        $this->logLady = new LogLady();
    
    }
 
    /**
     * Test default name
     */
    public function testDefaultName() {

        $this->assertEquals( 'LogLady', $this->logLady->getName() );

    }

    /**
     * Perform test teardown
     */
    public function tearDown() {
        
        $this->logLady = null;
    
    }

}