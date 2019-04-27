<?php

namespace Tests\Feature\V1;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function users_endpoint_displays_list_of_users()
    {
        factory(User::class)->create();

        $response = $this->get("/api/users");

        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data" => [
                [
                    "id",
                    "first_name",
                    "last_name",
                    "email",
                    "phone",
                    "created",
                    "updated"
                ]
            ]
        ]);
    }
}
