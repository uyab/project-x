<?php

namespace Tests\Feature\Http\Controllers\Mission;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Mission\MissionController
 */
class MissionControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('mission.index'));

        $response->assertOk();
        $response->assertViewIs('mission.index');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('mission.show', ['mission' => $mission]));

        $response->assertOk();
        $response->assertViewIs('mission.show');
        $response->assertViewHas('mission');

        // TODO: perform additional assertions
    }

    // test cases...
}
