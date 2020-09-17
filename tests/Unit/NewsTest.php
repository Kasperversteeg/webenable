<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\News;

class NewsTest extends TestCase
{
    use RefreshDatabase;

   /** @test */
    public function count_news_items()
    {
        $this->withoutExceptionHandling();

        $count = News::all()->count();
        $news = new News();

        $this->assertEquals($count, $news->count());

    }

}


