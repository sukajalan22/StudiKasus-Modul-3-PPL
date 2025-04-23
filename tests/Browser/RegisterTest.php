<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group Register
     */
    
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee(text: 'Enterprise Application Development') 
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    ->type(field:'name',value:'irfan')
                    ->type(field:'email',value:'irfan@gmail.com')
                    ->type(field:'password',value:'1234')
                    ->type(field:'password_confirmation',value:'1234')
                    ->press(button: 'REGISTER')
                    ->assertPathIs('/dashboard');
                    
        });
    }
}
