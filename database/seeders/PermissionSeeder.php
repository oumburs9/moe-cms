<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

         // User permissions
         Permission::create(['name' => 'user-list']);
         Permission::create(['name' => 'user-create']);
         Permission::create(['name' => 'user-edit']);
         Permission::create(['name' => 'user-delete']);

        // org permissions
        Permission::create(['name' => 'content-list']);
        Permission::create(['name' => 'content-show']);
        Permission::create(['name' => 'content-create']);
        Permission::create(['name' => 'content-edit']);
        Permission::create(['name' => 'content-update']);
        Permission::create(['name' => 'content-delete']);

        Permission::create(['name' => 'content-publish']);
        Permission::create(['name' => 'content-unpublish']);

        // Role permissions
        Permission::create(['name' => 'role-list']);
        Permission::create(['name' => 'role-create']);
        Permission::create(['name' => 'role-edit']);
        Permission::create(['name' => 'role-delete']);

        // Settings permissions
        Permission::create(['name' => 'setting-list']);
        Permission::create(['name' => 'setting-create']);
        Permission::create(['name' => 'setting-edit']);
        Permission::create(['name' => 'setting-delete']);

        // Log viewer permissions
        Permission::create(['name' => 'view-logs']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Content-Manager']);
        $role1->givePermissionTo('content-list');
        $role1->givePermissionTo('content-show');
        $role1->givePermissionTo('content-edit');
        $role1->givePermissionTo('content-update');

        $role2 = Role::create(['name' => 'Admin']);
        $role2->givePermissionTo('role-list');
        $role2->givePermissionTo('role-create');
        $role2->givePermissionTo('role-edit');
        $role2->givePermissionTo('role-delete');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        //superadmin
        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password'=>bcrypt('test1234'),
        ]);
        $user->assignRole($role3);

        // create a new user1
        $user = \App\Models\User::factory()->create([
            'name' => 'Content Manager',
            'email' => 'content-manager@gmail.com',
            'password'=>bcrypt('test1234'),
        ]);
        $user->assignRole($role1);

        // create a new admin user2
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password'=>bcrypt('test1234'),
        ]);
        $user->assignRole($role2);
    }
}
