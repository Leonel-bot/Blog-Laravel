<?php
use App\Noticia;
use Illuminate\Database\Seeder;

class NoticiasTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Noticia::class,20)->create();
    }
}
