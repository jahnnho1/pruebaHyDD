<?php

use Illuminate\Database\Seeder;
use App\Models\TipoProducto;

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
        factory(TipoProducto::Class)
                ->times(15)
                ->create();
        
    }
}
