<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadminRole = Role::create([
            'name' => 'superadmin'
        ]);

        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        $kaproRole = Role::create([
            'name' => 'kapro'
        ]);

        $memberRole = Role::create([
            'name' => 'member'
        ]);

        $jamaahRole = Role::create([
            'name' => 'jamaah'
        ]);

        $userSuperAdmin = User::create([
            'name' => 'Administrator Bidang Dakwah',
            'email' => 'bidangdakwah@salmanitb.com',
            'password' => bcrypt('Bd1salmanitb')
        ]);

        $userSuperAdmin2 = User::create([
            'name' => 'Jundi Abdullah',
            'email' => 'jdi.jundi99@gmail.com',
            'password' => bcrypt('secret')
        ]);

        $userAdmin = User::create([
            'name' => 'Bidang Dakwah',
            'email' => 'bidangdakwah.salmanitb@gmail.com',
            'password' => bcrypt('LANTAI1GDKAYU')
        ]);

        $userSuperAdmin->assignRole($superadminRole);
        $userSuperAdmin2->assignRole($superadminRole);
        $userAdmin->assignRole($adminRole);
    }
}
