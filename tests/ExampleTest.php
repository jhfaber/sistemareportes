<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('sistema')
             ->dontSee('jum')
             ->click('Testimonios')
             ->click('Reportes')
             ->click('Acerca de nosotros')
             ->click('Nuestros servicios')
             ->click('Generar reporte')
             ->seePageIs('/')
             ;


    }
}
