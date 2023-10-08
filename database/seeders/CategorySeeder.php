<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categorys = [
            'makanan',
            'minuman'
        ];

        foreach ($categorys as $category) {
            Category::create([
                "name" => $category,
            ]);
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
