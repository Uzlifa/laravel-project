<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'ultramilk',
            'code'=>'6824',
            'price'=>7000,
        ]);
        Product::create([
            'name'=>'mrbread',
            'code'=>'7756',
            'price'=>13500,
        ]);
        Product::create([
            'name'=>'kenzler',
            'code'=>'1888',
            'price'=>8500,
        ]);
        Product::create([
            'name'=>'mashmellow',
            'code'=>'6544',
            'price'=>6000,
        ]);
        Product::create([
            'name'=>'aice',
            'code'=>'9045',
            'price'=>3000,
        ]);
    }
}
