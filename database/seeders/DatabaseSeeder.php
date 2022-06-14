<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'category_id' => 'c4820284-e892-11ec-8fea-0242ac120002',
            'name' => '食'
        ]);

        \App\Models\Category::create([
            'category_id' => 'd8d41420-e892-11ec-8fea-0242ac120002',
            'name' => '衣'
        ]);

        \App\Models\Category::create([
            'category_id' => 'dec77e3a-e892-11ec-8fea-0242ac120002',
            'name' => '住'
        ]);

        \App\Models\Category::create([
            'category_id' => 'e290dafc-e892-11ec-8fea-0242ac120002',
            'name' => '行'
        ]);

        \App\Models\TravelItem::factory(50)->create();
    }
}
