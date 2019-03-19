<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'cat_nombre' => 'Sistemas',
            'cat_created_at' => Carbon::now(),
            'cat_updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'cat_nombre' => 'Publicidad',
            'cat_created_at' => Carbon::now(),
            'cat_updated_at' => Carbon::now()
        ]);
    }
}
