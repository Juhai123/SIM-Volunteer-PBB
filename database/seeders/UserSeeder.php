<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //tim manajemen
         $data = [
            'name' => 'Tim Manajemen',
            'email' => 'tm@gmail.com',
            'password' => Hash::make('tmpbb2022'),
        ];

        $user = User::create($data);
        $user->assignRole('tim_manajemen');

        //kabinet sinovak
        $data = [
            'name' => 'Kabinet Sinovak',
            'email' => 'ks@gmail.com',
            'password' => Hash::make('kspbb2022'),
        ];

        $user = User::create($data);
        $user->assignRole('kabinet_sinovak');
        

        //tim pendampingan wilayah
        $data = [
            'name' => 'Tim Pendampingan Wilayah',
            'email' => 'tpw@gmail.com',
            'password' => Hash::make('pwpbb2022'),
        ];

        $user = User::create($data);
        $user->assignRole('tim_pendampingan_wilayah');

         //relawan
         $data = [
            'name' => 'Relawan',
            'email' => 'rmb@gmail.com',
            'password' => Hash::make('rpbb2022'),
        ];

        $user = User::create($data);
        $user->assignRole('relawan');

        //calon relawan
        $data = [
            'name' => 'Calon Relawan',
            'email' => 'cr@gmail.com',
            'password' => Hash::make('crpbb2022'),
        ];

        $user = User::create($data);
        $user->assignRole('calon_relawan');

    }
}
