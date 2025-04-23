<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'irfan@gmail.com')
                    ->type('password', '1234')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')

                    ->clickLink('Notes') 
                    ->clickLink('Create Note')
                    ->assertPathIs('/create-note')
                    ->type('title', 'abdul')
                    ->type('description', 'keren')
                    ->press('CREATE')

                    ->assertPathIs('/notes')
                    ->assertSee('new note has been created') 
                    ->assertSee('abdul')
                    ->assertSee('keren')
                    ->assertSee('Author: irfan');

        });
    }
}
