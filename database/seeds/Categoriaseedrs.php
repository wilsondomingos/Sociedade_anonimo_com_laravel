<?php

use Illuminate\Database\Seeder;

class Categoriaseedrs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(["categoria"=>"PINTURAS"]);
        DB::table('categorias')->insert(["categoria"=>"FOTOGRAFIAS"]);
        DB::table('categorias')->insert(["categoria"=>"DESENHOS"]);
        DB::table('categorias')->insert(["categoria"=>"PRINTS"]);
        DB::table('categorias')->insert(["categoria"=>"HQ"]);
        DB::table('categorias')->insert(["categoria"=>"ESCULTURAS"]);
        DB::table('categorias')->insert(["categoria"=>"ARQUITETURA"]);
        DB::table('categorias')->insert(["categoria"=>"OUTROS"]);

    }
}
