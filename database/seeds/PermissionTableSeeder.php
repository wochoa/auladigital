<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // create permissions
         Permission::create(['name' => 'tarifas_index']);
         Permission::create(['name' => 'tarifas_create']);
         Permission::create(['name' => 'tarifas_edit']);
         Permission::create(['name' => 'tarifas_destroy']);
 
         // create roles and assign existing permissions
         $admin = Role::create(['name' => 'Admin']);
         $empleado = Role::create(['name' => 'Empleado']);
         $cliente = Role::create(['name' => 'Cliente']);

         // asignacion de roles y permisos
 
         $admin->givePermissionTo(
             [
                 'tarifas_index',
                 'tarifas_create',
                 'tarifas_edit',
                 'tarifas_destroy'
             ]
         );
 
        // create a demo user
        $user = Factory(App\User::class)->create([
            'name' => 'WILMER',
            'lastname' => 'OCHOA ALVARADO',
            'estado' => '1',
            'depe_id' => '2',
            'email' => 'woalvarado1@gmail.com',
            'dni'=>'42282733',
            'username'=>'WOCHOA2',
            // factory default password is 'password'
        ]);
       $user->assignRole($admin);
    }
}
