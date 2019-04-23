<?php

namespace Tests\Feature;

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
        $response = $this->get('http://127.0.0.1:8000/');

        $response->assertStatus(200);
    }
    public function testAPITest()
    {
        $response = $this->get('http://127.0.0.1:8000/api/users/list');

        $response->assertStatus(200);
    }
    public function testAPITest2()
    {
        $response = $this->get('http://127.0.0.1:8000/api/users/show/{id}');

        $response->assertStatus(200);
    }
}
