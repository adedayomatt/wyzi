<?php

use App\BusinessCategory;
use Illuminate\Database\Seeder;

class BusinessCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessCategory::create([
            'name' => 'uncategorized',
            'description' => 'Any business can belong to this category',
            'slug' => 'uncategorized',
            'approved' => 1
        ]);
    }
}
