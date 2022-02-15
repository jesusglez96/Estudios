<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Product();

        $producto->name = "Raton";
        $producto->price = 6;
        $producto->stock = 10;
        $producto->description = "Un raton tela de wuapo";
        $producto->image = "img/raton.png";

        $producto->save();
        $producto2 = new Product();

        $producto2->name = "Teclado";
        $producto2->price = 11;
        $producto2->stock = 15;
        $producto2->description = "Un teclado lleno de teclas";
        $producto2->image = "img/teclado.png";

        $producto2->save();
        $producto3 = new Product();

        $producto3->name = "Monitor";
        $producto3->price = 80;
        $producto3->stock = 5;
        $producto3->description = "Monitor con colorines full hd 4k";
        $producto3->image = "img/monitor.png";

        $producto3->save();
        $producto4 = new Product();

        $producto4->name = "Joystick";
        $producto4->price = 6;
        $producto4->stock = 10;
        $producto4->description = "El joystick pa hacer volteretas";
        $producto4->image = "img/joystick.png";

        $producto4->save();
    }
}
