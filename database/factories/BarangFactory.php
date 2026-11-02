<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null,
            'nama' => $this->faker->words(3, true),
            'kategori' => $this->faker->randomElement([
                'Elektronik',
                'Buku',
                'Pakaian',
                'Aksesori',
                'Lainnya'
            ]),
            'harga' => $this->faker->numberBetween(10000, 500000),
            'kondisi' => $this->faker->randomElement([
                'Baru',
                'Bekas - Sangat Baik',
                'Bekas - Baik',
                'Bekas - Cukup'
            ]),
            'deskripsi' => $this->faker->paragraph(),
            'gambar' => null,
            'lokasi' => 'Area Kampus UNIMUS',
            'status' => 'tersedia',
        ];
    }
}
