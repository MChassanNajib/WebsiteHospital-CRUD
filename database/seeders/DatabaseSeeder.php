<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pasien::factory(10)->create();

        Dokter::create([
            'kode_dokter' => 1,
            'nama_dokter' => 'Dafa Furqon',
            'keahlian' => 'Mata',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);

        Dokter::create([
            'kode_dokter' => 2,
            'nama_dokter' => 'Tono Purbo',
            'keahlian' => 'Jantung',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);

        Dokter::create([
            'kode_dokter' => 3,
            'nama_dokter' => 'Yanto Ramadhan',
            'keahlian' => 'Bedah',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);

        Dokter::create([
            'kode_dokter' => 4,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Paru-Paru',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 5,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Ginjal',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 6,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Perut',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 7,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Hati',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 8,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Hati',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 9,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Hati',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 10,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Hati',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 11,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Hati',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 12,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Hati',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);

    }
}
