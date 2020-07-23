<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class BarangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $foto = [];

        for ($i = 1; $i < 6; $i++) {
            array_push($foto, "besi$i.png", "botol$i.png", "kardus$i.png");
        }

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'users_id'  => '3',
                'foto'      => $faker->randomElement($foto),
                'nama'      => $faker->sentence(5),
                'slug'      => $faker->slug,
                'kategori'  => $faker->randomElement(['Botol Plastik', 'Besi Kiloan', 'Kain Perca', 'Kardus Indomie']),
                'deskripsi' => $faker->text,
                'harga' => $faker->randomNumber(5),
                'berat' => $faker->randomNumber(3),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ];

            // Using Query Builder
            $this->db->table('barang')->insert($data);
        }
    }
}
