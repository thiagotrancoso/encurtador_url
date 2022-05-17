<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShortenUrlTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function shorten_url_with_all_parameters()
    {
        $response = $this->postJson(route('api.shorten'), [
            "original_url" => "http://www.google.com",
            "code_url" => "teste",
            "expiration" => "30/05/2022"
        ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function shorten_url_with_mandatory_parameters_only()
    {
        $response = $this->postJson(route('api.shorten'), [
            "original_url" => "http://www.google.com"
        ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function shorten_url_requires_original_url_parameter()
    {
        $response = $this->postJson(route('api.shorten'), [
            "original_url" => ""
        ]);

        $response->assertStatus(400);
    }
}
