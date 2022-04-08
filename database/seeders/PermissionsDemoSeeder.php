<?php

//namespace Database\Seeds;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        //app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        //Permission::create(['name' => 'edit articles']);
        //Permission::create(['name' => 'delete articles']);
        //Permission::create(['name' => 'publish articles']);
        //Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        //$role1 = Role::create(['name' => 'writer']);
        //$role1->givePermissionTo('edit articles');
        //$role1->givePermissionTo('delete articles');

        //$role2 = Role::create(['name' => 'admin']);
        //$role2->givePermissionTo('publish articles');
        //$role2->givePermissionTo('unpublish articles');

        //$role3 = Role::create(['name' => 'Admin']);
        $role = Role::where('name', '=','Admin')->firstOrFail(); 
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        $user = \App\Models\User::create([
            'first_name' => 'Rodrigue',
            'last_name' => 'Cyrille',
            'email' => 'lihon1985@gmail.com',
            'password' => \Hash::make("123mv?kqzyfws#jexeux!")
        ]);
        $user->assignRole($role);
    }
}