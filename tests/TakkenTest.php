<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TakkenTest extends TestCase
{

    use DatabaseTransactions, DatabaseMigrations;

    /**
     * @group takken
     */
    public function testKapoenenUrl()
    {
        // Front-end
        $this->visit('/takken/kapoenen');
    }
    
    /**
     * @group takken 
     */
    public function testWelpenUrl()
    {
        $this->visit('/takken/welpen');
    }
    
    /**
     * @group takken
     */
    public function testJongGiversUrl()
    {
        $this->visit('/takken/jong-givers');
    }
    
    /**
     * @group takken
     */
    public function testGiversUrl() 
    {
        $this->visit('/takken/givers');
    }
    
    /**
     * @group takken
     */
    public function testJinsUrl()
    {
        $this->visit('/takken/jins');
    }
    
    /**
     * @group takken 
     */
    public function testLeidingUrl() 
    {
        $this->visit('/takken/leiding');
    }
    
    /**
     * @group takken
     */
    public function testVariousUrl()
    {
        // Back-end
        $this->visit('/backend/takken/update');
        $this->post('/backend/takken/update');
    }
}
