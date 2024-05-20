<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $list_role = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Technician',
            ],
            [
                'name' => 'Client',
            ],
        ];

        Role::insert($list_role);
    }
}
