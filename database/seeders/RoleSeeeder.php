<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $roles =[
            'tim_manajemen',
            'kabinet_sinovak',
            'tim_pendampingan_wilayah',
            'relawan',
            'calon_relawan',
          ];;
    
          foreach ($roles as $role) {
            Role::create(['name' => $role]);
          }
    }
}
