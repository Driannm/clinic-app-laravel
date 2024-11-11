<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'no_dokter' => fake() -> unique() -> randomNumber(8),
                'nama' => 'Dr. ' . fake()->name() . ', Sp.' . fake()->randomElement(['A', 'B', 'D', 'J', 'P', 'T']),
                'umur' => fake() -> numberBetween(20, 25),
                'jenis_kelamin' => fake() -> randomElement(['Laki-Laki', 'Perempuan']),
                'kategori' => fake() -> randomElement(['Umum', 'Spesialis Anak', 'Spesialis Bedah', 'Spesialis Jantung', 'Spesialis Kulit']),
                'keahlian' => fake() -> randomElement(['Bedah Umum', 'Kardiologi', 'Pediatri', 'Ortopedi', 'Dermatologi']),
                'jadwal_praktek' => fake() -> randomElement(['Senin - Selasa', 'Rabu - Kamis', 'Selasa - Kamis', 'Sabtu - Senin', 'Jumat - Sabtu']),
            ];
    }
}