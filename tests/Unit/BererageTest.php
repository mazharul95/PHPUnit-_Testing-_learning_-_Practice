<?php

namespace Tests\Unit;

use Faker\factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Beverage;

class BererageTest extends TestCase
{

    use DatabaseMigrations;

    private $beverage;
    
     public function setup() : void
    {
        parent::setup();
        $this->beverage = factory(Beverage::class)->make(); 
    }

    /**
     * A basic unit test example.
     * @test 
     * @return void
     */

    public function beverage_has_name()
    {
                // create beverage
        
        $this->assertNotEmpty($this->beverage->name);
        
    }
        /**
     * A basic unit test example.
     * @test 
     * @return void
     */

    public function beverage_has_type()
    {
                // create beverage
        $this->assertNotEmpty($this->beverage->type);
        
    }
}
