<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The name of the model that the factory corresponds to.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password predefinita
            'role' => $this->faker->randomElement(['admin', 'utente', 'ospite']),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indica che l'utente è un amministratore.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function admin(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'admin',
        ]);
    }

    /**
     * Indica che l'utente è un normale utente.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function utente(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'utente',
        ]);
    }

    /**
     * Indica che l'utente è un ospite.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function ospite(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'ospite',
        ]);
    }
}
