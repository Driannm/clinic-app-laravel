<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poli>
 */
class PoliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()
                ->unique()
                ->randomElement(['Poli Mata', 'Poli Umum', 'Poli Gigi', 'Poli Anak', 'Poli Jantung', 'Poli Saraf', 'Poli Kulit', 'Poli Bedah']),
            'biaya' => fake()->unique()->randomElement([50000, 75000, 100000, 125000, 150000, 200000, 250000, 300000]), // Biaya yang berbeda-beda
            'keterangan' => function (array $attributes) {
                // Menyesuaikan keterangan dengan nama poli
                switch ($attributes['nama']) {
                    case 'Poli Mata':
                        return 'Pemeriksaan kesehatan mata dan penanganan gangguan penglihatan.';
                    case 'Poli Umum':
                        return 'Pelayanan medis umum untuk seluruh anggota keluarga.';
                    case 'Poli Gigi':
                        return 'Perawatan gigi, termasuk pencabutan dan perawatan saluran akar.';
                    case 'Poli Anak':
                        return 'Pelayanan kesehatan anak, termasuk vaksinasi dan pemeriksaan tumbuh kembang.';
                    case 'Poli Jantung':
                        return 'Pemeriksaan kesehatan jantung, termasuk EKG dan echocardiogram.';
                    case 'Poli Saraf':
                        return 'Pelayanan kesehatan terkait gangguan saraf dan neurologis.';
                    case 'Poli Kulit':
                        return 'Pemeriksaan dan pengobatan masalah kulit seperti jerawat, eksim, dan psoriasis.';
                    case 'Poli Bedah':
                        return 'Pemeriksaan dan penanganan masalah yang memerlukan tindakan bedah.';
                    default:
                        return 'Deskripsi pelayanan medis.';
                }
            },
        ];
    }
}
