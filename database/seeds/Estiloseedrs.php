<?php

use Illuminate\Database\Seeder;

class Estiloseedrs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estilos')->insert(["estilo"=>"FINE ART"]);
        DB::table('estilos')->insert(["estilo"=>"ABSTRATA"]);
        DB::table('estilos')->insert(["estilo"=>"MODERNA"]);
        DB::table('estilos')->insert(["estilo"=>"ART POP"]);
        DB::table('estilos')->insert(["estilo"=>"STREET ART"]);
        DB::table('estilos')->insert(["estilo"=>"REALISMO"]);
        DB::table('estilos')->insert(["estilo"=>"REALISMO"]);
        DB::table('estilos')->insert(["estilo"=>"OUTROS"]);

    }
}
