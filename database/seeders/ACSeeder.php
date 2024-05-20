<?php

namespace Database\Seeders;

use App\Models\AC;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ACSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $list_ac = [
            [
                'name' => 'LG-1',
                'brand' => 'LG',
                'pk' => 0.5,
                'price' => 50000,
            ],
            [
                'name' => 'Sharp-2',
                'brand' => 'Sharp',
                'pk' => 1,
                'price' => 60000,
            ],
            [
                'name' => 'Panasonic-3',
                'brand' => 'Panasonic',
                'pk' => 2,
                'price' => 70000,
            ],
            [
                'name' => 'Samsung-4',
                'brand' => 'Samsung',
                'pk' => 0.5,
                'price' => 80000,
            ],
            [
                'name' => 'Daikin-5',
                'brand' => 'Daikin',
                'pk' => 1,
                'price' => 90000,
            ],
            [
                'name' => 'Gree-6',
                'brand' => 'Gree',
                'pk' => 2,
                'price' => 100000,
            ],
            [
                'name' => 'Polytron-7',
                'brand' => 'Polytron',
                'pk' => 0.5,
                'price' => 110000,
            ],
            [
                'name' => 'Electrolux-8',
                'brand' => 'Electrolux',
                'pk' => 1,
                'price' => 120000,
            ],
            [
                'name' => 'Aqua-9',
                'brand' => 'Aqua',
                'pk' => 2,
                'price' => 130000,
            ],
            [
                'name' => 'Midea-10',
                'brand' => 'Midea',
                'pk' => 0.5,
                'price' => 140000,
            ],
            [
                'name' => 'LG-11',
                'brand' => 'LG',
                'pk' => 1,
                'price' => 200000,
            ],
            [
                'name' => 'Sharp-12',
                'brand' => 'Sharp',
                'pk' => 2,
                'price' => 210000,
            ],
            [
                'name' => 'Panasonic-13',
                'brand' => 'Panasonic',
                'pk' => 0.5,
                'price' => 220000,
            ],
            [
                'name' => 'Samsung-14',
                'brand' => 'Samsung',
                'pk' => 1,
                'price' => 230000,
            ],
            [
                'name' => 'Daikin-15',
                'brand' => 'Daikin',
                'pk' => 2,
                'price' => 240000,
            ],
            [
                'name' => 'Gree-16',
                'brand' => 'Gree',
                'pk' => 0.5,
                'price' => 250000,
            ],
            [
                'name' => 'Polytron-17',
                'brand' => 'Polytron',
                'pk' => 1,
                'price' => 260000,
            ],
            [
                'name' => 'Electrolux-18',
                'brand' => 'Electrolux',
                'pk' => 2,
                'price' => 270000,
            ],
            [
                'name' => 'Aqua-19',
                'brand' => 'Aqua',
                'pk' => 0.5,
                'price' => 280000,
            ],
            [
                'name' => 'Midea-20',
                'brand' => 'Midea',
                'pk' => 1,
                'price' => 290000,
            ],
        ];

        AC::insert($list_ac);
    }
}
