<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pizzas')->delete();

        Pizza::create([
            'pizza_name'        => 'Quattro Stagioni',
            'pizza_price'       => 14.50,
            'pizza_image'       => 'QuattroStagioni.png',
            'pizza_description' => 'Tomato sauce, mozzarella, mushrooms, ham, artichokes, olives, and oregano'
        ]);

        Pizza::create([
            'pizza_name' => 'Carbonara',
            'pizza_price' => 17.50,
            'pizza_image'       => 'Carbonara.png',
            'pizza_description' => 'Tomato sauce, mozzarella, parmesan, eggs, and bacon'
        ]);

        Pizza::create([
            'pizza_name' => 'Quattro Formaggi',
            'pizza_price' => 19.50,
            'pizza_image'       => 'QuattroFormaggi.png',
            'pizza_description' => 'Tomato sauce, mozzarella, parmesan, gorgonzola cheese, artichokes, and oregano'
        ]);

        Pizza::create([
            'pizza_name' => 'Margherita',
            'pizza_price' => 12.50,
            'pizza_image'       => 'Margherita.png',
            'pizza_description' => 'Tomato sauce, mozzarella, and oregano'
        ]);

        Pizza::create([
            'pizza_name' => 'Prosciutto',
            'pizza_price' => 18.50,
            'pizza_image'       => 'Prosciutto.png',
            'pizza_description' => 'Tomato sauce, mozzarella, ham, and oregano'
        ]);

        Pizza::create([
            'pizza_name' => 'Vegetariana',
            'pizza_price' => 22.50,
            'pizza_image'       => 'Vegetariana.png',
            'pizza_description' => 'Tomato sauce, mozzarella and a various vegetable'
        ]);

        Pizza::create([
            'pizza_name' => 'Frutti di Mare',
            'pizza_price' => 20.50,
            'pizza_image'       => 'FruttiDiMare.png',
            'pizza_description' => 'Tomato sauce and seafood'
        ]);

        Pizza::create([
            'pizza_name' => 'Napoletana',
            'pizza_price' => 16.50,
            'pizza_image'       => 'Napoletana.png',
            'pizza_description' => 'Tomato sauce, mozzarella, oregano, anchovies'
        ]);
    }
}
