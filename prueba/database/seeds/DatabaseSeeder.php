<?php

use Illuminate\Database\Seeder;
use App\Models\TipoProducto;
use App\Models\Producto;

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
        factory(Producto::Class)
                ->times(30)
                ->create();
        
    }
}
