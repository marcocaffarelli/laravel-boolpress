<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) { 
            $newArticle = new Article();
            $newArticle->title = $faker->sentence(4);
            $newArticle->description = $faker->realText();
            $newArticle->save();
        }
    }
}
