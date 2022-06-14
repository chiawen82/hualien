<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TravelItem>
 */
class TravelItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categoryIdList = [
            'c4820284-e892-11ec-8fea-0242ac120002',
            'd8d41420-e892-11ec-8fea-0242ac120002',
            'dec77e3a-e892-11ec-8fea-0242ac120002',
            'e290dafc-e892-11ec-8fea-0242ac120002'
        ];

        return [
            'travel_item_id'=> Uuid::uuid4(),
            'name' => $this->faker->name(),
            'estimated_minute'=> rand(1, 240),
            'category_id'=>$categoryIdList[array_rand($categoryIdList,1)]
        ];
    }
}
