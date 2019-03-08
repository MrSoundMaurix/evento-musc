<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'cedula' => '1002003001',
            'name' => 'SuperAdm',
            'apellido' => 'Root',
            'email' => 'root@hotmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'cedula' => '1003840541',
            'name' => 'Luz Amanda',
            'apellido' => 'Córdova Quinchiguango', 
            'email' => 'lacordovaq@utn.edu.ec',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'cedula' => '1003969852',
            'name' => 'René Mauricio',
            'apellido' => 'Ipiales Gubio', 
            'email' => 'rmipialesg@utn.edu.ec',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'cedula' => '1003088653',
            'name' => 'Elvis David',
            'apellido' => 'Moreta Moreta', 
            'email' => 'edmoreta@utn.edu.ec',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'cedula' => '1004228282',
            'name' => 'Roger Alexander',
            'apellido' => 'Vaca Ponce', 
            'email' => 'ravacap@utn.edu.ec',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

         DB::table('roles')->insert([
            'name' => 'root',
            'display_name' => 'Root',
           'description' => 'Super Administrador de la página informativa MUSC',
            'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
         ]);

         DB::table('roles')->insert([
             'name' => 'administrador',
             'display_name' => 'Administrador',
             'description' => 'Administrador de la página informativa MUSC',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
         ]);

        DB::table('roles')->insert([
             'name' => 'usuario',
           'display_name' => 'Usuario',
             'description' => 'Usuario bodeguero del sistema de inventario',
             'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1',
        ]);
        DB::table('role_user')->insert([
            'user_id' => '2',
            'role_id' => '2',
        ]);
        DB::table('role_user')->insert([
            'user_id' => '3',
            'role_id' => '3',
        ]);
        DB::table('role_user')->insert([
            'user_id' => '4',
            'role_id' => '3',
        ]);
        DB::table('role_user')->insert([
            'user_id' => '5',
            'role_id' => '2',
        ]);
       
        
       
    }
}
