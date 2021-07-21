<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('articles')->insert([
                'name' => 'Article ff',
                'category_id' => rand(1, 5),
                'author_id' => rand(1, 500),
                'description' => 'This is small description for articles',
                'content' => 'Main content for articles',
            ]);
        }
    }
}
