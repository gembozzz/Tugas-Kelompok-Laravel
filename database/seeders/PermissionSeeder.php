<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name' => 'admin']
        );

        $role_writer = Role::updateOrCreate(
            [
                'name' => 'writer'
            ],
            ['name' => 'writer']
        );

        $role_guest = Role::updateOrCreate(
            [
                'name' => 'guest'
            ],
            ['name' => 'guest']
        );

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            ['name' => 'view_dashboard']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_chart_on_dashboard',
            ],
            ['name' => 'view_chart_on_dashboard']
        );

        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_writer->givePermissionTo($permission2);

        $user =User::find(1);
        $user2 =User::find(2);

        $user->assignRole('admin');
        $user2->assignRole('writer');
    }
}
