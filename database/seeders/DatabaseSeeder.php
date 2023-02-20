<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Produk::create([
            "nama_produk" => "Msi Modern 14 Intel Core i3",
            "slug" => "msi-modern-14-intel-core-i3",
            "harga" => 6500000,
            "deskripsi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea dolore inventore, necessitatibus consectetur autem debitis, dicta, quidem accusantium fuga nisi molestiae provident maiores! Aperiam sequi optio facilis officiis, similique ad expedita quis doloribus? Similique dolore numquam iusto! Maiores sit atque labore hic unde numquam architecto temporibus harum perspiciatis ipsam voluptas dolorum, autem eos quis, placeat blanditiis. Tenetur atque consequuntur molestiae hic, voluptas laborum odit dignissimos quod repellat autem amet ex quas reprehenderit illum quam similique, maiores velit deleniti facilis alias blanditiis, non praesentium veritatis dolor? Cumque omnis facilis enim, quaerat quidem, soluta sit atque minima ab, nesciunt earum beatae repudiandae?",
            "is_active" => 1,
            "category_id" => 1,
        ]);

        Produk::create([
            "nama_produk" => "Msi Modern 14 Ryzen 3",
            "slug" => "msi-modern-14-ryzen-3",
            "harga" => 6199000,
            "deskripsi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea dolore inventore, necessitatibus consectetur autem debitis, dicta, quidem accusantium fuga nisi molestiae provident maiores! Aperiam sequi optio facilis officiis, similique ad expedita quis doloribus? Similique dolore numquam iusto! Maiores sit atque labore hic unde numquam architecto temporibus harum perspiciatis ipsam voluptas dolorum, autem eos quis, placeat blanditiis. Tenetur atque consequuntur molestiae hic, voluptas laborum odit dignissimos quod repellat autem amet ex quas reprehenderit illum quam similique, maiores velit deleniti facilis alias blanditiis, non praesentium veritatis dolor? Cumque omnis facilis enim, quaerat quidem, soluta sit atque minima ab, nesciunt earum beatae repudiandae?",
            "is_active" => 1,
            "category_id" => 1,
        ]);

        Produk::create([
            "nama_produk" => "Msi Modern 14 Ryzen 5",
            "slug" => "msi-modern-14-ryzen-5",
            "harga" => 8999000,
            "deskripsi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea dolore inventore, necessitatibus consectetur autem debitis, dicta, quidem accusantium fuga nisi molestiae provident maiores! Aperiam sequi optio facilis officiis, similique ad expedita quis doloribus? Similique dolore numquam iusto! Maiores sit atque labore hic unde numquam architecto temporibus harum perspiciatis ipsam voluptas dolorum, autem eos quis, placeat blanditiis. Tenetur atque consequuntur molestiae hic, voluptas laborum odit dignissimos quod repellat autem amet ex quas reprehenderit illum quam similique, maiores velit deleniti facilis alias blanditiis, non praesentium veritatis dolor? Cumque omnis facilis enim, quaerat quidem, soluta sit atque minima ab, nesciunt earum beatae repudiandae?",
            "is_active" => 1,
            "category_id" => 2,
        ]);

        Produk::create([
            "nama_produk" => "Msi Modern 14 Ryzen 7",
            "slug" => "msi-modern-14-ryzen-7",
            "harga" => 11999000,
            "deskripsi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea dolore inventore, necessitatibus consectetur autem debitis, dicta, quidem accusantium fuga nisi molestiae provident maiores! Aperiam sequi optio facilis officiis, similique ad expedita quis doloribus? Similique dolore numquam iusto! Maiores sit atque labore hic unde numquam architecto temporibus harum perspiciatis ipsam voluptas dolorum, autem eos quis, placeat blanditiis. Tenetur atque consequuntur molestiae hic, voluptas laborum odit dignissimos quod repellat autem amet ex quas reprehenderit illum quam similique, maiores velit deleniti facilis alias blanditiis, non praesentium veritatis dolor? Cumque omnis facilis enim, quaerat quidem, soluta sit atque minima ab, nesciunt earum beatae repudiandae?",
            "is_active" => 1,
            "category_id" => 2,
        ]);

        Category::create([
            "nama_category" => "Laptop",
            "slug" => "laptop",
        ]);

        Category::create([
            "nama_category" => "PC Desktop",
            "slug" => "pc-desktop",
        ]);
    }
}
