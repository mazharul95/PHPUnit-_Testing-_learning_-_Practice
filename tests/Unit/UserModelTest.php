<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{

    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function user_has_full_name_attribute()
    {
        //create user 
        $user = User::create(['firstname' => 'Mazhar', 'lastname' => 'Piyash', 
        'email' => 'mip3054@gmail.com', 'password' => 'secret']);
        
        $this->assertEquals('Mazhar Piyash', $user->fullname);  
        //assert user has full name  
    }
}
