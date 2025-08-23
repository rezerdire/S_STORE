<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        // Create the super-admin role if it doesn't exist
        $role = Role::firstOrCreate([
            'name' => 'super-admin',
            'guard_name' => 'web',
        ]);

        // Create the user
        $user = User::firstOrCreate(
            ['email' => '1@gmail.com'],
            [
                'name' => '1',
                'password' => Hash::make('1'),
                'email_verified_at' => now(),
            ]
        );

        // Assign the super-admin role
        if (!$user->hasRole('super-admin')) {
            $user->assignRole($role);
        }

        $this->command->info('Super admin user created and role assigned!');
    }
}
