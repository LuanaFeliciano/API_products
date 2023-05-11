<?php

namespace Database\Seeders;

use App\Models\Fabrica;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $fabrica = Fabrica::all()->pluck('fabrica')->toArray();

        for ($i = 0; $i < 20; $i++) {
            DB::table('produtos')->insert([
                'referencia' => rand(1000000000, 9999999999),
                'descricao' => $faker->text(50),
                'garantia' => rand(1, 100),
                'ativo' => $faker->boolean(),
                'fabrica_id' => $faker->randomElement($fabrica),
            ]);
        }
    }
}
