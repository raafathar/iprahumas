<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Str;
use App\Helper\standartData;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class InstansiTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;
    /**
     * A basic unit test example.
     */
    public function test_create(): void
    {
        $post = [
            'i_nama' => 'post',
        ];

        $response = $this->post(route("instansi.store"), $post);
        $response->dd();
        $response->assertStatus(201);
    }
}
