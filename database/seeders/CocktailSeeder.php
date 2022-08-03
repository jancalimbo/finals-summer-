<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cocktails = [
            [
                'name' => 'The Real Mojito',
                'ingredients' => 'Rum, Mint, Lime, sugar, Club Soda',
                'strength' => 'Light',
                'preparation' => 'As with most cocktails, crafting mojitos requires a few special tools — namely, a muddler. his bartending tool is used to crush fresh herbs and fruits to help release their flavors.',
                'tips' => 'We love our Mojitos with fresh and chunky salsa, totally homemade tacos, shrimp ceviche, or carnitas. And my favorite – Cuban Braised Pork with Mojo.',
            ],
            [
                'name' => 'Beer Margarita',
                'ingredients' => 'Limemade Concentrate, Tequilla, Water, Beer, Ice, Lime',
                'strength' => 'Strong',
            'preparation' => 'Pour limeade, tequila, water, and beer into a large pitcher. Stir until well-blended, and limeade has melted...',
                'tips' => 'If you are re into a Margarita on-the-rocks, try pairing it with a dish that compliments the lime flavors with a chicken or shrimp dish that incorporates lime juice.',
            ],
            [
                'name' => 'Pineapple Sunrise Mimosa',
                'ingredients' => 'Pineapples, Oranges, Lime, Prosecco, Campari',
                'strength' => 'Light',
                'preparation' => 'Stir pineapple juice, orange juice, and lime juice together in a large pitcher or punch bowl. Add pineapple, blood orange, and lime slices.',
                'tips' => 'Since sparkling wine is involved, mimosas are traditionally served in champagne flutes, which helps ..',
            ],
        ];

        foreach ($cocktails as $cocktail) {
            Cocktail::create($cocktail);
        }
    }
}
