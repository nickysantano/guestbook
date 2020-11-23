<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new User();
        $role->name = 'Nicky Santano';
        $role->email = 'nicky.santano.admin@gmail.com';
        $role->password = '$2y$10$V6kxctrd7Olud22XEdRL7.Qf8Jj96nlZQ69Q7j3AqSPefLlKncKL6';
        $role->role_id = 1; #1 admiin
        $role->save();

        $role = new User();
        $role->name = 'Adella Cummerata';
        $role->email = 'nicky.santano.creator@gmail.com';
        $role->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $role->role_id = 2; #2 creator
        $role->save();

        $role = new User();
        $role->name = 'Carlo Turner DVM';
        $role->email = 'nicky.santano.user@gmail.com';
        $role->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $role->role_id = 2; #3 user
        $role->save();

    }
}
