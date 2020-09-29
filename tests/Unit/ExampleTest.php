<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $data = ['nome' => "abccc", 'email' => "abbb@aaa.com", 'numero' => 2, 'quantidade_ap' => 3];

        $response = $this->post('/condominio/store', $data);

        $this->assertNotEmpty($response);

        //$this->assertTrue(true);
    }
}
