<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserRolePermissionSeeder::class);

        $this->call(MasterProductSeeder::class);
        $this->call(MasterInggridientSeeder::class);
        $this->call(ProductInggridientSeeder::class);

        $this->call(RequestSaleSeeder::class);
        $this->call(DetailRequestSaleSeeder::class);

        $this->call(SupplierSeeder::class);

        $this->call(PurchaseSeeder::class);
        $this->call(DetailPurchaseSeeder::class);
    }
}
