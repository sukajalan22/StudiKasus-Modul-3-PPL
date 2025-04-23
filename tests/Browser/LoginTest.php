<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee(text: 'Enterprise Application Development') 
            ->clickLink(link: 'Log in')
            ->assertPathIs(path: '/login')
            ->type(field:'email',value:'irfan@gmail.com')
            ->type(field:'password',value:'1234')
            ->press(button: 'LOG IN')
            ->assertPathIs('/dashboard');
            
        });
    }
}
