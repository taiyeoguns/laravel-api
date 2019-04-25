<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Dingo\Api\Routing\UrlGenerator;

class AppTest extends TestCase
{
    /**
     * @test
     */
    public function root_url_redirects_to_api_path()
    {
        $response = $this->get('/');
        $redirect_route = app(UrlGenerator::class)->version("v1")->route("home");

        $response->assertStatus(302);
        $response->assertRedirect($redirect_route);
    }
}
