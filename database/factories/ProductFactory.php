<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the model that this factory is for.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Definizione delle facoltà e delle materie associate
        $faculties = [
            'Ingegneria' => ['Analisi Matematica', 'Fisica Tecnica', 'Elettronica'],
            'Medicina' => ['Anatomia', 'Fisiologia', 'Patologia'],
            'Giurisprudenza' => ['Diritto Privato', 'Diritto Penale', 'Diritto Civile', 'Diritto Costituzionale'],
            'Economia' => ['Microeconomia', 'Macroeconomia', 'Statistica'],
            'Informatica' => ['Algoritmi', 'Reti di Calcolatori', 'Programmazione', 'Tecnologie Web'],
            'Lingue e Letterature Straniere' => ['Letteratura Inglese', 'Linguistica applicata', 'Cultura e Civiltà Francese']
        ];

        // Scegli una facoltà casuale
        $subject = $this->faker->randomElement(array_keys($faculties));

        // Scegli una materia associata alla facoltà
        $title = $this->faker->randomElement($faculties[$subject]);

        return [
            'user_id' => User::factory(), // Associa il prodotto a un utente creato dalla UserFactory
            'title' => $title,
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 5, 100), // Prezzo tra 5 e 500
            'subject' => $subject,
            'type' => $this->faker->randomElement(['libro', 'appunti', 'esame']),
            'pages' => $this->faker->numberBetween(50, 1000), // Numero di pagine
        ];
    }
}
