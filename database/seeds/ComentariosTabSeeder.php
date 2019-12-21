<?php
use App\Comentario;
use Illuminate\Database\Seeder;

class ComentariosTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comentario::class,150)->create();
    }
}
