<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function can_create_a_news_item()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'title' => $this->faker->word,
            'content' => $this->faker->paragraph,
        ];

        $this->post('/news', $attributes);
        $this->assertDatabaseHas('news', $attributes);
        $this->get('/')->assertSee($attributes['title']);
    }
}