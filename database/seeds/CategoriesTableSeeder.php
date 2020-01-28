<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
       $categories = ['Ideas', 'On Going', 'Completed'];

       foreach($categories as $category) {
            Category::create(['name'=>$category]);
       }
    }
}
