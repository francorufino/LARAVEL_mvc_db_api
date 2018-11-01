<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Marca::truncate();

      // factory(Marca::class)->times(50)->create();
      $marcas = factory (Marca::class)->times(50)->create();

        // $marca = Marca::create([
        //   'nome'=>"Honda",
        //   'site'=>'www.honda.com.br',
        //   'logo'=>'www.honda.com.br/logo.jpg'
        // ]);
        // $marca->save();
        //
        //
        // $marca = Marca::create([
        //   'nome'=>"Toyota",
        //   'site'=>'www.toyota.com.br',
        //   'logo'=>'www.toyota.com.br/logo.jpg'
        // ]);
        // $marca->save();

    }
}
