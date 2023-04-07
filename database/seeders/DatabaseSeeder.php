<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Produk;
use App\Models\Category;
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
        // \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Gugus Pradita',
        //     'email' => 'guguspradita19@gmail.com',
        //     'password' => bcrypt('rahasia'),
        // ]);

        User::create([
            'name' => 'Gugus Pradita',
            'email' => 'guguspradita19@gmail.com',
            'password' => bcrypt('rahasia'),
        ]);

        User::create([
            'name' => 'Ryan Ardiansyah',
            'email' => 'ryanardiansyah@gmail.com',
            'password' => bcrypt('rahasia'),
        ]);

        User::create([
            'name' => 'Murahkom Official',
            'email' => 'murahkomofficial@gmail.com',
            'password' => bcrypt('Murahkom@1901'),
        ]);

    }
}
