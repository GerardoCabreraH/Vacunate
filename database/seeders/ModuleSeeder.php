<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Module::create([
            'code' => 'M00122',
            'slug' => 'm00122',
            'city' => 'Melchor Ocampo',
            'state' => 'Nuevo León',
            'date_module' => '2022-03-15',
            'brand' => 'Astrazeneca',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $user = Module::create([
            'code' => 'M00122',
            'slug' => 'm00122',
            'city' => 'Los Herrera',
            'state' => 'Nuevo León',
            'date_module' => '2022-03-16',
            'brand' => 'Astrazeneca',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $user = Module::create([
            'code' => 'M00122',
            'slug' => 'm00122',
            'city' => 'General Treviño',
            'state' => 'Nuevo León',
            'date_module' => '2022-03-17',
            'brand' => 'Astrazeneca',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $user = Module::create([
            'code' => 'M00122',
            'slug' => 'm00122',
            'city' => 'Linares',
            'state' => 'Nuevo León',
            'date_module' => '2022-03-17',
            'brand' => 'Astrazeneca',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $user = Module::create([
            'code' => 'M00122',
            'slug' => 'm00122',
            'city' => 'General Bravo',
            'state' => 'Nuevo León',
            'date_module' => '2022-03-18',
            'brand' => 'Astrazeneca',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
