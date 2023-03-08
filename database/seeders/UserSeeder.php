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
                'role_name' => 'admin'
            ],
            [
                'role_name' => 'member'
            ]
        ]);

        User::factory()->createMany([
            [
                'name' => 'Trần Hoàng Huy',
                'email' => 'HTH@example.com',
                'password' => Hash::make('test'),
                'role_id' => '1'
            ],
            [
                'name' => 'Huỳnh Chí Bảo',
                'email' => 'BHC@example.com',
                'password' => Hash::make('test'),
                'role_id' => '1'
            ],
            [
                'name' => 'Trần Phát Đạt',
                'email' => 'DTP@example.com',
                'password' => Hash::make('test'),
                'role_id' => '1'
            ],
            [
                'name' => 'Lệ Thị Bưởi',
                'email' => 'BLT@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lê Văn Tèo',
                'email' => 'TLV@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Võ Công Tình',
                'email' => 'TVCH@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lê Thị Bé',
                'email' => 'LTB@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lệ Hồng Cánh Sen',
                'email' => 'SLHC@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Nguyễn Thị Lá É',
                'email' => 'ENTL@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lê Công Vinh',
                'email' => 'VLC@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ]
        ]);
    }
}
