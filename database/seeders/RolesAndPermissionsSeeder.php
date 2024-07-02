<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Création des rôles uniquement s'ils n'existent pas déjà
       $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
       $roleAssociation = Role::firstOrCreate(['name' => 'association']);
       $roleUser = Role::firstOrCreate(['name' => 'user']);

       // Création des permissions uniquement si elles n'existent pas déjà
       $permissionCreateEvent = Permission::firstOrCreate(['name' => 'create event']);
       $permissionEditEvent = Permission::firstOrCreate(['name' => 'edit event']);
       $permissionDeleteEvent = Permission::firstOrCreate(['name' => 'delete event']);
       $permissionViewEvent = Permission::firstOrCreate(['name' => 'view event']);
       $permissionManageUsers = Permission::firstOrCreate(['name' => 'manage users']);

       // Attribution des permissions aux rôles
       $roleAdmin->syncPermissions([$permissionCreateEvent, $permissionEditEvent, $permissionDeleteEvent, $permissionViewEvent, $permissionManageUsers]);
       $roleAssociation->syncPermissions([$permissionCreateEvent, $permissionEditEvent, $permissionDeleteEvent, $permissionViewEvent]);
       $roleUser->syncPermissions([$permissionViewEvent]);
    }
}
