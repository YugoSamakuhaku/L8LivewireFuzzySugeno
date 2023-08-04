<?php

declare(strict_types=1);

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\DetailPurchase;
use Illuminate\Database\Seeder;

class DetailPurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $detail_purchases = [
            [
                'id_purchase' => 1,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '02', '28'),
                'qty' => 35000,
                'total_price_inggridient' => 2800000,
            ],
            [
                'id_purchase' => 1,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '01', '30'),
                'qty' => 24000,
                'total_price_inggridient' => 960000,
            ],
            [
                'id_purchase' => 1,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2023', '07', '30'),
                'qty' => 10000,
                'total_price_inggridient' => 200000,
            ],
            [
                'id_purchase' => 2,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '03', '31'),
                'qty' => 27000,
                'total_price_inggridient' => 2160000,
            ],
            [
                'id_purchase' => 2,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '02', '28'),
                'qty' => 20000,
                'total_price_inggridient' => 800000,
            ],
            [
                'id_purchase' => 2,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2023', '08', '31'),
                'qty' => 8000,
                'total_price_inggridient' => 160000,
            ],
            [
                'id_purchase' => 3,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '04', '30'),
                'qty' => 26000,
                'total_price_inggridient' => 2080000,
            ],
            [
                'id_purchase' => 3,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '03', '30'),
                'qty' => 18000,
                'total_price_inggridient' => 720000,
            ],
            [
                'id_purchase' => 3,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2023', '09', '30'),
                'qty' => 7000,
                'total_price_inggridient' => 140000,
            ],
            [
                'id_purchase' => 4,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '05', '30'),
                'qty' => 32000,
                'total_price_inggridient' => 2560000,
            ],
            [
                'id_purchase' => 4,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '04', '30'),
                'qty' => 23000,
                'total_price_inggridient' => 920000,
            ],
            [
                'id_purchase' => 4,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2023', '10', '30'),
                'qty' => 9000,
                'total_price_inggridient' => 180000,
            ],
            [
                'id_purchase' => 5,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '06', '30'),
                'qty' => 32000,
                'total_price_inggridient' => 2560000,
            ],
            [
                'id_purchase' => 5,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '05', '30'),
                'qty' => 23000,
                'total_price_inggridient' => 920000,
            ],
            [
                'id_purchase' => 5,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2023', '11', '30'),
                'qty' => 9000,
                'total_price_inggridient' => 180000,
            ],
            [
                'id_purchase' => 6,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '07', '31'),
                'qty' => 30000,
                'total_price_inggridient' => 2400000,
            ],
            [
                'id_purchase' => 6,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '06', '30'),
                'qty' => 20000,
                'total_price_inggridient' => 800000,
            ],
            [
                'id_purchase' => 6,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2023', '12', '31'),
                'qty' => 8000,
                'total_price_inggridient' => 160000,
            ],
            [
                'id_purchase' => 7,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '08', '30'),
                'qty' => 27000,
                'total_price_inggridient' => 2160000,
            ],
            [
                'id_purchase' => 7,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '07', '30'),
                'qty' => 19000,
                'total_price_inggridient' => 760000,
            ],
            [
                'id_purchase' => 7,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2024', '01', '30'),
                'qty' => 8000,
                'total_price_inggridient' => 160000,
            ],
            [
                'id_purchase' => 8,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '09', '28'),
                'qty' => 25000,
                'total_price_inggridient' => 2000000,
            ],
            [
                'id_purchase' => 8,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '08', '28'),
                'qty' => 18000,
                'total_price_inggridient' => 720000,
            ],
            [
                'id_purchase' => 8,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2024', '02', '28'),
                'qty' => 7000,
                'total_price_inggridient' => 140000,
            ],
            [
                'id_purchase' => 9,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '10', '31'),
                'qty' => 34000,
                'total_price_inggridient' => 2720000,
            ],
            [
                'id_purchase' => 9,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '09', '30'),
                'qty' => 23000,
                'total_price_inggridient' => 920000,
            ],
            [
                'id_purchase' => 9,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2024', '03', '31'),
                'qty' => 9000,
                'total_price_inggridient' => 180000,
            ],
            [
                'id_purchase' => 10,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '11', '30'),
                'qty' => 28000,
                'total_price_inggridient' => 2240000,
            ],
            [
                'id_purchase' => 10,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '10', '30'),
                'qty' => 20000,
                'total_price_inggridient' => 800000,
            ],
            [
                'id_purchase' => 10,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2024', '04', '30'),
                'qty' => 8000,
                'total_price_inggridient' => 160000,
            ],
            [
                'id_purchase' => 11,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2022', '12', '31'),
                'qty' => 31000,
                'total_price_inggridient' => 2480000,
            ],
            [
                'id_purchase' => 11,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '11', '30'),
                'qty' => 22000,
                'total_price_inggridient' => 880000,
            ],
            [
                'id_purchase' => 11,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2024', '05', '31'),
                'qty' => 9000,
                'total_price_inggridient' => 180000,
            ],
            [
                'id_purchase' => 12,
                'id_inggridient' => 1,
                'date_expired' => Carbon::create('2023', '01', '30'),
                'qty' => 30000,
                'total_price_inggridient' => 2400000,
            ],
            [
                'id_purchase' => 12,
                'id_inggridient' => 2,
                'date_expired' => Carbon::create('2022', '12', '30'),
                'qty' => 21000,
                'total_price_inggridient' => 840000,
            ],
            [
                'id_purchase' => 12,
                'id_inggridient' => 3,
                'date_expired' => Carbon::create('2024', '06', '30'),
                'qty' => 8000,
                'total_price_inggridient' => 160000,
            ],
        ];

        foreach ($detail_purchases as $value) {
            DetailPurchase::create($value);
        }
    }
}
