<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
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
                'role_id' => '1'
            ],
            [
                'name' => 'Member',
                'email' => 'member@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Trần Hoàng Huy',
                'email' => 'HTH@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '1'
            ],
            [
                'name' => 'Huỳnh Chí Bảo',
                'email' => 'BHC@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '1'
            ],
            [
                'name' => 'Trần Phát Đạt',
                'email' => 'DTP@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '1'
            ],
            [
                'name' => 'Sơn Tùng',
                'email' => 'TS@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Ngọc Ái',
                'email' => 'AN@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Võ Công Tình',
                'email' => 'TVCH@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Thái Bảo',
                'email' => 'BT@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lê Vương',
                'email' => 'VL@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Nguyễn Thị Kim Anh',
                'email' => 'ANTK@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lê Công Vinh',
                'email' => 'VLC@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Ngọc Sơn',
                'email' => 'SN@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ],
            [
                'name' => 'Minh Thân',
                'email' => 'TM@example.com',
                'password' => Hash::make('1234@abc'),
                'role_id' => '2'
            ]

        ]);
    }
}
