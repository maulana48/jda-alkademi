<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $list_services = [
            [
                'technician_id' => 2,
                'client_id' => 6,
                'ac_id' => 1,
                'date' => date('Y-m-d', strtotime('1 Jun 2020')), // strtotime result : 1590969600, date result : 2020-06-01
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 3,
                'client_id' => 7,
                'ac_id' => 2,
                'date' => date('Y-m-d', strtotime('1 May 2020')),
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 4,
                'client_id' => 8,
                'ac_id' => 3,
                'date' => date('Y-m-d', strtotime('2 Jun 2020')),
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 5,
                'client_id' => 9,
                'ac_id' => 4,
                'date' => date('Y-m-d', strtotime('3 March 2021')),
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 2,
                'client_id' => 6,
                'ac_id' => 5,
                'date' => date('Y-m-d', strtotime('5 Dec 2021')),
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 3,
                'client_id' => 7,
                'ac_id' => 6,
                'date' => date('Y-m-d', strtotime('25 Dec 2021')),
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 4,
                'client_id' => 10,
                'ac_id' => 7,
                'date' => date('Y-m-d', strtotime('1 Jan 2022')),
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 5,
                'client_id' => 11,
                'ac_id' => 8,
                'date' => date('Y-m-d', strtotime('2 Feb 2022')),
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 2,
                'client_id' => 6,
                'ac_id' => 9,
                'date' => date('Y-m-d', strtotime('4 Apr 2022')),
                'status' => 'finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 3,
                'client_id' => 7,
                'ac_id' => 10,
                'date' => date('Y-m-d', strtotime('5 May 2023')),
                'status' => 'on repair',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 4,
                'client_id' => 12,
                'ac_id' => 11,
                'date' => date('Y-m-d', strtotime('6 Jun 2023')),
                'status' => 'on repair',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 5,
                'client_id' => 13,
                'ac_id' => 12,
                'date' => date('Y-m-d', strtotime('7 Jul 2023')),
                'status' => 'on repair',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 2,
                'client_id' => 6,
                'ac_id' => 13,
                'date' => date('Y-m-d', strtotime('8 Aug 2023')),
                'status' => 'paid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 3,
                'client_id' => 7,
                'ac_id' => 14,
                'date' => date('Y-m-d', strtotime('9 Sep 2023')),
                'status' => 'paid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'technician_id' => 4,
                'client_id' => 14,
                'ac_id' => 15,
                'date' => date('Y-m-d', strtotime('10 Oct 2023')),
                'status' => 'unpaid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Service::insert($list_services);
    }
}
