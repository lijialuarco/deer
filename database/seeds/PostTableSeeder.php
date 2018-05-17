<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = \App\Models\Category::all();
        $faker = \Faker\Factory::create('zh_CN');
        $posts = [];

        foreach ($cates as $cate) {
            $count = random_int(1, 10);
            for ($i = 1; $i <= $count; $i++) {
                $createdAt = \Carbon\Carbon::now()->subDays(random_int(1, 8))->subHours(random_int(1, 20));
                $posts[] = [
                    'title'      => substr($faker->paragraph, random_int(5, 15)),
                    'content'    => $faker->text,
                    'order'      => $i,
                    'cate_id'    => $cate->id,
                    'head_image' => $faker->imageUrl(),
                    'created_at' => $createdAt,
                    'updated_at' => $createdAt->addHours(random_int(0, 10)),
                ];
            }


        }

        \App\Models\Post::insert($posts);

        echo "-------------------\n";
        echo "添加了" . count($posts) . "篇文章\n";
        echo "-------------------\n";
    }
}