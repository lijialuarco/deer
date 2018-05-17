<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    private $types = ['series', 'cookies', 'trans'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('zh_CN');
        $cates = [];

        for ($i = 1; $i <= 19; $i++) {
            $type = $this->types[ $i % 3 ];
            $createdAt = \Carbon\Carbon::now()->subDays(random_int(1, 8))->subHours(random_int(1, 20));

            $cates[] = [
                'name'        => $faker->country,
                'type'        => $type,
                'order'       => $i,
                'top'         => random_int(0, 1),
                'description' => $type == 'series' ?substr($faker->paragraph, random_int(25, 75)) : '',
                'created_at'  => $createdAt,
                'updated_at'  => $createdAt->addHours(random_int(0, 10)),
            ];
        }

        \App\Models\Category::insert($cates);

        echo "-------------------\n";
        echo "添加了19条类型数据\n";
        echo "-------------------\n";

    }
}
