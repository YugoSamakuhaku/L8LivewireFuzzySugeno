<?php

declare(strict_types=1);

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Purchase;
use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $digits = 15;
        $min = pow(10, $digits - 1);
        $max = pow(10, $digits) - 1;

        $purchases = [
            [
                'id_user' => 1,
                'id_supplier' => 4,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2021', '07', '30'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 1,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2021', '08', '31'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 3,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2021', '09', '30'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 6,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2021', '10', '30'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 2,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2021', '11', '30'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 1,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2021', '12', '31'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 2,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2022', '01', '30'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 3,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2022', '02', '28'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 9,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2022', '03', '31'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 2,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2022', '04', '30'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 7,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2022', '05', '31'),
            ],
            [
                'id_user' => 1,
                'id_supplier' => 6,
                'qty_purchase_inggridient' => 3,
                'description_purchase' => 'No Resi = ' . mt_rand($min, $max),
                'date_purchase' => Carbon::create('2022', '06', '30'),
            ],
        ];

        foreach ($purchases as $value) {
            Purchase::create($value);
        }
    }
}
