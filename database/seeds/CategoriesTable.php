<?php

use Illuminate\Database\Seeder;
use  App\Categories;
class CategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = new Categories();
    }
}
