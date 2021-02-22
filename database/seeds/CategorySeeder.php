<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_list = config('categ');

        foreach ($categories_list as $category) {
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->description = $category['description'];
            $newCategory->save();
        }
    }
}
