<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'ProductName' => 'Product 1',
                'Description' => 'Description for Product 1',
                'Price' => 1,
                'AvailableQuantity' => 100,
            ],
            [
                'ProductName' => 'Product 2',
                'Description' => 'Description for Product 2',
                'Price' => 30,
                'AvailableQuantity' => 50,
            ],
            [
                'ProductName' => 'Product 3',
                'Description' => 'Description for Product 3',
                'Price' => 10,
                'AvailableQuantity' => 50,
            ],
            [
                'ProductName' => 'Product 4',
                'Description' => 'Description for Product 4',
                'Price' => 15,
                'AvailableQuantity' => 50,
            ],
            [
                'ProductName' => 'Product 5',
                'Description' => 'Description for Product 4',
                'Price' => 100,
                'AvailableQuantity' => 50,
            ],
            [
                'ProductName' => 'Product 5',
                'Description' => 'Description for Product 5',
                'Price' => 150,
                'AvailableQuantity' => 50,
            ],
            [
                'ProductName' => 'Product 6',
                'Description' => 'Description for Product 6',
                'Price' => 6,
                'AvailableQuantity' => 60,
            ],
            [
                'ProductName' => 'Product 7',
                'Description' => 'Description for Product 7',
                'Price' => 7,
                'AvailableQuantity' => 57,
            ],
            [
                'ProductName' => 'Product 8',
                'Description' => 'Description for Product 8',
                'Price' => 8888,
                'AvailableQuantity' => 80,
            ],
            [
                'ProductName' => 'Product 9',
                'Description' => 'Description for Product 9',
                'Price' => 99,
                'AvailableQuantity' => 10,
            ],
            [
                'ProductName' => 'Product 10',
                'Description' => 'Description for Product 10',
                'Price' => 12,
                'AvailableQuantity' => 50,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
