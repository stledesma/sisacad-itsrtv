<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Administrador']);
        $teacher = Role::create(['name' => 'Docente']);
        $student = Role::create(['name' => 'Estudiante']);
        $counter = Role::create(['name' => 'Contabilidad']);
    }
}
