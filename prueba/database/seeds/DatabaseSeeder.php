<?php

use Illuminate\Database\Seeder;
use App\Models\TipoProducto;
use App\Models\Producto;
use App\Models\Recurso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Producto::Class,20)->create()->each(function(Producto $producto){
                factory(Recurso::Class)
                ->times(1)
                ->create(['pro_id' => $producto->pro_id]);

        });
              
        
    }
}
