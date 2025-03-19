<?php

namespace Tests\Feature;

use Tests\TestCase;

class PlainControllerTest extends TestCase
{
    public function testGetPlains(): void
    {
        $response = $this->getJson('/api/v1/plain', ['accept' => 'application/json']);

        $response->assertStatus(200);

        $expectedData = [
            'AeropraktA24' => 5,
            'Boeing747' => 2,
            'CurtissNC4' => 3,
        ];
        $response->assertExactJson($expectedData);
    }
}
