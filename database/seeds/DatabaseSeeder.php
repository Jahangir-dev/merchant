<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $faker = Faker\Factory::create();


        for($i = 0; $i < 20; $i++) {
            \App\Models\Category::create([
                'name' => $faker->name,
                'slug' => $faker->slug,
                'description' => $faker->text,
                'parent_id' => $faker->numberBetween($min = 0, $max = 20),
                'featured' => $faker->boolean($chanceOfGettingTrue = 50),
                'menu' => $faker->boolean($chanceOfGettingTrue = 50),
                'image' => $faker->slug,
                'user_id' => $faker->numberBetween($min = 1, $max = 4),
            ]);
            \App\Models\Brand::create([
                'name' => $faker->name,
                'slug' => $faker->slug,
                'logo' => $faker->slug,
                'user_id' => $faker->numberBetween($min = 1, $max = 4),
            ]);

        }

        for($i = 0; $i < 100; $i++) {
            \App\Models\Product::create([
                'brand_id' => $faker->numberBetween($min = 1, $max = 20),
                'sku' => $faker->slug,
                'name' => $faker->name,
                'slug' => $faker->slug,
                'description' => $faker->text,
                'quantity' => '10',
                'weight' => '20.32',
                'price' => '1232',
                'sale_price' => '988',
                'status' => $faker->numberBetween($min = 0, $max = 1),
                'featured' => $faker->numberBetween($min = 0, $max = 1),
                'user_id' => $faker->numberBetween($min = 1, $max = 4),
            ]);
        }
        for($i = 0; $i < 100; $i++) {
            DB::table('product_categories')->insert([
                'product_id' => $faker->numberBetween($min = 1, $max = 20),
                'category_id' => $faker->numberBetween($min = 1, $max = 20),
            ]);
        }
        //$this->call(SettingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(AttributeValuesTableSeeder::class);
    }
}
