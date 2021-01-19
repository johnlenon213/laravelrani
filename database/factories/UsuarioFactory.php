<?php

namespace Database\Factories;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'login' => $this->faker->word,
            'senha' => $this->faker->radomDigit,
            'cargo' => $this->faker->word,
            'nivel de acesso'=> $this->faker->radomDigit,
            'user_id' => $this->faker->radomDigit
        ];
    }
}
