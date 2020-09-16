<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\News;
use Faker\Generator as Faker;

class HomeController extends Controller
{
    public function index(Page $page, Faker $faker, News $news) {
     
        if($page->count() === 0){
            $page = new Page;
            $page->title = 'Home';
            $page->content = join(' ',$faker->words(200));
            $page->save();
        }

        if($news->count() === 0){
            $int = 0;
            while($int < 5){
                $news = new News;
                $news->title = $faker->word;
                $news->content = $faker->paragraph;
                $news->save();
                $int++;
            }
        }


        $home = $page->getPageWithTitle('Home');
        $newsItems = $news->getLatestNewsItems(4);

        $components = [
            'page' => $home,
            'newsItems' => $newsItems
        ];

        return view('home', $components);
    }
}
