<?php

use Illuminate\Database\Seeder;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(['nome'=>'Harry Potter', 'descricao' => 'potter harry', 'imagem'=>'imagens/img1.jpg']);
        DB::table('produtos')->insert(['nome'=>'Mascara de Hidratação', 'descricao' => 'uma mascara para hidratar', 'imagem'=>'imagens/img2.jpg']);
        DB::table('produtos')->insert(['nome'=>'Cachorrinho', 'descricao' => 'de pelucia', 'imagem'=>'imagens/img3.jpg']);
    }
}
