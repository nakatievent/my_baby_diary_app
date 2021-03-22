<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PostControllerTest extends TestCase
{
    // use RefreshDatabase;

    public function testIndex()
    {
        // $response = $this->actingAS(User::find(5))->get(route('posts.index'));

        // $response->assertStatus(200)
        //          ->assertViewIs('posts.index');
    }
}
