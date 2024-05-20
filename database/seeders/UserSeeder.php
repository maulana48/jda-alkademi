<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = [
            'name' => 'Fulan',
            'email' => 'fulan@gmail.com',
            'password' => bcrypt('password'),
            'gender' => 'L',
            'photo' => 'users/profiles/dolor.png',
            'address' => 'Jl. Cisitu Indah VI no 6',
            'role' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];

        $list_user = [
            [
                'name' => 'Fulanah',
                'email' => 'fulanah@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'P',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ardi',
                'email' => 'ardi@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Samsudin',
                'email' => 'samsudin@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Eko',
                'email' => 'eko@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sugeng',
                'email' => 'sugeng@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alif',
                'email' => 'alif@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Siti',
                'email' => 'siti@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'P',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Juminten',
                'email' => 'juminten@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'P',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Paijo',
                'email' => 'paijo@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Saifuddin',
                'email' => 'saifuddin@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Daffa',
                'email' => 'daffa@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Akbar',
                'email' => 'akbar@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rafli',
                'email' => 'rafli@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'L',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rini',
                'email' => 'rini@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'P',
                'photo' => 'users/profiles/dolor.png',
                'address' => 'Jl. Cisitu Indah VI no 6',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        User::insert($admin);
        User::insert($list_user);
    }
}
