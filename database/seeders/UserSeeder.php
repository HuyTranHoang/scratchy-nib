<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        Role::factory()->createMany([
            [
                'role_name' => 'Admin'
            ],
            [
                'role_name' => 'Member'
            ]
        ]);

        User::factory()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '1',
                'created_at' => Carbon::now()->subMinutes(175),
                'updated_at' => Carbon::now()->subMinutes(175),

            ],
            [
                'name' => 'Member',
                'email' => 'member@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(173),
                'updated_at' => Carbon::now()->subMinutes(173),
            ],
            [
                'name' => 'Trần Hoàng Huy',
                'email' => 'HTH@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '1',
                'created_at' => Carbon::now()->subMinutes(171),
                'updated_at' => Carbon::now()->subMinutes(171),
            ],
            [
                'name' => 'Huỳnh Chí Bảo',
                'email' => 'BHC@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '1',
                'created_at' => Carbon::now()->subMinutes(169),
                'updated_at' => Carbon::now()->subMinutes(169),
            ],
            [
                'name' => 'Trần Phát Đạt',
                'email' => 'DTP@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '1',
                'created_at' => Carbon::now()->subMinutes(167),
                'updated_at' => Carbon::now()->subMinutes(167),
            ],
            [
                'name' => 'Sơn Tùng',
                'email' => 'TS@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(165),
                'updated_at' => Carbon::now()->subMinutes(165),
            ],
            [
                'name' => 'Ngọc Ái',
                'email' => 'AN@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(163),
                'updated_at' => Carbon::now()->subMinutes(163),
            ],
            [
                'name' => 'Võ Công Tình',
                'email' => 'TVCH@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(161),
                'updated_at' => Carbon::now()->subMinutes(161),
            ],
            [
                'name' => 'Thái Bảo',
                'email' => 'BT@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(159),
                'updated_at' => Carbon::now()->subMinutes(159),
            ],
            [
                'name' => 'Lê Vương',
                'email' => 'VL@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(157),
                'updated_at' => Carbon::now()->subMinutes(157),
            ],
            [
                'name' => 'Nguyễn Thị Kim Anh',
                'email' => 'ANTK@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(155),
                'updated_at' => Carbon::now()->subMinutes(155),
            ],
            [
                'name' => 'Lê Công Vinh',
                'email' => 'VLC@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(153),
                'updated_at' => Carbon::now()->subMinutes(153),
            ],
            [
                'name' => 'Ngọc Sơn',
                'email' => 'SN@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(151),
                'updated_at' => Carbon::now()->subMinutes(151),
            ],
            [
                'name' => 'Minh Thân',
                'email' => 'TM@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2',
                'created_at' => Carbon::now()->subMinutes(149),
                'updated_at' => Carbon::now()->subMinutes(149),
            ]

        ]);
    }
}
