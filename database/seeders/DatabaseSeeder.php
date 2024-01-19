<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

Use App\Models\City;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        City::insert([
            'name' => 'Jakarta',
        ]);
        City::insert([
            'name' => 'Tangerang',
        ]);
        City::insert([
            'name' => 'Bekasi',
        ]);
        City::insert([
            'name' => 'Depok',
        ]);
        City::insert([
            'name' => 'Bogor',
        ]);
        City::insert([
            'name' => 'Sukabumi',
        ]);
        City::insert([
            'name' => 'Purwakarta',
        ]);
        City::insert([
            'name' => 'Cirebon',
        ]);
        City::insert([
            'name' => 'Indramayu',
        ]);
        City::insert([
            'name' => 'Tasikmalaya',
        ]);
        City::insert([
            'name' => 'Salatiga',
        ]);
        City::insert([
            'name' => 'Magelang',
        ]);
        City::insert([
            'name' => 'Kudus',
        ]);
        City::insert([
            'name' => 'Surabaya',
        ]);
        City::insert([
            'name' => 'Madiun',
        ]);
        City::insert([
            'name' => 'Banyuwangi',
        ]);
        City::insert([
            'name' => 'Bali',
        ]);
        City::insert([
            'name' => 'Kupang',
        ]);
        City::insert([
            'name' => 'Banda Aceh',
        ]);
        City::insert([
            'name' => 'Padang',
        ]);
        City::insert([
            'name' => 'Pangkal Pinang',
        ]);
        City::insert([
            'name' => 'Banjarmasin',
        ]);
        City::insert([
            'name' => 'Samarinda',
        ]);
        City::insert([
            'name' => 'Makassar',
        ]);
        City::insert([
            'name' => 'Kendari',
        ]);
        City::insert([
            'name' => 'Manado',
        ]);
        City::insert([
            'name' => 'Gorontalo',
        ]);
        City::insert([
            'name' => 'Palu',
        ]);
    }
}
