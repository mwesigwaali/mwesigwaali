<?php

namespace Database\Factories;

use App\Models\Pager;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pager::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject' => 'Eating breakfast', //Generates a fake sentence
            'message' => $this->faker->paragraph(30)
            //
        ];
    }
}
