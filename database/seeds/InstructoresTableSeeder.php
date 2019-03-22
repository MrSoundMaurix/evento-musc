<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InstructoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructores')->insert([
            'ins_pais' => 'Ecuador',
            'ins_cedula' => '1003840541',
            'ins_nombres' => 'Luz Amanda',
            'ins_apellidos' => 'Córdova Quinchiguango',
            'ins_email' => 'lacordovaq@utn.edu.ec',
            'ins_cv' => 'Pdf',
            'ins_created_at' => Carbon::now(),
            'ins_updated_at' => Carbon::now()
        ]);
    }
}
