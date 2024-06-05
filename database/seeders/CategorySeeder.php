<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create(
            [
                'name' => 'Profile',
                'slug' => 'profile',
                'parent_id' => null,
            ],
        );
        $category = Category::create(
            [
                'name' => 'Layanan',
                'slug' => 'layanan',
                'parent_id' => null,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Informations',
                'slug' => 'informations',
                'parent_id' => null,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Blogs',
                'slug' => 'blogs',
                'parent_id' => null,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Event',
                'slug' => 'event',
                'parent_id' => null,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Gallery',
                'slug' => 'gallery',
                'parent_id' => null,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Albums',
                'slug' => 'albums',
                'parent_id' => null,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Rumah Quran',
                'slug' => 'rumah-quran',
                'parent_id' => 5,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Bahasa Arab',
                'slug' => 'bahasa-arab',
                'parent_id' => 5,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Pranikah',
                'slug' => 'pranikah',
                'parent_id' => 5,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Kissmis',
                'slug' => 'kissmis',
                'parent_id' => 5,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Sabtu Dhuha',
                'slug' => 'sabtu-dhuha',
                'parent_id' => 5,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Madrasah Husnul Khatimah',
                'slug' => 'madrasah-husnul-khatimah',
                'parent_id' => 5,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Pengajian Wanita Salman',
                'slug' => 'pengajian-wanita-salman',
                'parent_id' => 5,
            ]
        );
    }
}
