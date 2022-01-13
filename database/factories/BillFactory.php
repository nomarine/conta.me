<?php

namespace Database\Factories;

use App\Models\Bill;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Provider\Lorem as lorem;

class BillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            
            /*'description' => 'Conta de telefone',
            'bill_categories_id' => 5,
            'total_value' => 200.11
            */
            'description' => lorem::words($nb = 3, $asText = true),
            'bill_categories_id' => $this->faker->numberBetween(1,5),
            'total_value' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1500.00) 
        ];
    }
}
