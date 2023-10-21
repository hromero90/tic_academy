<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     
    public function run(): void
    {
        //
        Permission::create([
            'name' => 'Crear cursos'
        ]);

        Permission::create([
            'name' => 'Leer cursos'
        ]);

        Permission::create([
            'name' => 'Actualizar cursos'
        ]);

        Permission::create([
            'name' => 'Eliminar cursos'
        ]);
    }
}
