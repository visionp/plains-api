<?php

namespace Tests\Feature;

use App\Services\PlainHangar\PlainHangarContract;
use Tests\TestCase;

class PlainControllerTest extends TestCase
{
    public function testGetPlains(): void
    {
        $plainHangarMock = $this->createMock(PlainHangarContract::class);
        $expectedData = [
            'AeropraktA24' => 5,
            'Boeing747' => 2,
            'CurtissNC4' => 3,
        ];
        $plainHangarMock->expects($this->once())
            ->method('getCountPlains')
            ->willReturn($expectedData);

        $this->app->bind(PlainHangarContract::class, function () use ($plainHangarMock) {
            return $plainHangarMock;
        });

        $response = $this->getJson('/api/v1/plain', ['accept' => 'application/json']);

        $response->assertStatus(200);
        $response->assertExactJson($expectedData);
    }
}
