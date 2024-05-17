<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdottiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 100; $i++) { 
          
       
            DB::table('prodotti')->insert([
                'name' => Str::random(2),
                'price' => rand(100, 350),
                'brand' => Str::random(2),
                'IMG' => Str::random(2),
            ]); }
    }
}
