<?php

namespace Database\Factories;

use App\Models\vendas;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = vendas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'itens' => $this->faker->word,
            'datavendas' => $this->faker->radomDigit,
            'preçovendas' => $this->faker->radomDigit,
            'desconto' => $this->faker->radomDigit,
            'preço total' =>$this->faker->radomDigit,
            'itenvendidos' => $this->faker->radomDigit,
            'user_id' => $this->faker->radomDigit
        ];
    }
}
